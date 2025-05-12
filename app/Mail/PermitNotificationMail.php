<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PermitNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $permit;

    public function __construct($permit)
    {
        $this->permit = $permit;
    }

    public function build()
    {
        return $this->subject('Notifikasi Izin')
            ->view('emails.permit-notification');
    }
}
