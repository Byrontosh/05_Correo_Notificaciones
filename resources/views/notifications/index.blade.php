@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Enviar Notificaciones</div>

                <form action="{{route('mensaje.store')}}" method="POST">
                    @csrf
                    <select class="form-control mt-2 @error('receptor_id')is-invalid @enderror" name="receptor_id">
                        <option value="" >Seleccione al usuario</option>
                        @foreach($users as $user)

                        <option value="{{$user->id}}" {{old('receptor_id')== $user->id ? "selected" : " "}}>{{$user->name}}</option>

                        @endforeach
                    </select>

                    @error('receptor_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror

                    <div class="panel-body mt-2">
                        <div class="form-group">
                            <textarea name="mensaje" class="form-control @error('mensaje')is-invalid @enderror" 
                            cols="30" rows="5" placeholder="Escribe tu mensaje"></textarea>
                        </div>
                    </div>
                    
                    @error('mensaje')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                    <button class="btn btn-success btn-block">Enviar</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection