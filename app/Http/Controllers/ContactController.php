<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserSupplierRequest;
use App\Mail\Supplied\AdminMail;
use App\Mail\Supplied\UserMail;
use App\Models\User;
use App\Models\UserSupplier;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function index()
    {
        return view('musgravegroup.pages.contact');
    }

    public function become()
    {
        return view('musgravegroup.pages.become');
    }

    public function becomeSend(StoreUserSupplierRequest $request)
    {
        Log::info('Received request:', $request->all());

        try {
            $data = $request->validated();

            $form = new UserSupplier;
            $form->brand_name = $data['brand_name'];
            $form->company_name = $data['company_name'];
            $form->business_address = $data['business_address'];
            $form->phone = $data['mobileTelephone'];
            $form->name = $data['name'];
            $form->email = $data['applicantEmail'];
            $form->is_contact = $data['formData'][33] ?? null;
            $form->tell_about = $data['formData'][7495] ?? null;
            $form->payment_type = $data['formData'][1312] ?? null;
            $form->product_name = $data['product_name'];
            $form->product_type = $data['type_of_product'];
            $form->description_few = $data['description_few'];
            $form->manufacturing_your_product = $data['manufacturing_your_product'];
            $form->product_made = $data['product_made'];
            $form->market_place = $data['market_place'];
            $form->products_similar = $data['products_similar'];
            $form->product_fit = $data['product_fit'];
            $form->additional_comment = $data['additional_comment'];
            $form->save();

            Queue::push(function () use ($data) {
                try {
                    Mail::to($data['applicantEmail'])->send(new UserMail($data));
                    Mail::to('info@musgraveofficial.com')->send(new AdminMail($data));

                    $admins = User::where('role', 'admin')->get();
                    foreach ($admins as $admin) {
                        Mail::to($admin->email)->send(new AdminMail($data));
                    }
                } catch (\Exception $e) {
                    Log::error('Error sending email notifications: ' . $e->getMessage());
                }
            });
            return redirect()->back();
        } catch (\Exception $e) {
            Log::error('Error processing form submission: ' . $e->getMessage());
            return redirect()->back();
        }
    }
}
