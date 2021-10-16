<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MensajeCorreoRecibido extends Mailable
{
    public $subject = "Correo de un cliente";
    
    public $msg;


    use Queueable, SerializesModels;

    public function __construct($mensaje)
    {
        $this->msg = $mensaje;
    }


    public function build()
    {
        return $this->view('mail.mensaje');
    }
}
