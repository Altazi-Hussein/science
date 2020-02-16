<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [/* 'title',  */'content', 'user_id', 'article_id'];

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

    public function article()
    {
        return $this->belongsTo(\App\Article::class);
    }
}
