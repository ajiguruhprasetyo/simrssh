<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AreaIndikator;
use App\UnitKerja;
use PDF;

class AreaIndikatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = $request->get('data');

        $area_indikators = AreaIndikator::orderBy('created_at', 'asc')
            ->where(function ($query) use ($data) {
                if($data){
                    $query->where('nama_area_indikator', 'like', '%'.$data.'%');
                }
            })
            ->paginate(20);

        return view('area_indikators.index',compact('area_indikators'))

            ->with('i', ($request->input('areaindikator', 1) - 1) * 20);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unitkerjas = UnitKerja::all();
        return view('area_indikators.create')->withUnitkerjas($unitkerjas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_area_indikator' => 'required',
            'id_unitkerja'        => 'required|integer',
            'ruang_lingkup'       => 'required',
            'nama_area_indikator' => 'required',
            'dasar_pemikiran'     => 'required',
            'definisi_ind'        => 'required',
            'k_inklusi'           => 'required',
            'k_eksklusi'          => 'required',
            'tipe_ind'            => 'required',
            'numerator'           => 'required',
            'denumerator'         => 'required',
            'target_kerja'        => 'required',
            'standard'            => 'required',
            'sumber_data'         => 'required',
            'fp_data'             => 'required',
            'periode_analisa'     => 'required',
            'id_user'             => 'required',
            'keterangan'          => 'required',
            
        ]);

        $areaindikator = new AreaIndikator();
        $areaindikator->kode_area_indikator = $request->kode_area_indikator;
        $areaindikator->id_unitkerja        = $request->id_unitkerja;
        $areaindikator->ruang_lingkup       = $request->ruang_lingkup;
        $areaindikator->nama_area_indikator = $request->nama_area_indikator;
        $areaindikator->dasar_pemikiran     = $request->dasar_pemikiran;
        $areaindikator->definisi_ind        = $request->definisi_ind;
        $areaindikator->k_inklusi           = $request->k_inklusi;
        $areaindikator->k_eksklusi          = $request->k_eksklusi;
        $areaindikator->tipe_ind            = $request->tipe_ind;
        $areaindikator->numerator           = $request->numerator;
        $areaindikator->denumerator         = $request->denumerator;
        $areaindikator->target_kerja        = $request->target_kerja;
        $areaindikator->standard            = $request->standard;
        $areaindikator->sumber_data         = $request->sumber_data;
        $areaindikator->fp_data             = $request->fp_data;
        $areaindikator->periode_analisa     = $request->periode_analisa;
        $areaindikator->id_user             = $request->id_user;
        $areaindikator->keterangan          = $request->keterangan;
        $areaindikator->save();

        return redirect()->route('areaindikator.index')->with('success', 'Data Area Indikator berhasil ditmbahkan'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $areaindikators = AreaIndikator::find($id);
        $unitkerjas = UnitKerja::all();
        
        return view('area_indikators.show')->withAreaindikators($areaindikators)->withUnitkerjas($unitkerjas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $areaindikators = AreaIndikator::find($id);
        $unitkerjas = UnitKerja::all();
        return view('area_indikators.edit')->withAreaindikators($areaindikators)->withUnitkerjas($unitkerjas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'kode_area_indikator' => 'required',
            'id_unitkerja'        => 'required|integer',
            'ruang_lingkup'       => 'required',
            'nama_area_indikator' => 'required',
            'dasar_pemikiran'     => 'required',
            'definisi_ind'        => 'required',
            'k_inklusi'           => 'required',
            'k_eksklusi'          => 'required',
            'tipe_ind'            => 'required',
            'numerator'           => 'required',
            'denumerator'         => 'required',
            'target_kerja'        => 'required',
            'standard'            => 'required',
            'sumber_data'         => 'required',
            'fp_data'             => 'required',
            'periode_analisa'     => 'required',
            'id_user'             => 'required',
            'keterangan'          => 'required',
            
        ]);

        $areaindikator = new AreaIndikator();
        $areaindikator->kode_area_indikator = $request->kode_area_indikator;
        $areaindikator->id_unitkerja        = $request->id_unitkerja;
        $areaindikator->ruang_lingkup       = $request->ruang_lingkup;
        $areaindikator->nama_area_indikator = $request->nama_area_indikator;
        $areaindikator->dasar_pemikiran     = $request->dasar_pemikiran;
        $areaindikator->definisi_ind        = $request->definisi_ind;
        $areaindikator->k_inklusi           = $request->k_inklusi;
        $areaindikator->k_eksklusi          = $request->k_eksklusi;
        $areaindikator->tipe_ind            = $request->tipe_ind;
        $areaindikator->numerator           = $request->numerator;
        $areaindikator->denumerator         = $request->denumerator;
        $areaindikator->target_kerja        = $request->target_kerja;
        $areaindikator->standard            = $request->standard;
        $areaindikator->sumber_data         = $request->sumber_data;
        $areaindikator->fp_data             = $request->fp_data;
        $areaindikator->periode_analisa     = $request->periode_analisa;
        $areaindikator->id_user             = $request->id_user;
        $areaindikator->keterangan          = $request->keterangan;
        $areaindikator->find($id)->update($request->all());

        return redirect()->route('areaindikator.index')->with('success', 'Data Area Indikator berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AreaIndikator::find($id)->delete();

        return redirect()->route('areaindikator.index')->with('success', 'Data berhasil dihapus');
    }

    public function printAreaIndikator()
    {
        $areaindikators = AreaIndikator::all();
        $pdf = PDF::loadView('area_indikators.print', $areaindikators);
        return $pdf->download('indikatormutu.pdf');
        
    }
}
