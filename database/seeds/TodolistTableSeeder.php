<?php

use Illuminate\Database\Seeder;

class TodolistTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Todolist::class, 50)->create();
    }
}
