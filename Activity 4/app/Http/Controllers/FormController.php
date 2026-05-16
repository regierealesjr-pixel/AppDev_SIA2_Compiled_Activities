<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    // Display Form
    public function create()
    {
        return view('form');
    }

    // Handle Form Submission
    public function store(Request $request)
    {
        // Validation Rules
        $request->validate([
            'participant_name' => 'required|min:3',
            'contact_email' => 'required|email',
            'vehicle_brand' => 'required',
            'vehicle_year' => 'required|numeric|min:1990',
            'car_modifications' => 'required|min:10',
        ],[
            'participant_name.required' => 'Participant name is required.',
            'contact_email.email' => 'Please enter a valid email address.',
            'vehicle_year.min' => 'Vehicle year must be 1990 or above.',
        ]);

        // Success Message
        return back()->with(
            'success',
            'Vehicle registered successfully!'
        );
    }
}