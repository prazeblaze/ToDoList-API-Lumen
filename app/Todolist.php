<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todolist extends Model
{
    protected $table = 'todolist';
    
    protected $fillable = ['name', 'priority', 'location', 'user_id', 'timestart'];
}
