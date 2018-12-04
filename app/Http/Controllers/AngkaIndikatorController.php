<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AngkaIndikator;
use App\AreaIndikator;

class AngkaIndikatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = $request->get('data');

        $ais = AngkaIndikator::join('area_indikators', 'angka_indikators.id_areaindikator', '=', 'area_indikators.id')
            ->select('angka_indikators.*', 'area_indikators.nama_area_indikator')
            ->where(function ($query) use ($data) {
                if($data){
                    $query->where('area_indikators.nama_area_indikator', 'like', '%'.$data.'%');
                }
            })
            ->paginate(31);
        $ais->appends(['data' => $data]);
            
        return view('angkaindikators.index',compact('ais'))

            ->with('i', ($request->input('page', 1) - 1) * 31);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ais = AreaIndikator::all();
        return view('angkaindikators.create')->withAis($ais);
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
            'id_areaindikator'    => 'required|integer',
            'tgl_input'           => 'required',
            'angka_persentase'    => 'required',
            'jumlah'              => 'required',
            'persentase'          => 'required',
            'standard'            => 'required',
        ]);



        $dog = new AngkaIndikator();
        $dog->id_areaindikator    = $request->id_areaindikator;
        $dog->tgl_input           = $request->tgl_input;
        $dog->angka_persentase    = $request->angka_persentase;
        $dog->jumlah              = $request->jumlah;
        $dog->persentase          = $request->persentase;
        $dog->standard            = $request->standard;
        $dog->save();

        return redirect()->route('angkaindikator.index')->with('success', 'data berhasil di tambahkan');
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
        $ais  = AngkaIndikator::find($id);
        $aiis = AreaIndikator::all();
        return view('angkaindikators.edit')->withAis($ais)->withAiis($aiis);
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
            'id_areaindikator'    => 'required|integer',
            'tgl_input'           => 'required',
            'angka_persentase'    => 'required',
            'jumlah'              => 'required',
            'persentase'          => 'required',
            'standard'            => 'required',
        ]);

        $ai                      = new AngkaIndikator();
        $ai->id_areaindikator    = $request->id_areaindikator;
        $ai->tgl_input           = $request->tgl_input;
        $ai->angka_persentase    = $request->angka_persentase;
        $ai->jumlah              = $request->jumlah;
        $ai->persentase          = $request->persentase;
        $ai->standard            = $request->standard;
        
        $ai->find($id)->update($request->all());

        return redirect()->route('angkaindikator.index')->with('success', 'data berhasil di update!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AngkaIndikator::find($id)->delete();

        return redirect()->route('angkaindikator.index')->with('success', 'data berhasil dihapus');
    }

    public function laporanAI()
    {
        $ais = AngkaIndikator::join('area_indikators', 'angka_indikators.id_areaindikator', '=', 'area_indikators.id')
                ->select('angka_indikators.id_areaindikator', 'area_indikators.nama_area_indikator')
                ->distinct('id_areaindikator')
                ->get();
        // $kis = KejadianIndikator::orderBy('id','DESC')->pluck('id_area_indikator','id');
        // $ares = AreaIndikator::all();

        return view('angkaindikators.laporan',compact('ais'));
    }
    public function listLaporan($id)
    {
        $las = AngkaIndikator::join('area_indikators', 'angka_indikators.id_areaindikator', '=', 'area_indikators.id')
        ->select('angka_indikators.*', 'area_indikators.nama_area_indikator')
        ->orderBy('tgl_input', 'desc')
        ->where('id_areaindikator', '=', $id )
       ->get();

        return view('angkaindikators.listlaporan', compact('las'));
    }
}
