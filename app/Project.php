<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    public function clients()
    {
        return $this->belongsTo(Client::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
    
}
