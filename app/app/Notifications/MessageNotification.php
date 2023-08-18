<?php

namespace App\Notifications;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\URL;
use App\Mail\EmailManager;
use Auth;
use App\Models\User;

class MessageNotification extends Notification
{
    use Queueable;

    public function __construct()
    {
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        $array['view'] = 'emails.app_verification';
        $array['subject'] = translate('Email Message Verification');
        $array['content'] = translate('Please enter the code:'.$notifiable->verification_code);

        return (new MailMessage)
            ->view('emails.app_verification', ['array' => $array])
            ->subject(translate('Email Verification - ').env('APP_NAME'));
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
