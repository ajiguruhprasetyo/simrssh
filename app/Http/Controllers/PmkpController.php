<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pmkp;
use Excel;

class PmkpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pmkps = Pmkp::orderBy('created_at', 'DESC')->paginate(10);
        return view('pmkps.index')->withPmkps($pmkps);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pmkps.create');
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
            'kategori_pmkp' => 'required',
            'kode_pmkp' => 'required',
            'nama_ind_mutu' => 'required',
            'def_oprs' => 'required',
            'p_jawab' => 'required',
            'kbjkan_mutu' => 'required',
            'd_pemikiran' => 'required',
            'numerator' => 'required',
            'denominator' => 'required',
            'formula' => 'required', 
            'k_inklusi' => 'required',
            'k_eksklusi' => 'required',
            'metode' => 'required',
            'type' => 'required',
            'area_monitor' => 'required|max:191',
            'w_lapor' => 'required',
            'p_analisa' => 'required',
            'n_standar' => 'required',
            't_kerja' => 'required',
            'j_sampel' => 'required',
            'h_komunikasi' => 'required',
            'unitkerja' => 'required',
            'capaian'=> 'required'
    ]);

        $pmkp = new Pmkp();
        $pmkp->kategori_pmkp = $request->kategori_pmkp;
        $pmkp->kode_pmkp = $request->kode_pmkp;
        $pmkp->nama_ind_mutu = $request->nama_ind_mutu;
        $pmkp->def_oprs = $request->def_oprs;
        $pmkp->p_jawab = $request->p_jawab;
        $pmkp->kbjkan_mutu = $request->kbjkan_mutu;
        $pmkp->d_pemikiran = $request->d_pemikiran;
        $pmkp->numerator = $request->numerator;
        $pmkp->denominator = $request->denominator;
        $pmkp->formula = $request->formula;
        $pmkp->k_inklusi = $request->k_inklusi;
        $pmkp->k_eksklusi = $request->k_eksklusi;
        $pmkp->metode = $request->metode;
        $pmkp->type = $request->type;
        $pmkp->area_monitor = $request->area_monitor;
        $pmkp->w_lapor = $request->w_lapor;
        $pmkp->p_analisa = $request->p_analisa;
        $pmkp->n_standar = $request->n_standar;
        $pmkp->t_kerja = $request->t_kerja;
        $pmkp->j_sampel = $request->j_sampel;
        $pmkp->h_komunikasi = $request->h_komunikasi;
        $pmkp->unitkerja = $request->unitkerja;
        $pmkp->capaian = $request->capaian;

        $pmkp->save();

        return redirect()->route('pmkp.index')->with('success', "Data berhasil ditambahkan");

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
        $pmkp = Pmkp::find($id);

        return view('pmkps.edit')->withPmkp($pmkp);
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
            'kategori_pmkp' => 'required',
            'kode_pmkp' => 'required',
            'nama_ind_mutu' => 'required',
            'def_oprs' => 'required',
            'p_jawab' => 'required',
            'kbjkan_mutu' => 'required',
            'd_pemikiran' => 'required',
            'numerator' => 'required',
            'denominator' => 'required',
            'formula' => 'required', 
            'k_inklusi' => 'required',
            'k_eksklusi' => 'required',
            'metode' => 'required',
            'type' => 'required',
            'area_monitor' => 'required|max:191',
            'w_lapor' => 'required',
            'p_analisa' => 'required',
            'n_standar' => 'required',
            't_kerja' => 'required',
            'j_sampel' => 'required',
            'h_komunikasi' => 'required',
            'unitkerja' => 'required',
            'capaian'=> 'required'
    ]);

        Pmkp::find($id)->update($request->all());

        return redirect()->route('pmkp.index')->with('success', "Data berhasil di edit!!!");



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pmkp::find($id)->delete();

        return redirect()->route('pmkp.index')->with('success', 'Data berhasil dihapus');
    }

    public function laporanPmkp(Request $request)
    {
         $pmkps = Pmkp::orderBy('id','DESC')->paginate(10);

        return view('pmkps.laporan',compact('pmkps'))
        ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    public function downloadPmkp()
    {
        $pmkps = Pmkp::select('kategori_pmkp','kode_pmkp','nama_ind_mutu','def_oprs','p_jawab','kbjkan_mutu','d_pemikiran','numerator','denominator','formula','k_inklusi','k_eksklusi','metode','type','area_monitor','w_lapor','p_analisa','n_standar','t_kerja','j_sampel','h_komunikasi','unitkerja','capaian','created_at')->get();
        return Excel::create('datapmkp', function($excel) use ($pmkps){
            $excel->sheet('mysheet', function($sheet) use($pmkps){
                $sheet->fromArray($pmkps);
            });
        })->download('xls');
    }
}
