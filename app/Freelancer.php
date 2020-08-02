<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
    protected $guarded = [];

    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }

    public function proposals()
    {
        return $this->hasMany(Proposal::class);
    }

    public function clients()
    {
        return $this->belongsToMany(Client::class);
    }
}
