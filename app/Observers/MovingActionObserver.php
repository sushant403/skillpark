<?php

namespace App\Observers;

use App\Job;
use App\Notifications\JobPaidNotification;
use Illuminate\Support\Facades\Notification;

class MovingActionObserver
{

    public function updating(Job $model)
    {
        $model->load('user');

        if ($model->employer) {
            $users = \App\User::whereHas('roles', function ($q) {
                return $q->where('title', 'Employer');
            })->get();
            Notification::send($users, new JobPaidNotification($model));
        }
    }
}
