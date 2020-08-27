<?php

namespace App;

use App\User;
use App\Proposal;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Job extends Model
{
    use SoftDeletes, InteractsWithMedia;

    public $table = 'jobs';

    protected $dates = [
        'hired_at',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'budget',
        'category_id',
        'hired_at',
        'created_at',
        'updated_at',
        'deleted_at',
        'employer_id',
        'description',
        'candidate_id',
        'delivery_time',
    ];

    public function employer()
    {
        return $this->belongsTo(User::class, 'employer_id');
    }

    public function candidate()
    {
        return $this->belongsTo(User::class, 'candidate_id');
    }

    public function proposals()
    {
        return $this->hasMany(Proposal::class, 'job_id');
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
}
