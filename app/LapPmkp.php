<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class LapPmkp extends Model
{
	use Searchable;

    protected $fillable = ['judul_indikator','numerator','denominator'];
}
