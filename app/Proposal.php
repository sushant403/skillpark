<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    protected $guarded = [];
    
    public function candidates()
    {
        return $this->belongsTo(Candidate::class);
    }


}
