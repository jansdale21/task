<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkItem extends Model
{
    protected $fillable = [
        'name',
        'type',
        'status',
        'assigned_to',
    ];
}
