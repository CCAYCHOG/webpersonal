<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Mail;

class ContactController extends Controller
{
    public function show()
    {
        $theme = 'charcoal';
        return view('contacto', compact('theme'));
    }

    public function send(Request $request)
    {
        $theme = 'charcoal';

        // VALIDACIÓN
        $validated = $request->validate([
            'nombre'  => 'required|min:3|max:50',
            'email'   => 'required|email',
            'mensaje' => 'required|min:10|max:500',
        ]);

        // DATOS A ENVIAR
        $data = [
            'nombre'  => $request->nombre,
            'email'   => $request->email,
            'mensaje' => $request->mensaje,
        ];

        // ENVÍO DE CORREO
        Mail::to('contacto@cesarcaycho.com')->send(new ContactFormMail($data));

        return back()
            ->with('success', 'Tu mensaje fue enviado correctamente.')
            ->with('theme', $theme);
    }
}
