@extends('layouts.app')
@section('content')
    <div class="conteiner">
        <div class="col-md-4">
            <a href="{{route('contato.index')}}"><h1><button class="btn btn-primary btn-lg">Volver</button></h1></a>
        </div>

        <div class="row">
            <div class="col-md-6">

                {!! Form::open(['route' =>  'contato.store' , 'method'  =>  'post'])!!}
                @include('contatos.formulario')
                {!! Form::close() !!}
            </div>
        </div>

    </div>

@stop
