<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function gigs()
    {
        return $this->hasMany('App\Gig','company_id','id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
