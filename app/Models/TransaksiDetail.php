<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiDetail extends Model
{
    use HasFactory;

    protected $primaryKey = "id_transaksi_detail";

    protected $fillable = [
        'id_transaksi',
        'id_sampah',
        'harga_sampah_satuan',
        'berat_total',
    ];

    public function transaksi(){
        return $this->belongsTo(Transaksi::class, 'id_transaksi');
    }

    public function sampah(){
        return $this->belongsToMany(Sampah::class, 'transaksi_detail_sampah', 'id_transaksi_detail', 'id_sampah');
    }
}
