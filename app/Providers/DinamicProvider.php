<?php 
namespace App\Providers;

use App\SubCategoryAI;//membaca model name here which ewe created
use Illuminate\Support\ServiceProvider;

/**
* 
*/
class DinamicProvider extends ServiceProvider
{
	
	public function boot()
	{
		view()->composer('*', function($view){
			$view->with('classname_array', SubCategoryAI::all());
		});
	}
}