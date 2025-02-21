<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Agent extends Model
{
    use HasFactory;

    protected $table = 'agents';

    protected $fillable = [
        'agent', 'agent_email'
    ];
}
