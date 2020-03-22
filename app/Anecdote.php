<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anecdote extends Model
{
    protected $fillable = ['content', 'article_id', 'user_id'];

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

    public function article()
    {
        return $this->belongsTo(\App\Article::class);
    }
}
