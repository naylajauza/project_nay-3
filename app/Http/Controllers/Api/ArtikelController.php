<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mengambil semua artikel dengan relasi kategori
        $artikels = Artikel::with('Kategori')->get();
        return response()->json($artikels);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'id_kategori' => 'required|exists:kategoris,id',
            'deskripsi' => 'required|string',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Menyimpan artikel baru
        $data = $request->all();

        // Menyimpan gambar jika ada
        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/covers/artikels', $filename);
            $data['cover'] = 'storage/covers/artikels/' . $filename;
        }

        // Membuat artikel
        $artikel = Artikel::create($data);
        return response()->json($artikel, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        // Mencari artikel berdasarkan slug
        $artikel = Artikel::with('Kategori')->where('slug', $slug)->first();

        if (!$artikel) {
            return response()->json(['message' => 'Artikel not found'], 404);
        }

        return response()->json($artikel);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        // Mencari artikel berdasarkan slug
        $artikel = Artikel::where('slug', $slug)->first();

        if (!$artikel) {
            return response()->json(['message' => 'Artikel not found'], 404);
        }

        // Validasi data yang diterima
        $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'id_kategori' => 'required|exists:kategoris,id',
            'deskripsi' => 'required|string',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Menyimpan data yang diterima
        $data = $request->all();

        if ($request->hasFile('cover')) {
            // Menyimpan gambar baru jika ada
            $file = $request->file('cover');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/covers/artikels', $filename);
            $data['cover'] = 'storage/covers/artikels/' . $filename;
        }

        // Memperbarui artikel
        $artikel->update($data);

        return response()->json($artikel);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        // Mencari artikel berdasarkan slug
        $artikel = Artikel::where('slug', $slug)->first();

        if (!$artikel) {
            return response()->json(['message' => 'Artikel not found'], 404);
        }

        // Menghapus artikel
        $artikel->delete();

        return response()->json(['message' => 'Artikel deleted successfully']);
    }
}
