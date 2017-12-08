@extends('layouts.app')
@section('content')

    {!! Form::model($contato , array('route' => array('update', $contato->id))) !!}
        @include('contatos.formulario')
    {!! Form::close() !!}

@endsection
