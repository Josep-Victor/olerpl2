<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class JenisOlahraga extends Model
{
    protected $table = 'jenis_olahraga';

    public $fillable = [
        'id_olahraga', 'nama_olahraga', 'jumlah'
    ];
    
    protected $primaryKey = 'id_olahraga';
    
    protected $keyType = 'int';
    
    public $incrementing = false;
    
    public static function jumlah($jml){
        if (Auth::user()->kategori == 1){
            return $jml + 1;
        }
    }
}
