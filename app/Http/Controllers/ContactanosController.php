<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailAble;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index()
    {
        return view('contactanos.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        $correo = new ContactanosMailAble($request->all());
        Mail::to('alex@example.com')->send($correo);

        return redirect()->route('contactanos.index')->with('info', 'Mensaje enviado correctamente');
        /*

        // Aquí puedes procesar los datos del formulario, por ejemplo, enviar un correo electrónico

        return redirect()->route('contactanos')->with('success', 'Mensaje enviado correctamente');
        */
    }
}
