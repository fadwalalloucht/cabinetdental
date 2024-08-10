<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\StreamedResponse;

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

    public function listContact()
    {
        $contacts = Contact::all();
        return view('admin.contact')->with('contacts', $contacts);
    }

    public function exportContacts()
    {
        $contacts = Contact::all();

        $date = date('Y-m-d');
        $csvFileName = "contacts_{$date}.csv";

        $response = new StreamedResponse(function () use ($contacts) {
            $handle = fopen('php://output', 'w');

            // Output UTF-8 BOM to ensure proper encoding
            fwrite($handle, "\xEF\xBB\xBF");

            // Add CSV headers with semicolon delimiter
            fputcsv($handle, ['Name', 'Phone', 'Email', 'Message'], ';');

            // Add contact data with semicolon delimiter
            foreach ($contacts as $contact) {
                fputcsv($handle, [
                    $contact->name,
                    $contact->phone,
                    $contact->email,
                    $contact->message,
                ], ';');
            }

            fclose($handle);
        });

        $response->headers->set('Content-Type', 'text/csv; charset=UTF-8');
        $response->headers->set('Content-Disposition', 'attachment; filename="' . $csvFileName . '"');

        return $response;
    }
}
