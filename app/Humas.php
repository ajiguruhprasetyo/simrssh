<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Humas extends Model
{
    public $fillable = ['surat','keterangan', 'tanggal'];

    public function scopeSearch($query, $s)
    {
    	return $query->where('surat', 'like', '%' .$s. '$s')
    				->onWhere('tanggal', 'like', '%' .$s. '$s')
    				->onWhere('keterangan', 'like', '%' .$s. '$s');
    }
}
