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
            ->line('Gunakan kode OTP berikut untuk mengatur ulang password Anda:')
            ->line("**$this->otp**") // Tampilkan OTP di email
            ->line('Kode ini berlaku selama 5 menit.');
    }
}
