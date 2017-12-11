<style>
    #submit {
        margin-top: 10px;
    }
</style>
<div class="conteiner">

    <div class="row">
        <div class="col-md-12">
            @if(count($errors))
                @foreach($errors->all() as $error)
                    <div class="col-md-12 alert alert-danger">{{$error}}</div>
                @endforeach
            @endif
        </div>


        <div class="col-md-8 col-md-offset-1">
            {!! Form::label('nome', 'Nombre') !!}
            {!! Form::text('nombre' , null , ['class'  =>  'form-control']) !!}

            {!! Form::label('email', 'E-Mail') !!}
            {!! Form::text('email' , null , ['class'  =>  'form-control']) !!}

            {!! Form::label('nome', 'Teféfono') !!}
            {!! Form::text('telefono' , null , ['class'  =>  'form-control']) !!}

            {!! Form::label('nome', 'Direccion') !!}
            {!! Form::text('direccion' , null , ['class'  =>  'form-control']) !!}
            {!! Form::submit('Cambiar', ['class'    =>  'btn btn-primary' , 'id'    =>  'submit']) !!}
        </div>
    </div>
</div>






