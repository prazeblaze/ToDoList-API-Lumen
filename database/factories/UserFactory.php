<?php
// Nama File: app/database/factories/UserFactory.php
use Faker\Generator as Faker;
 
$factory->define(App\User::class, function (Faker $faker) {
    static $password;
    return [
        'username' => $faker->userName,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});