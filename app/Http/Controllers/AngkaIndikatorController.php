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

        $ais = AngkaIndikator::orderBy('created_at', 'asc')
            ->where(function ($query) use ($data) {
                if($data){
                    $query->where('id_areaindikator', 'like', '%'.$data.'%');
                }
            })
            ->paginate(20);

        return view('angkaindikators.index',compact('ais'))

            ->with('i', ($request->input('page', 1) - 1) * 20);

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

    public function laporanAI(Request $request)
    {
        $start_date = date('Y-m-d');
        $end_date = date('Y-m-d');

        if (!empty($_POST['created_at'])) {
            $start_date    = $_POST['created_at'];
        }
        if (!empty($_POST['created_at'])) {
            $end_date    = $_POST['created_at'];
        }
        $ais = AngkaIndikator::orderBy('id','DESC')->paginate(10);
        $ares = AreaIndikator::all();

        return view('angkaindikators.laporan',compact('ais','ares', 'start_date', 'end_date'))
        ->with('i', ($request->input('page', 1) - 1) * 10);
    }
}
