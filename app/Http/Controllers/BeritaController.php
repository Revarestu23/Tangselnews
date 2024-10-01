<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'content' => 'required|string|max:1000', // Adjust the max length as needed
        ]);

        // Create a new entry in the database
        Berita::create([
            'content' => $request->input('content'),
        ]);

        return redirect()->route('berita')->with('success', 'Berita saved successfully!');
    }
}
