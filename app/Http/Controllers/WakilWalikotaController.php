<?php

namespace App\Http\Controllers;

use App\Models\WakilWalikota;
use Illuminate\Http\Request;

class WakilWalikotaController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'judul' => 'required|string|max:255',
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'konten' => 'required|string',
    ]);

    $wakilWalikota = new WakilWalikota();
    $wakilWalikota->judul = $request->judul;

    // Hapus tag HTML dari konten
    $wakilWalikota->konten = strip_tags($request->konten);

    // Proses upload gambar jika ada
    if ($request->hasFile('gambar')) {
        $filename = $request->gambar->store('images', 'public');
        $wakilWalikota->gambar = $filename;
    }

    $wakilWalikota->save();

    return redirect()->back()->with('success', 'Data berhasil disimpan!');
}

}
