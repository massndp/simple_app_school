<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Model\Mapel;
use App\Model\Ruang;
use Illuminate\Http\Request;

class RuangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.ruang.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.ruang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|unique:ruang'
        ]);

        Ruang::create([
            'nama' => $request->nama
        ]);

        return redirect()->route('ruang.index')->with('success', 'Data ruang berhasil dibuat');
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
        $ruang = Ruang::find($id);
        return view('pages.admin.ruang.edit', [
            'ruang' => $ruang
        ]);
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
        $this->validate($request,[
            'nama' => 'required|unique:ruang,nama,' . $id
        ]);

        Ruang::find($id)->update([
            'nama' => $request->nama
        ]);

        return redirect()->route('ruang.index')->with('success', 'Data ruang berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mapel = Mapel::find($id)->delete();
        return redirect()->route('ruang.index')->with('success', 'Data ruang berhasil dihapus');
    }

    public function datatable()
    {
        $all = Mapel::query();
        return datatables()->of($all)
        ->addColumn('actions', function($row){
            $editUrl = route('mapel.edit', $row->id);
            return "<a class='btn btn-info btn-sm' href='$editUrl'><i class='fas  fa-pencil-alt'></i></a>
            <button class='btn btn-sm btn-danger deleteModals my-2 ml-1' type='button' data-mapelid='$row->id' data-toggle='modal' data-target='#modalDelete'><i class='fa fa-trash'></i></button";
        })
        ->rawColumns(['actions'])
        ->make(true);
    }
}
