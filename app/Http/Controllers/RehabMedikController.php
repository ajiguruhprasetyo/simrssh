<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RehabMedik;

class RehabMedikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = $request->get('data');

        $rehabmediks = RehabMedik::orderBy('created_at', 'asc')
            ->where(function ($query) use ($data) {
                if($data){
                    $query->where('nama', 'like', '%'.$data.'%');
                    $query->orWhere('no_reg', 'like', '%'.$data.'%');
                    $query->orWhere('no_rm', 'like', '%'.$data.'%');
                }
            })
            ->paginate(20);
        return view('rehabmediks.index', compact('rehabmediks'))->with('i', ($request->input('rehabmedik', 1) -1) *20);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rehabmediks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->middleware($request, [
            'no_rm'                 => 'required',
            'nama'                  => 'required',
            'no_reg'                => 'required',
            'tgl_periksa_dokter'    => 'required',
            'tgl_ft1'               => 'required',
            'tgl_ft2'               => 'required',
            'tgl_ft3'               => 'required',
            'tgl_ft4'               => 'required',
            'tgl_ft5'               => 'required',
            'tgl_ft6'               => 'required',
            'tgl_ft7'               => 'required',
            'keterangan'            => 'required',
        ]);

        $rehabmediks                     = new RehabMedik();
        $rehabmediks->no_rm              = $request->no_rm;
        $rehabmediks->nama               = $request->nama;
        $rehabmediks->no_reg             = $request->no_reg;
        $rehabmediks->tgl_periksa_dokter = $request->tgl_periksa_dokter;
        $rehabmediks->tgl_ft1            = $request->tgl_ft1;
        $rehabmediks->tgl_ft2            = $request->tgl_ft2;
        $rehabmediks->tgl_ft3            = $request->tgl_ft3;
        $rehabmediks->tgl_ft4            = $request->tgl_ft4;
        $rehabmediks->tgl_ft5            = $request->tgl_ft5;
        $rehabmediks->tgl_ft6            = $request->tgl_ft6;
        $rehabmediks->tgl_ft7            = $request->tgl_ft7;
        $rehabmediks->keterangan         = $request->keterangan;
        $rehabmediks->save();

        return redirect()->route('rehabmedik.index')->with('success', 'Data berhasil ditambahkan');
        
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
        $rehabmediks = RehabMedik::find($id);
        return view('rehabmediks.edit', compact('rehabmediks'));
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
        $this->middleware($request, [
            'no_rm'                 => 'required',
            'nama'                  => 'required',
            'no_reg'                => 'required',
            'tgl_periksa_dokter'    => 'required',
            'tgl_ft1'               => 'required',
            'tgl_ft2'               => 'required',
            'tgl_ft3'               => 'required',
            'tgl_ft4'               => 'required',
            'tgl_ft5'               => 'required',
            'tgl_ft6'               => 'required',
            'tgl_ft7'               => 'required',
            'keterangan'            => 'required',
        ]);

        $rehabmediks                     = RehabMedik::find($id);
        $rehabmediks->no_rm              = $request->no_rm;
        $rehabmediks->nama               = $request->nama;
        $rehabmediks->no_reg             = $request->no_reg;
        $rehabmediks->tgl_periksa_dokter = $request->tgl_periksa_dokter;
        $rehabmediks->tgl_ft1            = $request->tgl_ft1;
        $rehabmediks->tgl_ft2            = $request->tgl_ft2;
        $rehabmediks->tgl_ft3            = $request->tgl_ft3;
        $rehabmediks->tgl_ft4            = $request->tgl_ft4;
        $rehabmediks->tgl_ft5            = $request->tgl_ft5;
        $rehabmediks->tgl_ft6            = $request->tgl_ft6;
        $rehabmediks->tgl_ft7            = $request->tgl_ft7;
        $rehabmediks->keterangan         = $request->keterangan;
        
        $rehabmediks->save();
        return redirect()->route('rehabmedik.index')->with('success', 'Data berhasil di update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        RehabMedik::find($id)->delete();

        return redirect()->route('rehabmedik.index')->with('success', 'Data berhasil di hapus!!');
    }

    public function laporan(Request $request)
    {
        
        $data    = $request->get('data');

        $rehabmediks = RehabMedik::orderBy('created_at', 'asc')
        ->where(function ($query) use ($data) {
            if ($data) {
                $query->where('nama', 'like', '%'.$data.'%');
                $query->orWhere('no_reg', 'like', '%'.$data.'%');
                $query->orWhere('no_rm', 'like', '%'.$data.'%');
            }
        })->paginate(10);

    
        return view('rehabmediks.laporan', compact('rehabmediks'))->with('i', ($request->input('rehabmedik', 1) -1) *10);

    }
}
