<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saldo extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_saldo';

    protected $fillable = [
        'id_warga',
        'saldo_total',
    ];

    public function warga(){
        return $this->belongsTo(Warga::class, 'id_warga');
    }
}
