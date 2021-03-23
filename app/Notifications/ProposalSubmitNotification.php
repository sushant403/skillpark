<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Lang;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ProposalSubmitNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($client)
    {
        $this->client = $client;
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
        $proposalUrl = route('jobs.show', $this->client->job->id);

        return (new MailMessage)
            ->from('noreply@skillpark.com.np', 'Skillpark Inc.')
            ->subject('Proposal Submission Request Received')
            ->greeting('Hello ' . $this->client->job->employer->name . ',')
            ->line('Your job - \'' . $this->client->job->title . '\' has received a proposal request from \'' . $this->client->candidate->name . '\' with the following details.')
            ->line('Statement: ' . $this->client->comment)
            ->action(Lang::get('Start Hiring'), $proposalUrl)
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
