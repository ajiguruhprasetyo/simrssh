<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Pmkp extends Model
{

	use Searchable;


    protected $fillable = ['kategori_pmkp','kode_pmkp','nama_ind_mutu','def_oprs','p_jawab','kbjkan_mutu','d_pemikiran','numerator','denominator','formula','k_inklusi','k_eksklusi','metode','type','area_monitor','w_lapor','p_analisa','n_standar','t_kerja','j_sampel','h_komunikasi','unitkerja','capaian'];
}
























