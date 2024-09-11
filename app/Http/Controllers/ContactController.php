<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserSupplierRequest;
use App\Jobs\SendEmailsJob;
use App\Models\EmailSetting;
use App\Models\UserSupplier;
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

            $should = EmailSetting::find(1)->should_send;
            $email = null;
            if($should) {
                $email = EmailSetting::find(1)->email_address;
            }
            SendEmailsJob::dispatch($data, $email, $should);

            return redirect()->back()->with('status', 'Success');
        } catch (\Exception $e) {
            Log::error('Error processing form submission: ' . $e->getMessage());
            return redirect()->back()->with('status', 'Error, try later');
        }
    }
}
