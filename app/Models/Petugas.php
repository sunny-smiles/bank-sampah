<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_petugas';

    protected $fillable = [
        'nama_petugas',
        'password',
        'nomor_telepon',
        'email',
    ];

    public function tanggapan(){
        return $this->belongsToMany(Tanggapan::class);
    }

    public function transaksi(){
        return $this->belongsToMany(Transaksi::class, 'transaksi_petugas', 'id_petugas', 'id_transaksi');
    }
}
