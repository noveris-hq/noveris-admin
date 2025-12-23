<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title',
        'description',
        'status',
        'due_date',
        'priority',
        'position',
    ];

    protected function casts(): array
    {
        return [
            'due_date' => 'datetime',
            'priority' => 'string',
        ];
    }
}
