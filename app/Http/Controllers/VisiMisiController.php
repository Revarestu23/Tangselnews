<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisiMisi;

class VisiMisiController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'content' => 'required|string|max:1000', // Adjust the max length as needed
        ]);

        // Create a new entry in the database
        VisiMisi::create([
            'content' => $request->input('content'),
        ]);

        return redirect()->route('visi.misi')->with('success', 'Content saved successfully!');
    }
}
