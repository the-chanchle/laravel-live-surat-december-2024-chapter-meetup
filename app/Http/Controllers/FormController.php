<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FormController extends Controller
{
    public function index($form_type)
    {
        return view($form_type);
    }

    public function store(Request $request)
    {
        try {
            // Create a new user
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
            ]);

            // Return success message
            if ($request->ajax()) {
                return response()->json(['message' => 'User created successfully!']);
            }

            activity()->performedOn($user)->useLog('register')->log('user with email ' . $request->input('email') . ' created a new account');

            return redirect()->back()->with('success', 'User created successfully!');
        } catch (\Exception $e) {
            // Return error message
            if ($request->ajax()) {
                return response()->json(['message' => 'Failed to create user!'], 500);
            }

            return redirect()->back()->with('error', 'Failed to create user!');
        }
    }
}