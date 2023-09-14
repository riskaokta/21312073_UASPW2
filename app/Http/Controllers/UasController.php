<?php

namespace App\Http\Controllers;

use App\Models\Uas;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uas = Uas::all();
        return view(view: '21312073.index', data: compact(var_name: '21312073'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('21312073.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $uas = new Uas;

        $request->validate([
            'npm' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        $uas->npm = $request->npm;
        $uas->nama = $request->nama;
        $uas->alamat = $request->alamat;

        $simpan = $uas->save();

        if ($simpan) {
            Alert::success('Succes', 'Data Berhasil ditambah');
            return redirect('/21312073');
        } else {
            Alert::success('Failed', 'Data Gagal ditambah');
        }
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
        $uas = Uas::where('id', $id)->first();

        return view('21312073.edit', compact('uas'));

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

        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required',
        ]);

        $uas = Uas::find($id);

        $uas->nama = $request->nama;
        $uas->umur = $request->umur;
        $uas->bio = $request->bio;

        $ubah = $uas->save();

        if ($ubah) {
            Alert::success('Succes', 'Data Berhasil diubah');
            return redirect('/21312073');
        } else {
            Alert::success('Failed', 'Data Gagal diubah');
        }

        return redirect('/21312073');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $uas = Uas::find($id);
        $hapus = $uas->delete();

        if ($hapus) {
            Alert::success('Succes', 'Data Berhasil dihapus');
            return redirect('/21312073');
        } else {
            Alert::success('Failed', 'Data Gagal dihapus');
        }

        Alert::info('Info', 'Data Berhasil dihapus');
        return redirect('/21312073');
    }
}