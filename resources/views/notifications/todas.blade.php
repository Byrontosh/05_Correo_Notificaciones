@extends('layouts.app')
@section('content')
<div class="container">
    <h2 class="h3 text text-center">Módulo de Notificaciones</h2>
    <div class="row ">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"> Notificaciones sin atender</div>
                <div class="card-body">
                    <ul class="list-group">
                        @forelse($notificacionesNoAtendidas as $nna)
                        <li class="list-group-item">
                            <a href="{{$nna->data['link']}}">
                                {{$nna->data['mensaje']}}
                            </a>
                        </li>
                        @empty
                        <p class="text-danger">No existen notificaciones por atender</p>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"> Notificaciones atendidas</div>
                <div class="card-body">
                    @forelse($notificacionesAtendidas as $na)

                    <li class="list-group-item d-flex justify-content-between align-items-center">

                        {{$na->data['mensaje']}}

                        <form action="{{route('notificacion.terminada',$na->id)}}" method="POST">
                            {{method_field('DELETE')}}
                            {{csrf_field()}}
                            <button class="btn btn-danger btn-xs">Finalizar</button>
                        </form>


                    </li>
                    @empty
                    <p class="text-danger">No existen notificaciones antendidas</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection