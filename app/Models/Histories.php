<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Histories extends Model
{
    
    protected $table = 'history';

    public $fillable = [
        'id_user', 'hari', 'status', 'time'
    ];

    protected $casts = [
        'date' => 'datetime',
    ];
    
    public $timestamps = false;
}
