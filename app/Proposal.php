<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Proposal extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia;


    public $table = 'proposals';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'approved_at',
        'rejected_at',
    ];

    protected $fillable = [
        'job_id',
        'budget',
        'created_at',
        'updated_at',
        'deleted_at',
        'approved_at',
        'rejected_at',
        'candidate_id',
        'proposal_text',
        'comment',
        'url',
    ];

    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id');
    }

    public function candidate()
    {
        return $this->belongsTo(User::class, 'candidate_id');
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
}
