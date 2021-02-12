<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class history extends Model
{
    
    protected $table = 'history';

    public $fillable = [
        'id_history', 'id_user', 'id_hari', 'status'
    ];
    
    protected $primaryKey = 'id_history';
    
    protected $keyType = 'int';
    
    public $incrementing = false;

    public function user() {
        return $this->belongsTo(related:'App\Model\User', foreignKey: 'id_user' ); 
    }

    public function hari() {
        return $this->belongsTo(related:'App\Model\hari', foreignKey: 'id_hari');
    }
}
