<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Ppi;

class PpiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $ppis = Ppi::orderBy('created_at', 'DESC')->paginate(10);
        
        return view('ppis.index', compact('ppis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ruangs = Ppi::all();
        // $ruangs = Ruang::where('nama_ruang')->get();
        // $ppis = Ppi::with(array('ruangs' => function($query){
        //         $query->select('id','nama_ruang');
        //         }))->get();

        return view('ppis.create', compact('ruangs'));
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
            'no_reg' => 'required|integer',
            'nama_pasien' => 'required|max:100',
            'ruang' => 'required', //relasi tabel ppi dan ruang
            'jml_pasien_rawat' => 'required|integer',
            'jml_tirah_baring' => 'required|integer',
            'total_operasi' => 'required|integer',
            'ivc' => 'required|integer',
            'uc' => 'required|integer',
            'vm' => 'required|integer',
            'ett' => 'required|integer',
            'plebitis' => 'required|integer',
            'isk' => 'required|integer',
            'vap' => 'required|integer',
            'hap' => 'required|integer',
            'dekubitus' => 'required|integer',
            'ido' => 'required|integer',
            'hsl_kultur' => 'required',

        ]);


        Ppi::create($request->all());


        return redirect()->route('ppi.index')

                        ->with('success','Data Surveilance berhasil ditambahkan!!!');

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
        $ppis = Ppi::find($id);

        return view ('ppis.edit', compact('ppis'));
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
            'no_reg' => 'required|integer',
            'nama_pasien' => 'required|max:100',
            'ruang' => 'required', //relasi tabel ppi dan ruang
            'jml_pasien_rawat' => 'required|integer',
            'jml_tirah_baring' => 'required|integer',
            'total_operasi' => 'required|integer',
            'ivc' => 'required|integer',
            'uc' => 'required|integer',
            'vm' => 'required|integer',
            'ett' => 'required|integer',
            'plebitis' => 'required|integer',
            'isk' => 'required|integer',
            'vap' => 'required|integer',
            'hap' => 'required|integer',
            'dekubitus' => 'required|integer',
            'ido' => 'required|integer',
            'hsl_kultur' => 'required',

        ]);



        Ppi::find($id)->update($request->all());


        return redirect()->route('ppi.index')

                        ->with('success','Data Surveilance berhasil di update!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ppi::find($id)->delete();

        return redirect()->route('ppi.index')

                        ->with('success','Data Surveilance berhasil di hapus!!!');


    }

      public function laporanPpi(Request $request)
    {
        $resultppi = Ppi::search($request->search)->get();
         // $ppis = Ppi::orderBy('id','DESC')->paginate(10);

        return view('ppis.laporan',compact('resultppi'))
        ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    public function downloadPpi()
    {
        $ppis = Ppi::select('no_reg','nama_pasien','ruang','jml_pasien_rawat','jml_tirah_baring','total_operasi','ivc','uc','vm','ett','plebitis','isk','vap','hap','dekubitus','ido','hsl_kultur')->get();
        return Excel::create('datappi', function($excel) use ($ppis){
            $excel->sheet('mysheet', function($sheet) use($ppis){
                $sheet->fromArray($ppis);
            });
        })->download('xls');
    }
}
