<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /** @use HasFactory<\Database\Factories\TaskControllerFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        // 'completed',
        'tag',
        'priority',
    ];
}
