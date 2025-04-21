<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use App\Models\Kursus;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaftaran = Pendaftaran::all();
        return view('home.pendaftaran.index', compact(['pendaftaran']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kursus = Kursus::all();
        return view('home.pendaftaran.tambah', compact(['kursus']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pendaftaran::create($request->all());
        return redirect('admin/pendaftaran');
    }
    public function daftar(Request $request)
    {
        $request->validate([
            'namasiswa' => 'required',
            'alamat' => 'required',
            'no_tlp' => 'required',
            // 'email' => 'required',
            'tgl_lahir' => 'required',
            // 'tgl_pendaftaran' => 'required',
            // 'status' => 'required',
        ]);

        Pendaftaran::create([
            'namasiswa' => $request->namasiswa,
            'alamat' => $request->alamat,
            'no_tlp' => $request->no_tlp,
            // 'email' => $request->email,
            'tgl_lahir' => $request->tgl_lahir,
            'tgl_pendaftaran' => now(),
            'status' => 'Belum Dibayar'
        ]);
        return redirect('/')->with('success', 'Pendaftaran Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pendaftaran = Pendaftaran::find($id);
        $kursus = Kursus::all();
        return view('home.pendaftaran.edit', compact(['pendaftaran'],'kursus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $pendaftaran = Pendaftaran::find($id);
        $pendaftaran->update($request->all());
        return redirect('admin/pendaftaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pendaftaran = Pendaftaran::find($id);
        $pendaftaran->delete();
        return redirect('admin/pendaftaran');
    }
}
