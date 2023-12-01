<?php

namespace App\Http\Controllers;

use App\Models\jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jabatan = jabatan::all();
        return view("jabatan.index",compact("jabatan"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("jabatan.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data_jabatan = $request->validate([
            'nama_jabatan' => 'required',
            'jumlah_gaji_pokok'=> 'required',
            'upah_lembur'=> 'required'
        ]);
        jabatan::create($data_jabatan);
        return redirect('/jabatan/index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jabatan = jabatan::findOrFail($id);
        return view("jabatan.edit", compact("jabatan"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data_jabatan = $request->validate([
            'nama_jabatan' => 'required',
            'jumlah_gaji_pokok' => 'required',
            'upah_lembur' => 'required'
        ]);
        jabatan::findOrFail($id)->update($data_jabatan);
        return redirect('/jabatan/index')->with('success','Data Berhasil di tambah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        jabatan::findOrFail($id)->delete();
        return redirect('jabatan/index');
    }
}
