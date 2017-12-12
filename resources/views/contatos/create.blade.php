@extends('layouts.app')
@section('content')
    <div class="conteiner">
        <div class="row">
            <div class="col-md-3 col-md-offset-1">
                <a href="{{route('contato.index')}}"><h1><button class="btn btn-primary btn-md">Volver</button></h1></a>
            </div>
        </div>

            <div class="col-md-9">

                {!! Form::open(['route' =>  'contato.store' , 'method'  =>  'post'])!!}
                @include('contatos.formulario')
                {!! Form::close() !!}
            </div>


    </div>

@stop
