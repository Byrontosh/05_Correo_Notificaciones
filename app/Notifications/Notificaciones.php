<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class Notificaciones extends Notification
{
    public $mensaje;
    use Queueable;


    public function __construct($msj)
    {
        $this->mensaje = $msj;
    }


    public function via($notifiable)
    {
        return ['database'];
    }


    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }


    public function toArray($notifiable)
    {
        return [
            'link'=>route('notificacion.detalle',$this->mensaje->id),

            'mensaje'=> "Has recibido un mensaje de ". User::find($this->mensaje->emisor_id)->name
        ];
    }
}
