<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Lang;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class YouAreHiredNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($job)
    {
        $this->job = $job;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $proposalUrl = route('proposals.index');

        return (new MailMessage)
            ->from('noreply@skillpark.com.np', 'Skillpark Inc.')
            ->subject('Proposal Accepted and Hired')
            ->greeting('Hello ' . $this->job->candidate->name . ',')
            ->line('You have been hired for the job - \'' . $this->job->title . '\' by \'' . $this->job->employer->name . '\'.')
            ->line('You may contact directly via the email - ' . $this->job->employer->email . '.')
            ->line('Please visit the Proposal Dashboard for more information.')
            ->action(Lang::get('Dashboard'), $proposalUrl)
            ->line('Please DO NOT reply to this auto-generated mail.')
            ->line('Thank you.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
