<?php

namespace App\Observers;

use App\Job;
use App\Notifications\JobPaidNotification;
use Illuminate\Support\Facades\Notification;

class JobActionObserver
{
    public function updating(Job $model)
    {
        $model->load('employer');

        if ($model->employer) {
            if ($model->isDirty('paid_at') && $model->getOriginal('paid_at') == null) {
                $model->employer->notify(new JobPaidNotification($model));
            }
        }
    }
}
