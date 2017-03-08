<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests\ContactRequest;
use App\Mail\Contacted;
use Carbon\Carbon;
use Session;

class ContactController extends Controller
{
    public function sendMail(ContactRequest $request)
    {
        Mail::to('portfolio@conpw3.sakura.ne.jp')->send(new Contacted($request));
        Session::flash('mail_success', true);
    }
}
