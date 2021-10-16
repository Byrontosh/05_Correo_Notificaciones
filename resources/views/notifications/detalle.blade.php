@extends('layouts.app')
@section('content')
<div class="container">
    <h2 class="h3 text text-center">Módulo de Notificaciones</h2>
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-body d-flex justify-content-between align-items-center"> Detalle de la notificación
                <a href="{{route('notificacion.all')}}" class="btn btn-danger btn-sm">Regresar</a>
                </div>
                <div class="card-body">
                    <p class="font-weight-bold"> Detalle: </p>
                    {{$mensaje->mensaje}}
                    <p class="font-weight-bold mb-2"> Acciones: </p>


                    <form action="{{route('notificacion.realizada',$mensaje->id)}}" method="POST">
                    {{method_field('PATCH')}}
                    {{csrf_field()}}
                        <button class="btn btn-success btn-xs">Marcar como realizada</button>
                    </form>


                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection