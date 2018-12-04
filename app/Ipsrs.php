<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ipsrs extends Model
{
    public $fillable = ['nama_alat', 'ruang', 'kerusakan', 'status', 'permintaan', 'pelapor', 'sparepart', 'keterangan'];
}
