<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
    use HasFactory;

    protected $primaryKey  = 'id_keluhan';

    protected $fillable = [
        'id_warga',
        'isi_keluhan',
        'foto_keluhan',
    ];

    public function warga(){
        return $this->belongsTo(Warga::class, 'id_warga');
    }
}
