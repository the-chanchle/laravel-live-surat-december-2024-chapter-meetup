<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keystroke;
class KeystrokeController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'keystroke' => 'required|string',
            'inputType' => 'required|string',
        ]);

        // Save the keystroke to the database
        Keystroke::create([
            'input_type' => $request->input('inputType'),
            'keystroke' => $request->input('keystroke')
        ]);

        return response()->json(['message' => 'Keystroke saved successfully!']);
    }
}
