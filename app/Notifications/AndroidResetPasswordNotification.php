<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class AndroidResetPasswordNotification extends Notification
{
    protected $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Reset Password Android')
            ->line('Klik tombol di bawah untuk mereset password Anda di aplikasi Android:')
            ->action('Reset Password', url('/android-reset-password?token=' . $this->token))
            ->line('Token ini hanya berlaku selama 30 menit.');
    }
}
