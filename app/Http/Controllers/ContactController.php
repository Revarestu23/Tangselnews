<?php

// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'phone' => 'required|string|max:15',
        'address' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'share' => 'nullable|string|max:255', // Make share optional
    ]);

    // Set 'share' to an empty string if it's null
    $data = $request->all();
    $data['share'] = $data['share'] ?? ''; // Set to empty string if null

    Contact::create($data);

    return redirect()->back()->with('success', 'Contact information saved successfully!');
}

}
