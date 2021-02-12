<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hari extends Model
{
    
    protected $table = 'hari';

    public $fillable = [
        'id_hari', 'kategori', 'hari', 'olahraga1', 'olahraga2', 'olahraga3', 'olahraga4', 'olahraga5', 'olahraga6',
        'olahraga7', 'olahraga8', 'olahraga9', 'olahraga10', 'olahraga11', 'olahraga12', 'olahraga13', 'olahraga14',
    ];
    
    protected $primaryKey = 'id_hari';
    
    protected $keyType = 'int';
    
    public $incrementing = false;
}
