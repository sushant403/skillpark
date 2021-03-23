<?php

namespace App;

use App\User;
use App\Topic;
use App\Category;
use App\Proposal;
use Carbon\Carbon;
use Spatie\MediaLibrary\HasMedia;
use App\Observers\JobActionObserver;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Support\Facades\Notification;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Notifications\YouAreHiredNotification;

class Job extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia;

    public $table = 'jobs';

    protected $dates = [
        'hired_at',
        'paid_at',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'budget',
        'paid_at',
        'category_id',
        'hired_at',
        'created_at',
        'updated_at',
        'deleted_at',
        'employer_id',
        'description',
        'candidate_id',
        'delivery_time',
        'topic',
        'company',
    ];

    public static function boot()
    {
        parent::boot();
        Job::observe(new JobActionObserver);
    }

    public static function booting()
    {
        self::updated(function (Job $job) {
            if ($job->isDirty('candidate_id')) {
                Notification::route('mail', $job->candidate->email)->notify(new YouAreHiredNotification($job));
            }
        });
    }

    public function employer()
    {
        return $this->belongsTo(User::class, 'employer_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function candidate()
    {
        return $this->belongsTo(User::class, 'candidate_id');
    }

    public function proposals()
    {
        return $this->hasMany(Proposal::class, 'job_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function topics()
    {
        return $this->belongsTo(Topic::class);
    }

    public function scopeSearchResults($query)
    {
        return $query->when(!empty(request()->input('category', 0)), function ($query) {
            $query->whereHas('categories', function ($query) {
                $query->whereId(request()->input('category'));
            });
        })
            ->when(!empty(request()->input('search', '')), function ($query) {
                $query->where(function ($query) {
                    $search = request()->input('search');
                    $query->where('title', 'LIKE', "%$search%")
                        ->orWhere('description', 'LIKE', "%$search%");
                });
            });
    }

    public function getattachmentsAttribute()
    {
        return $this->getMedia('attachments');
    }

    public function getCreatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d | h:i A');
    }

    public function getUpdatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d | h:i A');
    }

    public function getHiredAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setHiredAtAttribute($value)
    {
        $this->attributes['hired_at'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    // public function getPaidAtAttribute($value)
    // {
    //     return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    // }

    // public function setPaidAtAttribute($value)
    // {
    //     $this->attributes['paid_at'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    // }
}
