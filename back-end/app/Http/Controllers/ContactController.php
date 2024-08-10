<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\Log;


class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function handleForm(Request $request)
    {
        Log::info('Contact form submitted', $request->all());

        // Validate the data
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Save data to the database
        Contact::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ]);

        return response()->json(['message' => 'Votre message a été envoyé avec succès!']);
    }
}