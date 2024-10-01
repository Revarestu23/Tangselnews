<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Walikota;

class WalikotaController extends Controller
{
    public function create()
    {
        return view('profil_walikota'); // Replace with the actual view name if needed
    }

    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'konten' => 'required|string',
        ]);

        // Handle the image upload if a file is provided
        $filename = null;
        if ($request->hasFile('gambar')) {
            $filename = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('images'), $filename); // Save image to public/images
        }

        // Create a new Walikota entry
        Walikota::create([
            'judul' => $request->judul,
            'gambar' => $filename,
            'konten' => strip_tags($request->konten), // Stripping HTML tags
        ]);

        return redirect()->route('walikota.create')->with('success', 'Data successfully submitted!');
    }
}
