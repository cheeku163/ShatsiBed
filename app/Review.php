<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
    // user who favourited
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
