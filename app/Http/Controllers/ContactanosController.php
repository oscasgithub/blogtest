<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    //

    public function index()
    {
        return view('contactanos.index');
    }

    public function store(Request $request)
    {   

        //Validar Formulario
        $request->validate([
                'name' => 'required|min:10|max:20',
                'correo' => 'required|email',
                'mensaje' => 'required|min:5|max:100',

        ]);

        //Enviar Email

        //$name = $request->name;
        // The email sending is done using the to method on the Mail facade    
        //$responseMail = Mail::to('oicastrillonc@unal.edu.co')->send(new ContactanosMailable($name));

        //dd($request->correo);        
        $responseMail = Mail::to($request->correo)->send(new ContactanosMailable($request->all()));
        //dd($responseMail);
        
        //return '<b> Email enviado correctamente </b>';

        //Enviar mensaje con variable de sesión
        return redirect()->route('contactanos.index')->with('info', 'Mensaje Enviado');

    }

}
