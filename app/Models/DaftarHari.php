<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarHari extends Model
{
    
    protected $table = 'hari';

    public $fillable = [
        'hari', 'daftar_olahraga'
    ];
}
