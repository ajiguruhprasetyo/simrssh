<?php


use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function() {


	Route::get('/home', 'HomeController@index');


	Route::resource('users','UserController');
	Route::get('users.download', 'UserController@downloadUser')->name('users.download');

	//route roles auth
	Route::get('roles',['as'=>'roles.index','uses'=>'RoleController@index','middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);

	Route::get('roles/create',['as'=>'roles.create','uses'=>'RoleController@create','middleware' => ['permission:role-create']]);

	Route::post('roles/create',['as'=>'roles.store','uses'=>'RoleController@store','middleware' => ['permission:role-create']]);

	Route::get('roles/{id}',['as'=>'roles.show','uses'=>'RoleController@show']);

	Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit','middleware' => ['permission:role-edit']]);

	Route::patch('roles/{id}',['as'=>'roles.update','uses'=>'RoleController@update','middleware' => ['permission:role-edit']]);

	Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'RoleController@destroy','middleware' => ['permission:role-delete']]);

	//route item role auth
	Route::get('itemCRUD2',['as'=>'itemCRUD2.index','uses'=>'ItemCRUD2Controller@index','middleware' => ['permission:item-list|item-create|item-edit|item-delete']]);

	Route::get('itemCRUD2/create',['as'=>'itemCRUD2.create','uses'=>'ItemCRUD2Controller@create','middleware' => ['permission:item-create']]);

	Route::post('itemCRUD2/create',['as'=>'itemCRUD2.store','uses'=>'ItemCRUD2Controller@store','middleware' => ['permission:item-create']]);

	Route::get('itemCRUD2/{id}',['as'=>'itemCRUD2.show','uses'=>'ItemCRUD2Controller@show']);

	Route::get('itemCRUD2/{id}/edit',['as'=>'itemCRUD2.edit','uses'=>'ItemCRUD2Controller@edit','middleware' => ['permission:item-edit']]);

	Route::patch('itemCRUD2/{id}',['as'=>'itemCRUD2.update','uses'=>'ItemCRUD2Controller@update','middleware' => ['permission:item-edit']]);

	Route::delete('itemCRUD2/{id}',['as'=>'itemCRUD2.destroy','uses'=>'ItemCRUD2Controller@destroy','middleware' => ['permission:item-delete']]);

	//route humas role auth
	Route::get('humas',['as'=>'humas.index','uses'=>'HumasController@index','middleware' => ['permission:humas-list|humas-create|humas-edit|humas-delete']]);

	Route::get('humas/create',['as'=>'humas.create','uses'=>'HumasController@create','middleware' => ['permission:humas-create']]);

	Route::post('humas/create',['as'=>'humas.store','uses'=>'HumasController@store','middleware' => ['permission:humas-create']]);

	Route::get('humas/{id}',['as'=>'humas.show','uses'=>'HumasController@show']);

	Route::get('humas/{id}/edit',['as'=>'humas.edit','uses'=>'HumasController@edit','middleware' => ['permission:humas-edit']]);

	Route::patch('humas/{id}',['as'=>'humas.update','uses'=>'HumasController@update','middleware' => ['permission:humas-edit']]);

	Route::delete('humas/{id}',['as'=>'humas.destroy','uses'=>'HumasController@destroy','middleware' => ['permission:humas-delete']]);

	Route::get('humas.laporan',['as'=>'humas.laporan','uses'=>'HumasController@laporanHumas','middleware' => ['permission:humas-laporan']]);

	Route::get('humas.download',['as'=>'humas.download','uses'=>'HumasController@downloadHumas','middleware' => ['permission:humas-download']]);

	//route unit kerja role auth
	Route::get('unit_kerja',['as'=>'unit_kerja.index','uses'=>'UnitKerjaController@index','middleware' => ['permission:unit_kerja-list|unit_kerja-create|unit_kerja-edit|unit_kerja-delete']]);

	Route::get('unit_kerja/create',['as'=>'unit_kerja.create','uses'=>'UnitKerjaController@create','middleware' => ['permission:unit_kerja-create']]);

	Route::post('unit_kerja/create',['as'=>'unit_kerja.store','uses'=>'UnitKerjaController@store','middleware' => ['permission:unit_kerja-create']]);

	Route::get('unit_kerja/{id}',['as'=>'unit_kerja.show','uses'=>'UnitKerjaController@show']);

	Route::get('unit_kerja/{id}/edit',['as'=>'unit_kerja.edit','uses'=>'UnitKerjaController@edit','middleware' => ['permission:unit_kerja-edit']]);

	Route::patch('unit_kerja/{id}',['as'=>'unit_kerja.update','uses'=>'UnitKerjaController@update','middleware' => ['permission:unit_kerja-edit']]);

	Route::delete('unit_kerja/{id}',['as'=>'unit_kerja.destroy','uses'=>'UnitKerjaController@destroy','middleware' => ['permission:unit_kerja-delete']]);


	//route jabatan role auth
	Route::get('jabatan',['as'=>'jabatan.index','uses'=>'JabatanController@index','middleware' => ['permission:jabatan-list|jabatan-create|jabatan-edit|jabatan-delete']]);

	Route::get('jabatan/create',['as'=>'jabatan.create','uses'=>'JabatanController@create','middleware' => ['permission:jabatan-create']]);

	Route::post('jabatan/create',['as'=>'jabatan.store','uses'=>'JabatanController@store','middleware' => ['permission:jabatan-create']]);

	Route::get('jabatan/{id}',['as'=>'jabatan.show','uses'=>'JabatanController@show']);

	Route::get('jabatan/{id}/edit',['as'=>'jabatan.edit','uses'=>'JabatanController@edit','middleware' => ['permission:jabatan-edit']]);

	Route::patch('jabatan/{id}',['as'=>'jabatan.update','uses'=>'JabatanController@update','middleware' => ['permission:jabatan-edit']]);

	Route::delete('jabatan/{id}',['as'=>'jabatan.destroy','uses'=>'JabatanController@destroy','middleware' => ['permission:jabatan-delete']]);

	//route complaint role auth
	Route::get('complaint',['as'=>'complaint.index','uses'=>'ComplaintController@index','middleware' => ['permission:complaint-list|complaint-create|complaint-edit|complaint-delete']]);

	Route::get('complaint/create',['as'=>'complaint.create','uses'=>'ComplaintController@create','middleware' => ['permission:complaint-create']]);

	Route::post('complaint/create',['as'=>'complaint.store','uses'=>'ComplaintController@store','middleware' => ['permission:complaint-create']]);

	Route::get('complaint/{id}',['as'=>'complaint.show','uses'=>'ComplaintController@show']);

	Route::get('complaint/{id}/edit',['as'=>'complaint.edit','uses'=>'ComplaintController@edit','middleware' => ['permission:complaint-edit']]);

	Route::patch('complaint/{id}',['as'=>'complaint.update','uses'=>'ComplaintController@update','middleware' => ['permission:complaint-edit']]);

	Route::delete('complaint/{id}',['as'=>'complaint.destroy','uses'=>'ComplaintController@destroy','middleware' => ['permission:complaint-delete']]);

	Route::get('complaint.laporan',['as'=>'complaint.laporan','uses'=>'ComplaintController@laporanComplaint','middleware' => ['permission:complaint-laporan']]);

	Route::get('complaint.download',['as'=>'complaint.download','uses'=>'ComplaintController@downloadComplaint','middleware' => ['permission:complaint-download']]);

	//karyawan route auth
	Route::get('karyawan',['as'=>'karyawan.index','uses'=>'KaryawanController@index','middleware' => ['permission:karyawan-list|karyawan-create|karyawan-edit|karyawan-delete']]);

	Route::get('karyawan/create',['as'=>'karyawan.create','uses'=>'KaryawanController@create','middleware' => ['permission:karyawan-create']]);

	Route::post('karyawan/create',['as'=>'karyawan.store','uses'=>'KaryawanController@store','middleware' => ['permission:karyawan-create']]);

	Route::get('karyawan/{id}',['as'=>'karyawan.show','uses'=>'KaryawanController@show']);

	Route::get('karyawan/{id}/edit',['as'=>'karyawan.edit','uses'=>'KaryawanController@edit','middleware' => ['permission:karyawan-edit']]);

	Route::patch('karyawan/{id}',['as'=>'karyawan.update','uses'=>'KaryawanController@update','middleware' => ['permission:karyawan-edit']]);

	Route::delete('karyawan/{id}',['as'=>'karyawan.destroy','uses'=>'KaryawanController@destroy','middleware' => ['permission:karyawan-delete']]);


	//cuti route auth
	Route::get('cuti',['as'=>'cuti.index','uses'=>'CutiController@index','middleware' => ['permission:cuti-list|cuti-create|cuti-edit|cuti-delete']]);

	Route::get('cuti/create',['as'=>'cuti.create','uses'=>'CutiController@create','middleware' => ['permission:cuti-create']]);

	Route::post('cuti/create',['as'=>'cuti.store','uses'=>'CutiController@store','middleware' => ['permission:cuti-create']]);

	Route::get('cuti/{id}',['as'=>'cuti.show','uses'=>'CutiController@show']);

	Route::get('cuti/{id}/edit',['as'=>'cuti.edit','uses'=>'CutiController@edit','middleware' => ['permission:cuti-edit']]);

	Route::patch('cuti/{id}',['as'=>'cuti.update','uses'=>'CutiController@update','middleware' => ['permission:cuti-edit']]);

	Route::delete('cuti/{id}',['as'=>'cuti.destroy','uses'=>'CutiController@destroy','middleware' => ['permission:cuti-delete']]);


	//arisan route auth
	Route::get('arisan',['as'=>'arisan.index','uses'=>'ArisanController@index','middleware' => ['permission:arisan-list|arisan-create|arisan-edit|arisan-delete']]);

	Route::get('arisan/create',['as'=>'arisan.create','uses'=>'ArisanController@create','middleware' => ['permission:arisan-create']]);

	Route::post('arisan/create',['as'=>'arisan.store','uses'=>'ArisanController@store','middleware' => ['permission:arisan-create']]);

	Route::get('arisan/{id}',['as'=>'arisan.show','uses'=>'ArisanController@show']);

	Route::get('arisan/{id}/edit',['as'=>'arisan.edit','uses'=>'ArisanController@edit','middleware' => ['permission:arisan-edit']]);

	Route::patch('arisan/{id}',['as'=>'arisan.update','uses'=>'ArisanController@update','middleware' => ['permission:arisan-edit']]);

	Route::delete('arisan/{id}',['as'=>'arisan.destroy','uses'=>'ArisanController@destroy','middleware' => ['permission:arisan-delete']]);
	//ppi route auth
	Route::get('ppi',['as'=>'ppi.index','uses'=>'PpiController@index','middleware' => ['permission:ppi-list|ppi-create|ppi-edit|ppi-delete']]);

	Route::get('ppi/create',['as'=>'ppi.create','uses'=>'PpiController@create','middleware' => ['permission:ppi-create']]);

	Route::post('ppi/create',['as'=>'ppi.store','uses'=>'PpiController@store','middleware' => ['permission:ppi-create']]);

	Route::get('ppi/{id}',['as'=>'ppi.show','uses'=>'PpiController@show']);

	Route::get('ppi/{id}/edit',['as'=>'ppi.edit','uses'=>'PpiController@edit','middleware' => ['permission:ppi-edit']]);

	Route::patch('ppi/{id}',['as'=>'ppi.update','uses'=>'PpiController@update','middleware' => ['permission:ppi-edit']]);

	Route::delete('ppi/{id}',['as'=>'ppi.destroy','uses'=>'PpiController@destroy','middleware' => ['permission:ppi-delete']]);

	Route::get('ppi.laporan',['as'=>'ppi.laporan','uses'=>'PpiController@laporanPpi','middleware' => ['permission:ppi-laporan']]);

	Route::get('ppi.download',['as'=>'ppi.download','uses'=>'PpiController@downloadPpi','middleware' => ['permission:ppi-download']]);



		//pmkp route auth
	Route::get('pmkp',['as'=>'pmkp.index','uses'=>'PmkpController@index','middleware' => ['permission:pmkp-list|pmkp-create|pmkp-edit|pmkp-delete']]);

	Route::get('pmkp/create',['as'=>'pmkp.create','uses'=>'PmkpController@create','middleware' => ['permission:pmkp-create']]);

	Route::post('pmkp/create',['as'=>'pmkp.store','uses'=>'PmkpController@store','middleware' => ['permission:pmkp-create']]);

	Route::get('pmkp/{id}',['as'=>'pmkp.show','uses'=>'PmkpController@show']);

	Route::get('pmkp/{id}/edit',['as'=>'pmkp.edit','uses'=>'PmkpController@edit','middleware' => ['permission:pmkp-edit']]);

	Route::patch('pmkp/{id}',['as'=>'pmkp.update','uses'=>'PmkpController@update','middleware' => ['permission:pmkp-edit']]);

	Route::delete('pmkp/{id}',['as'=>'pmkp.destroy','uses'=>'PmkpController@destroy','middleware' => ['permission:pmkp-delete']]);

	Route::get('pmkp.laporan',['as'=>'pmkp.laporan','uses'=>'PmkpController@laporanPmkp','middleware' => ['permission:pmkp-laporan']]);

	Route::get('pmkp.download',['as'=>'pmkp.download','uses'=>'PmkpController@downloadPmkp','middleware' => ['permission:pmkp-download']]);

		//laporan pmkp route auth
	Route::get('laporanpmkp',['as'=>'laporanpmkp.index','uses'=>'LapPmkpController@index','middleware' => ['permission:laporanpmkp-list|laporanpmkp-create|laporanpmkp-edit|laporanpmkp-delete']]);

	Route::get('laporanpmkp/create',['as'=>'laporanpmkp.create','uses'=>'LapPmkpController@create','middleware' => ['permission:laporanpmkp-create']]);

	Route::post('laporanpmkp/create',['as'=>'laporanpmkp.store','uses'=>'LapPmkpController@store','middleware' => ['permission:laporanpmkp-create']]);

	Route::get('laporanpmkp/{id}',['as'=>'laporanpmkp.show','uses'=>'LapPmkpController@show']);

	Route::get('laporanpmkp/{id}/edit',['as'=>'laporanpmkp.edit','uses'=>'LapPmkpController@edit','middleware' => ['permission:laporanpmkp-edit']]);

	Route::patch('laporanpmkp/{id}',['as'=>'laporanpmkp.update','uses'=>'LapPmkpController@update','middleware' => ['permission:laporanpmkp-edit']]);

	Route::delete('laporanpmkp/{id}',['as'=>'laporanpmkp.destroy','uses'=>'LapPmkpController@destroy','middleware' => ['permission:laporanpmkp-delete']]);

	Route::get('laporanpmkp.laporan',['as'=>'laporanpmkp.laporan','uses'=>'LapPmkpController@laporanDataPmkp','middleware' => ['permission:laporanpmkp-laporan']]);

	Route::get('laporanpmkp.download',['as'=>'laporanpmkp.download','uses'=>'LapPmkpController@downloadDataPmkp','middleware' => ['permission:laporanpmkp-download']]);

//area indikator route auth
	Route::get('areaindikator',['as'=>'areaindikator.index','uses'=>'AreaIndikatorController@index','middleware' => ['permission:areaindikator-list|areaindikator-create|areaindikator-edit|areaindikator-delete']]);

	Route::get('areaindikator/create',['as'=>'areaindikator.create','uses'=>'AreaIndikatorController@create','middleware' => ['permission:areaindikator-create']]);

	Route::post('areaindikator/create',['as'=>'areaindikator.store','uses'=>'AreaIndikatorController@store','middleware' => ['permission:areaindikator-create']]);

	Route::get('areaindikator/{id}',['as'=>'areaindikator.show','uses'=>'AreaIndikatorController@show']);

	Route::get('areaindikator/{id}/edit',['as'=>'areaindikator.edit','uses'=>'AreaIndikatorController@edit','middleware' => ['permission:areaindikator-edit']]);

	Route::patch('areaindikator/{id}',['as'=>'areaindikator.update','uses'=>'AreaIndikatorController@update','middleware' => ['permission:areaindikator-edit']]);

	Route::delete('areaindikator/{id}',['as'=>'areaindikator.destroy','uses'=>'AreaIndikatorController@destroy','middleware' => ['permission:areaindikator-delete']]);

	Route::get('areaindikator.laporan',['as'=>'areaindikator.laporan','uses'=>'AreaIndikatorController@laporanDataPmkp','middleware' => ['permission:areaindikator-laporan']]);

	Route::get('areaindikator.download',['as'=>'areaindikator.download','uses'=>'AreaIndikatorController@downloadDataPmkp','middleware' => ['permission:areaindikator-download']]);

	Route::get('areaindikator.print',['as'=>'areaindikator.print','uses'=>'AreaIndikatorController@printAreaIndikator','middleware' => ['permission:areaindikator-print']]);

	//sub area indikator route auth
	Route::get('subai',['as'=>'subai.index','uses'=>'SubCategoryAIController@index','middleware' => ['permission:subai-list|subai-create|subai-edit|subai-delete']]);

	Route::get('subai/create',['as'=>'subai.create','uses'=>'SubCategoryAIController@create','middleware' => ['permission:subai-create']]);

	Route::post('subai/create',['as'=>'subai.store','uses'=>'SubCategoryAIController@store','middleware' => ['permission:subai-create']]);

	Route::get('subai/{id}',['as'=>'subai.show','uses'=>'SubCategoryAIController@show']);

	Route::get('subai/{id}/edit',['as'=>'subai.edit','uses'=>'SubCategoryAIController@edit','middleware' => ['permission:subai-edit']]);

	Route::patch('subai/{id}',['as'=>'subai.update','uses'=>'SubCategoryAIController@update','middleware' => ['permission:subai-edit']]);

	Route::delete('subai/{id}',['as'=>'subai.destroy','uses'=>'SubCategoryAIController@destroy','middleware' => ['permission:subai-delete']]);

	Route::get('subai.laporan',['as'=>'subai.laporan','uses'=>'SubCategoryAIController@laporanDataPmkp','middleware' => ['permission:subai-laporan']]);

	Route::get('subai.download',['as'=>'subai.download','uses'=>'SubCategoryAIController@downloadDataPmkp','middleware' => ['permission:subai-download']]);

	//angka indikator route auth
	Route::get('angkaindikator',['as'=>'angkaindikator.index','uses'=>'AngkaIndikatorController@index','middleware' => ['permission:angkaindikator-list|angkaindikator-create|angkaindikator-edit|angkaindikator-delete']]);

	Route::get('angkaindikator/create',['as'=>'angkaindikator.create','uses'=>'AngkaIndikatorController@create','middleware' => ['permission:angkaindikator-create']]);

	Route::post('angkaindikator/create',['as'=>'angkaindikator.store','uses'=>'AngkaIndikatorController@store','middleware' => ['permission:angkaindikator-create']]);

	Route::get('angkaindikator/{id}',['as'=>'angkaindikator.show','uses'=>'AngkaIndikatorController@show']);

	Route::get('angkaindikator/{id}/edit',['as'=>'angkaindikator.edit','uses'=>'AngkaIndikatorController@edit','middleware' => ['permission:angkaindikator-edit']]);

	Route::patch('angkaindikator/{id}',['as'=>'angkaindikator.update','uses'=>'AngkaIndikatorController@update','middleware' => ['permission:angkaindikator-edit']]);

	Route::delete('angkaindikator/{id}',['as'=>'angkaindikator.destroy','uses'=>'AngkaIndikatorController@destroy','middleware' => ['permission:angkaindikator-delete']]);

	Route::get('angkaindikator.laporan',['as'=>'angkaindikator.laporan','uses'=>'AngkaIndikatorController@laporanAI','middleware' => ['permission:angkaindikator-laporan']]);

	Route::get('angkaindikator.download',['as'=>'angkaindikator.download','uses'=>'AngkaIndikatorController@downloadDataPmkp','middleware' => ['permission:angkaindikator-download']]);

	//kejadian indikator route auth
	Route::get('kejadianindikator',['as'=>'kejadianindikator.index','uses'=>'KejadianIndikatorController@index','middleware' => ['permission:kejadianindikator-list|kejadianindikator-create|kejadianindikator-edit|kejadianindikator-delete']]);

	Route::get('kejadianindikator/create',['as'=>'kejadianindikator.create','uses'=>'KejadianIndikatorController@create','middleware' => ['permission:kejadianindikator-create']]);

	Route::post('kejadianindikator/create',['as'=>'kejadianindikator.store','uses'=>'KejadianIndikatorController@store','middleware' => ['permission:kejadianindikator-create']]);

	Route::get('kejadianindikator/{id}',['as'=>'kejadianindikator.show','uses'=>'KejadianIndikatorController@show']);

	Route::get('kejadianindikator/{id}/edit',['as'=>'kejadianindikator.edit','uses'=>'KejadianIndikatorController@edit','middleware' => ['permission:kejadianindikator-edit']]);

	Route::patch('kejadianindikator/{id}',['as'=>'kejadianindikator.update','uses'=>'KejadianIndikatorController@update','middleware' => ['permission:kejadianindikator-edit']]);

	Route::delete('kejadianindikator/{id}',['as'=>'kejadianindikator.destroy','uses'=>'KejadianIndikatorController@destroy','middleware' => ['permission:kejadianindikator-delete']]);

	Route::get('kejadianindikator.laporan',['as'=>'kejadianindikator.laporan','uses'=>'KejadianIndikatorController@laporanKI','middleware' => ['permission:kejadianindikator-laporan']]);

	Route::get('kejadianindikator.download',['as'=>'kejadianindikator.download','uses'=>'KejadianIndikatorController@downloadDataPmkp','middleware' => ['permission:kejadianindikator-download']]);

	//rehab medik route auth
	Route::get('rehabmedik',['as'=>'rehabmedik.index','uses'=>'RehabMedikController@index','middleware' => ['permission:create-rehabmedik|read-rehabmedik|update-rehabmedik|delete-rehabmedik']]);
	Route::get('rehabmedik/create',['as'=>'rehabmedik.create','uses'=>'RehabMedikController@create','middleware' => ['permission:create-rehabmedik']]);
	Route::post('rehabmedik/create',['as'=>'rehabmedik.store','uses'=>'RehabMedikController@store','middleware' => ['permission:create-rehabmedik']]);
	Route::get('rehabmedik/{id}',['as'=>'rehabmedik.show','uses'=>'RehabMedikController@show']);
	Route::get('rehabmedik/{id}/edit',['as'=>'rehabmedik.edit','uses'=>'RehabMedikController@edit','middleware' => ['permission:update-rehabmedik']]);
	Route::patch('rehabmedik/{id}',['as'=>'rehabmedik.update','uses'=>'RehabMedikController@update','middleware' => ['permission:update-rehabmedik']]);
	Route::delete('rehabmedik/{id}',['as'=>'rehabmedik.destroy','uses'=>'RehabMedikController@destroy','middleware' => ['permission:delete-rehabmedik']]); 
	Route::get('rehabmedik.laporan',['as'=>'rehabmedik.laporan','uses'=>'RehabMedikController@laporan','middleware' => ['permission:laporan-rehabmedik']]); //rehabmedik controller

	//ipsrs route auth
	Route::get('ipsrs',['as'=>'ipsrs.index','uses'=>'IpsrsController@index','middleware' => ['permission:create-ipsrs|read-ipsrs|update-ipsrs|delete-ipsrs']]);
	Route::get('ipsrs/create',['as'=>'ipsrs.create','uses'=>'IpsrsController@create','middleware' => ['permission:create-ipsrs']]);
	Route::post('ipsrs/create',['as'=>'ipsrs.store','uses'=>'IpsrsController@store','middleware' => ['permission:create-ipsrs']]);
	Route::get('ipsrs/{id}',['as'=>'ipsrs.show','uses'=>'IpsrsController@show']);
	Route::get('ipsrs/{id}/edit',['as'=>'ipsrs.edit','uses'=>'IpsrsController@edit','middleware' => ['permission:update-ipsrs']]);
	Route::patch('ipsrs/{id}',['as'=>'ipsrs.update','uses'=>'IpsrsController@update','middleware' => ['permission:update-ipsrs']]);
	Route::delete('ipsrs/{id}',['as'=>'ipsrs.destroy','uses'=>'IpsrsController@destroy','middleware' => ['permission:delete-ipsrs']]); 
	Route::get('ipsrs.laporan',['as'=>'ipsrs.laporan','uses'=>'IpsrsController@laporan','middleware' => ['permission:laporan-ipsrs']]); //ipsrs controller

});

