<?php

namespace App\Http\Controllers;

use App\Models\CareerForm;
use App\Models\UserApplied;
use App\Models\UserSender;
use App\Models\Vacancy;
use App\Models\VacancyCategory;
use App\Models\VacancyLocation;
use App\Traits\NewsDate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

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
//        return view('musgravegroup.pages.careers.form');

        $form = new CareerForm();
        $form -> name_product = $request->input('name_product');
        $form -> company_name = $request->input('company_name');
        $form -> address_line_1 = $request->input('address1');
        $form -> address_line_2 = $request->input('address2');
        $form -> town = $request->input('address3');
        $form -> county = $request->input('location');
        $form -> postcode = $request->input('postcode');
        $form -> dial_code = $request->input('formData.500');
        $form -> phone = $request->input('mobileTelephone');
        $form -> email = $request->input('applicantEmail');
        $form -> product_name = $request->input('formData.7495');
        $form -> description_product = $request->input('formData.79');
        $form -> description_business = $request->input('formData.111');

        $form->created_at = now();
        $form->updated_at = now();
        $form->save();

        return redirect()->back();
    }

    public function send(Request $request)
    {
//        $validatedData = $request->validate([
//            'title' => 'required|string',
//            'firstName' => 'required|string',
//            'secondName' => 'required|string',
//            'mobileTelephone' => 'required|string',
//            'applicantEmail' => 'required|email',
//            'criteria1' => 'array',
//            'criteria1.*' => 'integer',
//            'criteria2' => 'array',
//            'criteria2.*' => 'integer',
//        ]);
        $validatedData = $request->all();
        $preferredCategories = array_map('intval', $validatedData['criteria1']);
        $preferredLocations = array_map('intval', $validatedData['criteria2']);
        UserSender::create([
            'title' => $validatedData['title'],
            'forenames' => $validatedData['firstName'],
            'surname' => $validatedData['secondName'],
            'telephone' => $validatedData['mobileTelephone'],
            'email' => $validatedData['applicantEmail'],
            'preferred_categories' => $preferredCategories,
            'preferred_locations' => $preferredLocations,
        ]);
        Log::info('User saved successfully');
        return redirect()->back()->with('status', 'Email alerts saved successfully.');
    }


    public function show($url)
    {
        $vacancy = Vacancy::where('url', $url)->first();
        if ($vacancy) return view('musgravegroup.pages.careers.single', compact('vacancy'));
    }

    public function apply($id)
    {
        return view('musgravegroup.pages.careers.apply', compact('id'));
    }

    public function applySend(Request $request, $id)
    {
        // Валидация входящих данных
//        $validator = Validator::make($request->all(), [
//            'title' => 'required|string|max:255',
//            'firstName' => 'required|string|max:255',
//            'secondName' => 'required|string|max:255',
//            'address1' => 'required|string|max:255',
//            'address2' => 'nullable|string|max:255',
//            'address3' => 'required|string|max:255',
//            'location' => 'required|string|max:255',
//            'postcode' => 'required|string|max:20',
//            'mobileTelephone' => 'required|string|max:20',
//            'applicantEmail' => 'required|email|max:255|same:emailConfirm',
//            'formData.33' => 'required|boolean', // Are you over 16?
//            'formData.23' => 'required|boolean', // Eligible to work in the EU?
//            'formData.7495' => 'nullable|string', // Eligibility details
//            'formData.30' => 'required|boolean', // Criminal convictions
//            'formData.79' => 'nullable|string', // Conviction details
//            'formData.111' => 'nullable|string|max:255', // Where did you see this role advertised
//        ]);
//
//        if ($validator->fails()) {
//            return redirect()->back()
//                ->withErrors($validator)
//                ->withInput();
//        }

        $userApplied = new UserApplied();
        $userApplied->title = $request->input('title');
        $userApplied->first_name = $request->input('firstName');
        $userApplied->surname = $request->input('secondName');
        $userApplied->address_line_1 = $request->input('address1');
        $userApplied->address_line_2 = $request->input('address2');
        $userApplied->town = $request->input('address3');
        $userApplied->country = $request->input('location');
        $userApplied->postcode = $request->input('postcode');
        $userApplied->dial_code = $request->input('formData.500');
        $userApplied->phone = $request->input('mobileTelephone');
        $userApplied->email = $request->input('applicantEmail');
        $userApplied->is_over_16 = $request->input('formData.33') === 'Yes';
        $userApplied->is_eligible_to_work_in_eu = $request->input('formData.23') === 'Yes';
        $userApplied->eligibility_details = $request->input('formData.7495');
        $userApplied->has_criminal_convictions = $request->input('formData.30') === 'Yes';
        $userApplied->conviction_details = $request->input('formData.79');
        $userApplied->role_advertised_source = $request->input('formData.111');
        $userApplied->vacancy_id = $id;
        $userApplied->save();

        return redirect()->back();
    }

    public function supply()
    {
        return view('musgravegroup.pages.careers.sectors.supply-chain');
    }

    public function sales()
    {
        return view('musgravegroup.pages.careers.sectors.sales');
    }

    public function technology()
    {
        return view('musgravegroup.pages.careers.sectors.technology');
    }

    public function commercial()
    {
        return view('musgravegroup.pages.careers.sectors.comm');
    }

    public function finance()
    {
        return view('musgravegroup.pages.careers.sectors.finance');
    }

    public function graduates()
    {
        return view('musgravegroup.pages.careers.sectors.gradu');
    }

    public function working()
    {
        return view('musgravegroup.pages.careers.working');
    }

    public function sectors()
    {
        return view('musgravegroup.pages.careers.sectors');
    }

    public function current(Request $request)
    {
        $search = $request->input('search');

        if ($request->has('search') && !empty($search)) {
            // Получаем все колонки таблицы вакансий
            $vacancyColumns = \Schema::getColumnListing('vacancies');

            $vacancies = Cache::remember("vacancies_data_page_{$search}", now()->addHour(), function() use ($search, $vacancyColumns) {
                $query = Vacancy::where('is_closed', 0)->where('status', 'approved');

                // Поиск по полям основной таблицы 'vacancies'
                foreach ($vacancyColumns as $column) {
                    $query->orWhere($column, 'LIKE', "%{$search}%");
                }

                // Поиск по связанным моделям, например, 'location' и 'category'
                $query->orWhereHas('location', function($q) use ($search) {
                    $q->where('location', 'LIKE', "%{$search}%");
                });

                $query->orWhereHas('category', function($q) use ($search) {
                    $q->where('category', 'LIKE', "%{$search}%");
                });

                return $query->get();
            });
        } else {
            $vacancies = Cache::remember("vacancies_data_page", now()->addHour(), function () {
                return Vacancy::where('is_closed', 0)->get();
            });
        }

        if ($vacancies) {
            $vacancies = $this->addFormattedDate($vacancies);
            return view('musgravegroup.pages.careers.current', compact('vacancies'));
        }
    }


}
