<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public function admin(){
    	return $this->belongsTo('App\Admin');
    }

    public function bookings(){
    	return $this->hasMany('App\Booking');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
