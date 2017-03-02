<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Http\Requests\ContactRequest;

class Contacted extends Mailable
{
    use Queueable, SerializesModels;

    protected $request;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ContactRequest $request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.contact')
                    ->subject('ポートフォリオからお問い合わせ')
                    ->with([
                        'contact_name' => $this->request->name,
                        'contact_email' => $this->request->email,
                        'contact_subject' => $this->request->subject,
                        'contact_body' => $this->request->body,
                    ]);
    }
}
