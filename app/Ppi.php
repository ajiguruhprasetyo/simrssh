<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Ppi extends Model
{

	use Searchable;
	
    protected $table = 'ppis';
    protected $fillable = ['no_reg','nama_pasien','ruang','jml_pasien_rawat','jml_tirah_baring','total_operasi','ivc','uc','vm','ett','plebitis','isk','vap','hap','dekubitus','ido','hsl_kultur'];
    protected $guard = ['ruang_id'];

    
}
