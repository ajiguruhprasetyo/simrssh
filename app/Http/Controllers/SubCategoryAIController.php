<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\SubCategoryAI;
use App\AreaIndikator;

class SubCategoryAIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $subais = SubCategoryAI::orderBy('id', 'asc')->paginate(10);

        return view('subai.index', compact('subais'))
        ->with('i', ($request->input('subai', 1) - 1) * 10);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $areainds = AreaIndikator::all();

        return view('subai.create')->withAreainds($areainds);
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
            'sub_category' => 'required',
            'id_area_indikator' => 'required|integer' //agar menyimpan data fk relation tipe data integer
        ]);

        $subai = new SubCategoryAI();
        $subai->sub_category = $request->sub_category;
        $subai->id_area_indikator = $request->id_area_indikator;
        $subai->save();

        return redirect()->route('subai.index')->with('success', 'Data berhasil di tambahkan');
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
    public function edit( $id)
    {
        
        $subais = SubCategoryAI::find($id);
        $areainds = AreaIndikator::all();
        return view('subai.edit',compact('subais','areainds'));
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
            'sub_category' => 'required',
            'id_area_indikator' => 'required|integer',
        ]);

        $subai = new SubCategoryAI();
        $subai->sub_category = $request->sub_category;
        $subai->id_area_indikator = $request->id_area_indikator;
        $subai->find($id)->update();

        return redirect()->route('subai.index')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SubCategoryAI::find($id)->delete();

        return redirect()->route('subai.index')->with('success', 'Data berhasil di hapus!!!');
    }
}
