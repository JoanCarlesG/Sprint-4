<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    // Disable the model timestamps
    public $timestamps = false;
    protected $primaryKey = 'player_id';
    use HasFactory;
}
