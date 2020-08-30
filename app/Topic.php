<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    public $table = 'topics';

    public function freelancers()
    {
        return $this->belongsToMany(User::class);
    }

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
