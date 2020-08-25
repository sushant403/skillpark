<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
    protected $guarded = [];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function skills()
    {
        return $this->hasMany(Skill::class);
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
