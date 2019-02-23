<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function users()
    {/**
     * The events that belong to the user.
     */
        return $this->belongsToMany('App\User');
    }
}
