<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ToDoItem extends Model
{
    protected $fillable = ['title', 'completed'];

    protected $casts = [
        'completed' => 'boolean',
    ];




}
