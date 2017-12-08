@extends('layouts.app')
@section('content')
    <div class="conteiner">
        <div class="col-md-12">
            <a href="{{route('principal')}}"><h3><i class="fa fa-desktop" aria-hidden="true"></i></h3></a>
        </div>
        <div class="row">
            <div class="row">
                <div class="col-md-6">
                    @if(count($errors))
                        @foreach($errors->all() as $error)
                            <div class="col-md-12 alert alert-danger">{{$error}}</div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">

                {!! Form::open(['route' =>  'store' , 'method'  =>  'post'])!!}
                @include('contatos.formulario')
                {!! Form::close() !!}
            </div>
        </div>

    </div>

@stop
