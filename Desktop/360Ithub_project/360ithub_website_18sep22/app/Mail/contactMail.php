<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class contactMail extends Mailable
{
    use Queueable, SerializesModels;
    // $this->$mail_data = [];

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mail_data)
    {
        $this->mail_data = $mail_data;
        // dd($this->mail_data);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('');


        return $this->view('front.mail.contactmail')
        ->subject("New Contact Mail from 360ithub.com Contact Form")
        ->with([
            'email_data' => $this->mail_data,
            ]);
    }
}
