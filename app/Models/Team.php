<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    // Disable the model timestamps
    public $timestamps = false;
    protected $primaryKey = 'team_id';
    
    use HasFactory;
}
