<?php
// Nama File: app/database/factories/TaskFactory.php
use Faker\Generator as Faker;

$factory->define(App\Todolist::class, function (Faker $faker) {
    $users = App\User::pluck('id')->toArray();
    return [
        'name' => $faker->realText(500),
        'priority' => $faker->numberBetween(0, 2),
        'location' => $faker->address,
        'user_id' => $faker->randomElement($users),
        'timestart' => $faker->dateTime
    ];
});