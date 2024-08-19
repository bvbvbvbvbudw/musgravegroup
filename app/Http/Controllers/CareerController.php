<?php

namespace App\Http\Controllers;

use App\Mail\AdminSubscriptionNotificationMail;
use App\Mail\SubscriptionConfirmationMail;
use App\Models\CareerForm;
use App\Models\User;
use App\Models\UserApplied;
use App\Models\UserSender;
use App\Models\Vacancy;
use App\Models\VacancyCategory;
use App\Models\VacancyLocation;
use App\Traits\NewsDate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Queue;

class CareerController extends Controller
{
    use NewsDate;

    public function index()
    {
        return view('musgravegroup.pages.careers.careers');
    }

    public function alerts()
    {
        $categories = VacancyCategory::all();
        $locations = VacancyLocation::all();
        return view('musgravegroup.pages.emailAlerts', compact('categories', 'locations'));
    }

    public function forCompany()
    {
        return view('musgravegroup.pages.careers.form');
    }

    public function forCompanySend(Request $request)
    {
        try {
            $form = CareerForm::create([
                'name_product' => $request->input('name_product'),
                'company_name' => $request->input('company_name'),
                'address_line_1' => $request->input('address1'),
                'address_line_2' => $request->input('address2'),
                'town' => $request->input('address3'),
                'county' => $request->input('location'),
                'postcode' => $request->input('postcode'),
                'dial_code' => $request->input('formData.500'),
                'phone' => $request->input('mobileTelephone'),
                'email' => $request->input('applicantEmail'),
                'product_name' => $request->input('formData.7495'),
                'description_product' => $request->input('formData.79'),
                'description_business' => $request->input('formData.111'),
                'created_at' => now(),
                'updated_at' => now()
            ]);

            return redirect()->back()->with('status', 'Form submitted successfully.');
        } catch (\Exception $e) {
            Log::error('Error submitting company form: ' . $e->getMessage());
            return redirect()->back()->withErrors('Failed to submit form.');
        }
    }

    public function send(Request $request)
    {
        $validatedData = $request->all();
        $preferredCategories = array_map('intval', $validatedData['criteria1']);
        $preferredLocations = array_map('intval', $validatedData['criteria2']);

        try {
            UserSender::create([
                'title' => $validatedData['title'],
                'forenames' => $validatedData['firstName'],
                'surname' => $validatedData['secondName'],
                'telephone' => $validatedData['mobileTelephone'],
                'email' => $validatedData['applicantEmail'],
                'preferred_categories' => $preferredCategories,
                'preferred_locations' => $preferredLocations,
            ]);

            Queue::push(function () use ($validatedData) {
                Mail::to($validatedData['applicantEmail'])->send(new SubscriptionConfirmationMail());

                $users = User::where('role', 'admin')->get();
                foreach ($users as $user) {
                    Mail::to($user->email)->send(new AdminSubscriptionNotificationMail($user->email));
                }
            });

            return redirect()->back()->with('status', 'Email alerts saved successfully.');
        } catch (\Exception $e) {
            Log::error('Error processing email alerts: ' . $e->getMessage());
            return redirect()->back()->withErrors('Failed to save email alerts.');
        }
    }

    public function show($url)
    {
        try {
            $vacancy = Vacancy::where('url', $url)->firstOrFail();
            return view('musgravegroup.pages.careers.single', compact('vacancy'));
        } catch (\Exception $e) {
            Log::error('Error fetching vacancy: ' . $e->getMessage());
            return redirect()->back()->withErrors('Vacancy not found.');
        }
    }

    public function apply($id)
    {
        return view('musgravegroup.pages.careers.apply', compact('id'));
    }

    public function applySend(Request $request, $id)
    {
        try {
            $userApplied = UserApplied::create([
                'title' => $request->input('title'),
                'first_name' => $request->input('firstName'),
                'surname' => $request->input('secondName'),
                'address_line_1' => $request->input('address1'),
                'address_line_2' => $request->input('address2'),
                'town' => $request->input('address3'),
                'country' => $request->input('location'),
                'postcode' => $request->input('postcode'),
                'dial_code' => $request->input('formData.500'),
                'phone' => $request->input('mobileTelephone'),
                'email' => $request->input('applicantEmail'),
                'is_over_16' => $request->input('formData.33') === 'Yes',
                'is_eligible_to_work_in_eu' => $request->input('formData.23') === 'Yes',
                'eligibility_details' => $request->input('formData.7495'),
                'has_criminal_convictions' => $request->input('formData.30') === 'Yes',
                'conviction_details' => $request->input('formData.79'),
                'role_advertised_source' => $request->input('formData.111'),
                'vacancy_id' => $id
            ]);

            return redirect()->back()->with('status', 'Application submitted successfully.');
        } catch (\Exception $e) {
            Log::error('Error submitting application: ' . $e->getMessage());
            return redirect()->back()->withErrors('Failed to submit application.');
        }
    }

    public function current(Request $request)
    {
        $search = $request->input('search', '');
        $page = $request->input('page', 1);
        try {
            if (!empty($search)) {
                $vacancyColumns = \Schema::getColumnListing('vacancies');
                $vacancies = Vacancy::where('is_closed', 0)->where('status', 'approved')->where('title', $search)->paginate(10);
            } else {
                $cacheKey = "vacancies_data_page_{$page}";
                $vacancies = Cache::remember($cacheKey, now()->addHour(), function () {
                    return Vacancy::where('is_closed', 0)
                        ->where('status', 'approved')
                        ->paginate(10);
                });
            }
            $count = Vacancy::where('is_closed', 0)->where('status', 'approved')->count();
            $vacancies->getCollection()->transform(function ($vacancy) {
                return $this->addFormattedDate($vacancy);
            });
            return view('musgravegroup.pages.careers.current', compact('vacancies', 'count'));
        } catch (\Exception $e) {
            Log::error('Error fetching vacancies: ' . $e->getMessage());
            return redirect()->back()->withErrors('Failed to load vacancies.');
        }
    }
}
