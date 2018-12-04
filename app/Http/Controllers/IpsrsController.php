<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ipsrs;

class IpsrsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $ipsrs = Ipsrs::orderBy('created_at', 'desc')->paginate(20);
        return view('ipsrs.index', compact('ipsrs'))->with('i', ($request->input('page', 1) -1) *20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ipsrs.create');
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
            'nama_alat'  => 'required|max:191',
            'ruang'      => 'required|',
            'kerusakan'  => 'required',
            'status'     => 'required',
            'permintaan' => 'required',
            'pelapor'    => 'required',
        ]);
            Ipsrs::create($request->all());

            return redirect()->route('ipsrs.index')->with('success','Data berhasil ditambahkan');
        
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ipsrs::find($id)->delete();

        return redirect()->route('ipsrs.konfirmasi')->with('success', 'Data berhasil di hapus!!!');
    }
    public function konfirmasi(Request $request)
    {
        $confirmipsrs = Ipsrs::orderBy('created_at', 'desc')->paginate('20');
        return view('ipsrs.konfirmasi', compact('confirmipsrs'))->with('i', ($request->input('page', 1) -1) *20);
    }
}
