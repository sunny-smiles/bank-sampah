<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_admin';

    protected $fillable = [
        'nama_admin',
        'password',
        'nomor_telepon',
        'email',
    ];

    public function tanggapans(){
        return $this->belongsToMany(Tanggapan::class);
    }

    public function transaksis(){
        return $this->belongsToMany(Transaksi::class);
    }
}
