<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_warga';

    protected $fillable = [
        'nama_warga',
        'password',
        'nomor_telepon',
        'email',
    ];

    public function saldo(){
        return $this->hasOne(Saldo::class, 'id_saldo');
    }

    public function keluhan(){
        return $this->hasMany(Keluhan::class, 'id_warga');
    }

    public function transaksi(){
        return $this->hasMany(Transaksi::class, 'id_warga');
    }
}
