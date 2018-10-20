<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AngkaIndikator extends Model
{
    public $fillable = ['id_areaindikator','tgl_input','angka_persentase','jumlah','persentase','standard'];
	protected $table = 'angka_indikators';
	
    // public function subcategori()
    // {
    // 	return $this->belongsTo('App\SubCategoryAI');
    // }

    public function areaindikator()
    {
        return $this->belongsTo('App\AreaIndikator', 'id_areaindikator'); //foreign key harus ditulis
    }
}
