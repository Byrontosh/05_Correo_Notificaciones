<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use App\Notifications\Notificaciones;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function index()
    {
        $users = User::where('id', '!=', auth()->id())->get();
        // Evitar que se cargue el usuario que inició sesión se mande mensajes
        return view('notifications.index', compact('users'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        request()->validate(
            [
                'receptor_id' => 'required',
                'mensaje' => 'required '
            ],
            [
                'required' => 'El campo :attribute es obligatorio',
            ]
        );


        $mensaje= Message::create([
            'emisor_id' => auth()->id(),
            'receptor_id' => request()->receptor_id,
            'mensaje' => request()->mensaje
        ]);

        
        $receptor = User::find($request->receptor_id);
        $receptor->notify(new Notificaciones($mensaje));

        return back()->with('flash', 'tu mensaje fué enviado');
    }


    public function show(Message $message)
    {
        //
    }


    public function edit(Message $message)
    {
        //
    }


    public function update(Request $request, Message $message)
    {
        //
    }


    public function destroy(Message $message)
    {
        //
    }
}
