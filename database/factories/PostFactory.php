<?php

use Faker\Generator as Faker;
use App\Post;
use App\User;
use App\Category;
use App\Game;

$factory->define(Post::class, function (Faker $faker) {
    $totalCategories = Category::all()->count();
    $totalUsers = User::all()->count();
    $totalGames = Game::all()->count();
    return [
        'title' => $faker->sentence,
        'slug' => $faker->slug,
        'content' => $faker->paragraph,
        'image' => 'default.jpg',
        'category_id' => $faker->numberBetween(1, $totalCategories),
        'user_id' => $faker->numberBetween(1, $totalUsers),
        'game_id' => $faker->numberBetween(1, $totalGames)
    ];
});
