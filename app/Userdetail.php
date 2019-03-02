<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userdetail extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
