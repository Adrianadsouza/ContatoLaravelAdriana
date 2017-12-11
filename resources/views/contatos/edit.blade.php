@extends('layouts.app')
@section('content')
    <div class="col-md-6 col-md-offset-1">
        <a href="{{route('contato.index')}}">
            <h1>
                <button class="btn btn-primary btn-lg">Volver</button>
            </h1>
        </a>
    </div>
    {!! Form::model($contato , array('route' => array('contato.update', $contato->id ) ) )  !!}
    <div class="col-md-6">
        
        {{ method_field('PUT') }}
        @include('contatos.formulario')
        {!! Form::close() !!}
    </div>

@endsection
