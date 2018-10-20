<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KejadianIndikator extends Model
{
    public $fillable = ['kejadian','id_area_indikator','tgl_kejadian','standard_indikator'];
    
    protected $table = 'kejadian_indikators';
    
    public function areaindikator()
    {
        return $this->belongsTo('App\AreaIndikator', 'id_area_indikator');
    }
}
