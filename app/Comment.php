<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['body'];

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function newCollection(array $models = [])
    {
        return new CommentCollection($models);
    }

    public function getAvatar($userId)
    {
        return User::findOrFail($userId)->getAvatar();
    }
}
