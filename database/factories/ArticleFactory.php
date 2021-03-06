<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'article_text' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'user_id' => random_int(1, 100)
    ];
});
