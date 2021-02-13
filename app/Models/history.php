<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class history extends Model
{
    
    protected $table = 'history';

    public $fillable = [
        'id_user', 'hari', 'status'
    ];

    protected $casts = [
        'date' => 'datetime',
    ];

    public $timestamps = false;
}