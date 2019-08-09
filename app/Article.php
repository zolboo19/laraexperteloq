<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //protected $fillable = ['title', 'article_text', 'user_id'];
    protected $guarded = [];

    protected $perPage = 5;
}
