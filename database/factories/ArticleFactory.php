<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        //
        'title'	=>	$faker->sentence($nbWords = 10, $variableNbWords = true),
        'body'	=>	$faker->realText($maxNbChars = 200, $indexSize = 2),
        'user_id'	=>	1,
        'like'	=>	0,
        'draft'	=>	true
    ];
});
