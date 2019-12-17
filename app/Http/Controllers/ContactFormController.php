<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'email' => "required|email",
            'name' => 'required',
            'message' => "required",
        ]);

        // send an email
        Mail::to("test@test.co")->send(new ContactFormMail($data));

        return redirect('contact');
    }
}
