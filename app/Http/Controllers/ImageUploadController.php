<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image; // Assuming you have a model for images
use Illuminate\Support\Facades\Storage;

class ImageUploadController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate the image
        ]);

        // Store the image
        $path = $request->file('image')->store('images', 'public');

        // Save the image path in the database
        $image = new Image();
        $image->path = $path;
        $image->save();

        return redirect()->back()->with('success', 'Image uploaded successfully.');
    }
}
