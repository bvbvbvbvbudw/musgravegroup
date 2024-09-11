<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EmailSetting;
use Illuminate\Http\Request;

class AdminEmailSettingControler extends Controller
{
    public function index()
    {
        $settings = EmailSetting::find(1);
        return view('musgravegroup.admin.pages.email', compact('settings'));
    }
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'email_address' => 'required|email',
            'should_send' => 'nullable',
        ]);
        $settings = EmailSetting::find(1);
        if ($settings) {
            $settings->update([
                'email_address' => $validatedData['email_address'],
                'should_send' => $request->has('should_send') ? 1 : 0,
            ]);
            return redirect()->back()->with('success', 'Email settings updated successfully.');
        }
        return redirect()->back()->withErrors(['error' => 'Email settings not found.']);
    }
}
