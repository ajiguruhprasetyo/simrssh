<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KejadianIndikator;
use App\AreaIndikator;

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

        $kejadianindikators = KejadianIndikator::orderBy('created_at', 'asc')
            ->where(function ($query) use ($data) {
                if($data){
                    $query->where('id_area_indikator', 'like', '%'.$data.'%');
                }
            })
            ->paginate(20);

        return view('kejadianindikators.index',compact('kejadianindikators'))

            ->with('i', ($request->input('page', 1) - 1) * 20);

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

    public function laporanKI(Request $request)
    {
        $kis = KejadianIndikator::orderBy('id','DESC')->paginate(10);
        $ares = AreaIndikator::all();

        return view('kejadianindikators.laporan',compact('kis', 'ares'))
        ->with('i', ($request->input('page', 1) - 1) * 10);
    }
}
