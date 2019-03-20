<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['user_id','content_id','message'];
    
    public function user()
    {
        $this->belongsTo(User::class);
    }
    
    public function content()
    {
        $this->belongsTo(Content::class);
    }
}
