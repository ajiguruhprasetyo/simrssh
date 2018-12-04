<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\KejadianIndikator;
use App\AreaIndikator;
use Auth;
use DB;
use PDF;
use Excel;

class KejadianIndikatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = $request->get('data');

        $kejadianindikators = KejadianIndikator::join('area_indikators', 'kejadian_indikators.id_area_indikator', '=', 'area_indikators.id')
                                ->select('kejadian_indikators.*','area_indikators.nama_area_indikator')
                                
             ->where(function ($query) use ($data) {
                 if($data){
                     $query->where('area_indikators.nama_area_indikator', 'like', '%'.$data.'%');
                 }
             })
             ->paginate(31);
        $kejadianindikators->appends(['data' => $data]);

        return view('kejadianindikators.index',compact('kejadianindikators'))

            ->with('i', ($request->input('page', 1) - 1) * 31);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ares = AreaIndikator::all();
    
        return view('kejadianindikators.create')->withAres($ares);
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
            'kejadian'           => 'required',
            'id_area_indikator'  => 'required|integer',
            'tgl_kejadian'       => 'required',
            'standard_indikator' => 'required',
        ]);

        $ki                     = new KejadianIndikator();
        $ki->kejadian           = $request->kejadian;
        $ki->id_area_indikator  = $request->id_area_indikator;
        $ki->tgl_kejadian       = $request->tgl_kejadian;
        $ki->standard_indikator = $request->standard_indikator;
        $ki->save();

        return redirect()->route('kejadianindikator.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ais = AreaIndikator::all();
        $kis = KejadianIndikator::find($id);
    
        return view('kejadianindikators.edit')->withAis($ais)->withKis($kis);
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
            'kejadian'           => 'required',
            'id_area_indikator'  => 'required|integer',
            'tgl_kejadian'       => 'required',
            'standard_indikator' => 'required',
        ]);

        $ki                     = new KejadianIndikator();
        $ki->kejadian           = $request->kejadian;
        $ki->id_area_indikator  = $request->id_area_indikator;
        $ki->tgl_kejadian       = $request->tgl_kejadian;
        $ki->standard_indikator = $request->standard_indikator;

        $ki->find($id)->update($request->all());

        return redirect()->route('kejadianindikator.index')->with('success', 'Data berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        KejadianIndikator::find($id)->delete();

        return redirect()->route('kejadianindikator.index')->with('success', 'Data berhasil di hapus!!');
    }

    public function laporanKI()
    {
        $kis = KejadianIndikator::join('area_indikators', 'kejadian_indikators.id_area_indikator', '=', 'area_indikators.id')
                ->select('kejadian_indikators.id_area_indikator', 'area_indikators.nama_area_indikator')
                ->distinct('id_area_indikator')
                ->get();
        // $kis = KejadianIndikator::orderBy('id','DESC')->pluck('id_area_indikator','id');
        // $ares = AreaIndikator::all();

        return view('kejadianindikators.laporan',compact('kis'));
    }

    public function listLaporan($id)
        {
            $kejadian = KejadianIndikator::join('area_indikators', 'kejadian_indikators.id_area_indikator', '=', 'area_indikators.id')
            ->select('kejadian_indikators.*', 'area_indikators.nama_area_indikator')
            ->orderBy('tgl_kejadian', 'desc')
            ->where('id_area_indikator', '=', $id )
           ->get();

            return view('kejadianindikators.listlaporan', compact('kejadian'));
        }


    public function downloadDataPmkp(Request $request){

        if ($request->ajax())
        {
            $status = KejadianIndikator::join('area_indikators', 'kejadian_indikators.id_area_indikator', '=', 'area_indikators.id')
                                    ->whereBetween('kejadian_indikators.tgl_kejadian',[$request->tgl_kejadian, $request->end_date])
                                    ->where('kejadian_indikators.id_area_indikator', $request->id_area_indikator)
                                    ->get();

                                return view('kejadianindikators.listkejadian', compact('status'));
        }
    }
    
}
