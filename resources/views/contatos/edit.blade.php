@extends('layouts.app')
@section('content')
    <div class="col-md-6 col-md-offset-1">
        <a href="{{route('contato.index')}}"><h1><i class="fa fa-long-arrow-left" aria-hidden="true"></i></h1></a>
    </div>
    {!! Form::model($contato , array('route' => array('contato.update', $contato->id ) ) )  !!}
        @include('contatos.formulario')
    {!! Form::close() !!}

@endsection
