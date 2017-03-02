<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests\ContactRequest;
use App\Mail\Contacted;

class ContactController extends Controller
{
    public function sendMail(ContactRequest $request)
    {
        Mail::to('conpw3@gmail.com')->send(new Contacted($request));
    }
}
