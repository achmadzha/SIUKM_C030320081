<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaUkm extends Model
{
    // use HasFactory;
    protected $table = "anggota_ukm";
    protected $fillable = [
        'id_ukm',
        'id_mahasiswa'
    ];
    public function ukm()
    {
        return $this->belongsTo(Ukm::class, 'id_ukm');
    }

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa');
    }
}
