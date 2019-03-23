<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = ['caption','toShareImg','tag','user_id'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
    public function scopeTagFilter($query, ?string $tag)
    {
        if(!is_null($tag)){
            return $query->where('tag',$tag);
        }
        return $query;
    }
}
