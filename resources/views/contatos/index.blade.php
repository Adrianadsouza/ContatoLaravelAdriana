@extends('layouts.app')
@section('content')

    <br>
    <a href="{{route('contato.create')}}" class="btn btn-primary btn-md" role="button" aria-pressed="true"
       style="float: right; margin-right: 70px" >Nuevo contacto</a>
    <br>
    <br>
    <br>

    <div class="container">
        @if(Session::has('sucesso'))
            <div class="alert sucess">{{Session::get('sucesso')}}</div>
           @elseif(Session::has('erro'))
            <div class="alert danger">{{Session::get('erro')}}</div>
        @endif

            <table id="listagemCategoria" class="display" cellspacing="0" width="100%">

            <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>E-Mail</th>
                <th>Telefóno</th>
                <th>Direccion</th>
                <th>Acción</th>

            </tr>
            </thead>
            <tbody>

            @foreach($contatos as $cont)
                <tr>

                    <td>{{$cont->id}}</td>
                    <td>{{$cont->nombre}}</td>
                    <td>{{$cont->email}}</td>
                    <td>{{$cont->telefono}}</td>
                    <td>{{$cont->direccion}}</td>

                    <td>

                        {!! Form::open([ 'method'  => 'delete', 'route' => [ 'contato.destroy', $cont->id ] ]) !!}
                        <a href="{{url()->route('contato.edit' , $cont->id)}}" class="btn btn-primary btn-sm">Cambiar</a>
                        {!!  Form::submit('Excluir', ['class' => 'btn btn-danger btn-sm' , 'id' =>  'Excluir']) !!}
                        {!!  Form::close() !!}

                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

@endsection
