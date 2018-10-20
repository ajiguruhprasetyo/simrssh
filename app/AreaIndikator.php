<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AreaIndikator extends Model
{
    public $fillable = ['kode_area_indikator','id_unitkerja','ruang_lingkup', 'nama_area_indikator', 'dasar_pemikiran','definisi_ind','k_inklusi','k_eksklusi',
                        'tipe_ind','numerator','denumerator','target_kerja','standard','sumber_data','fp_data','periode_analisa','id_user','keterangan'];

    protected $table = 'area_indikators';

    public function kejadianindikator()
    {
    	return $this->hasMany('App\KejadianIndikator');
    }

    public function unitkerja()
    {
        return $this->belongsTo('App\UnitKerja', 'id_unitkerja'); // foreign key harus ditulis
    }

    public function angkaindikator()
    {
        return $this->hasMany('App\AngkaIndikator');
    }
}
