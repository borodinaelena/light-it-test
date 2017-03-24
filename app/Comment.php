<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comments()
    {
        return $this->hasMany(__CLASS__, 'parent_id');
    }
    
    public function allCommentsWithUser()
    {
        return $this->comments()->with(__FUNCTION__, 'user');
    }
}
