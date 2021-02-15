<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarOlahraga extends Model
{
    
    protected $table = 'daftar_olahraga';

    public $fillable = [
        'nama_olahraga', 'jumlah'
    ];

    
}
