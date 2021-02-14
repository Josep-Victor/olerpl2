<?php

namespace App\Models\History;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
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
