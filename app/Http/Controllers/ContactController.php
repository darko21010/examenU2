<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        // Validar la solicitud
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        // Procesar la solicitud (por ejemplo, enviar un correo)
        // Mail::to('admin@example.com')->send(new ContactMail($request->all()));
        
        return redirect()->back()->with('success', 'Thank you for contacting us!');
    }
}
