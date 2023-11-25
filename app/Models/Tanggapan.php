<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_tanggapan';

    protected $fillable = [
        'id_keluhan',
        'id_admin',
        'id_petugas',
        'isi_tanggapan',
        'status',
    ];

    public function keluhan(){
        return $this->belongsTo(Keluhan::class, 'id_keluhan');
    }

    public function admin(){
        return $this->belongsTo(Admin::class, 'id_admin');
    }

    public function petugas(){
        return $this->belongsTo(Petugas::class, 'id_petugas');
    }
}
