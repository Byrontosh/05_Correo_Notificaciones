<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Support\Facades\Auth;

class NotificacionController extends Controller
{

    public function index()
    {
        $notificacionesNoAtendidas = Auth::user()->unreadNotifications;

        $notificacionesAtendidas = Auth::user()->readNotifications;

        return view('notifications.todas',compact('notificacionesNoAtendidas','notificacionesAtendidas'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $mensaje = Message::findOrFail($id);

        return view('notifications.detalle',compact('mensaje'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $notificaciones = auth()->user()->unreadNotifications;

        $notificaciones->markAsRead();

        return redirect('/notificaciones')->with('flash', 'tu tarea fué realizada con éxito');
    }


    public function destroy($id)
    {
        DatabaseNotification::find($id)->delete();

        return redirect('/notificaciones')->with('delete', 'tu tarea fué culminada con éxito');
    }
}
