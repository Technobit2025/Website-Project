<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class AndroidOtpNotification extends Notification
{
    protected $otp;

    public function __construct($otp)
    {
        $this->otp = $otp;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {

        return (new MailMessage)
            ->subject('Kode OTP Reset Password')
            ->view('emails.otp', [
                'otp' => $this->otp,
                'email' => $notifiable->email,
                'name' => $notifiable->name,
            ]);
    }
}
