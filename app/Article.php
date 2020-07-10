<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Tag;
use App\Comment;

class Article extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('commentCount', function ($builder) {
            $builder->withCount('comments');
        });
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function getThreadedComments()
    {
        return $this->comments()->where('status', 1)->with('owner')->get()->threaded();
    }

    public function addComment($attributes)
    {
        $comment = (new Comment)->forceFill($attributes);
       // dd($comment);
        $comment->user_id = auth()->id();
        $comment->save();
        
        return redirect()->back()->with('status', 'Ваш комментарий будет скоро добавлен!');

    }

    public function tags()
    {
        return $this->belongsToMany(
           Tag::class,
            'article_tags',
            'article_id',
            'tag_id'
        );
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }


}
