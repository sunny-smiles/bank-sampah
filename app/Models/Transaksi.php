<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_transaksi';

    protected $fillable = [
        'id_warga',
        'id_admin',
        'id_petugas',
        'harga_total',
    ];

    public function transaksiDetail(){
        return $this->hasOne(TransaksiDetail::class, 'id_transaksi');
    }

    public function warga(){
        return $this->belongsTo(Warga::class, 'id_warga');
    }

    public function petugas(){
        return $this->belongsToMany(Petugas::class, 'transaksi_petugas', 'id_transaksi', 'id_petugas');
    }

    public function admin(){
        return $this->belongsToMany(Admin::class, 'transaksi_admin', 'id_transaksi', 'id_admin');
    }
}
