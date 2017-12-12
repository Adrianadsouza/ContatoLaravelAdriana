@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="row">
            <div class="col-md-3 col-md-offset-1">
                <a href="{{route('contato.index')}}"><h1><button class="btn btn-primary btn-md">Volver</button></h1></a>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        {!! Form::model($contato , array('route' => array('contato.update', $contato->id ) ) )  !!}


        {{ method_field('PUT') }}
        @include('contatos.formulario')
        {!! Form::close() !!}
    </div>



@endsection
