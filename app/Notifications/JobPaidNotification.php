<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class JobPaidNotification extends Notification
{
    use Queueable;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->from('noreply@skillpark.com.np', 'Skillpark Inc.')
            ->greeting('Hello ' . $this->model->employer->name . ',')
            ->subject('Job Payment Successful.')
            ->line('Job titled "' . $this->model->title . '" has been paid with the amount of Rs. '. $this->model->budget . ' . Thank You.')
            ->action('Start Hiring', route('jobs.show', $this->model));
    }
}
