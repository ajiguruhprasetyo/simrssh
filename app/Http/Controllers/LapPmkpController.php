<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LapPmkp;
use Excel;

class LapPmkpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lappmkps = LapPmkp::all();
        return view('lappmkps.index')->withLappmkps($lappmkps);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lappmkps.create');
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
            'judul_indikator' => 'required',
            'numerator' => 'required',
            'denominator' => 'required'
        ]);

        $lappmkp = new LapPmkp();
        $lappmkp->judul_indikator = $request->judul_indikator;
        $lappmkp->numerator = $request->numerator;
        $lappmkp->denominator = $request->denominator;
        $lappmkp->save();

        return redirect()->route('laporanpmkp.index')->with('success','Data berhasil di tambahkan!!!');
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
        $lappmkps = LapPmkp::find($id);

        return view('lappmkps.edit')->withLappmkps($lappmkps);
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
            'judul_indikator' => 'required',
            'numerator' => 'required',
            'denominator' => 'required'
        ]);

        $lappmkp = new LapPmkp();
        $lappmkp->judul_indikator = $request->judul_indikator;
        $lappmkp->numerator = $request->numerator;
        $lappmkp->denominator = $request->denominator;
        
        $lappmkp->find($id)->update($request->all());

        return redirect()->route('laporanpmkp.index')->with('success','Data berhasil di tambahkan!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        LapPmkp::find($id)->delete();

        return redirect()->route('laporanpmkp.index')->with('danger','data berhasil dihapus');
    }

     public function laporanDataPmkp(Request $request)
    {
        $result = LapPmkp::search($request->search)->get();
         // $lappmkps = LapPmkp::orderBy('id','DESC')->paginate(10);

        return view('lappmkps.laporan',compact('result'))
        ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    public function downloadDataPmkp()
    {
        $lappmkps = LapPmkp::select('judul_indikator','numerator','denominator','created_at')->get();
        return Excel::create('lapdatapmkp', function($excel) use ($lappmkps){
            $excel->sheet('mysheet', function($sheet) use($lappmkps){
                $sheet->fromArray($lappmkps);
            });
        })->download('xls');
    }
}
