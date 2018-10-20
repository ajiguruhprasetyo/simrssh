<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategoryAI extends Model
{
    public $fillable =  ['sub_category', 'id_area_indikator'];
	protected $table = 'sub_category_a_is';
	
    public function areaindikator() //relasi tabel dengan area_indikators
    {
    	return $this->belongsTo('App\AreaIndikator', 'id_area_indikator'); //ditulis nama fk di tabel sub_category_a_is
    }

    // public function angkaindikator() //relasi tabel dengan angka_indikators
    // {
    // 	return $this->hasOne('App\AngkaIndikator');
    // }

    public function kejadianindikator() //relasi table with kejadian_indikator one to one relation
    {
        return $this->hasOne('App\KejadianIndikator');
    }
}
