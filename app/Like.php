<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    rpublic function post()
    {
        return $this->belongsTo('App\Post', 'post_id');
    }
}
