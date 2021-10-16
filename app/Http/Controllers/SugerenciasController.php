<?php

namespace App\Http\Controllers;

use App\Mail\MensajeCorreoRecibido;
use Illuminate\Support\Facades\Mail;

class SugerenciasController extends Controller
{
    public function sendMails()
    {
        return view('sugerencias');
    }

    public function  sendMailsProcessing ()
    {
        $mensaje=request()->validate([
            'nombre'=>'required',
            'apellido'=>'required',
            'correo'=>'required | email',
            'asunto'=>'required',
            'mensaje'=>'required | min:5'
        ],[
            'required'=>'El campo :attribute es obligatorio',
            'mensaje.min' => 'El :attribute debe ser tener más de 5 caracteres '
        ]);

        Mail::to('byron.loarte@epn.edu.ec')->queue(new MensajeCorreoRecibido($mensaje));

        return 'Mensaje enviado';
    }
}
