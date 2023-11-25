<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sampah extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_sampah';

    protected $fillable = [
        'jenis_sampah',
        'harga_sampah',
    ];

    public function transaksiDetail(){
        return $this->belongsToMany(TransaksiDetail::class, 'transaksi_detail_sampah', 'id_sampah', 'id_transaksi_detail');
    }
}
