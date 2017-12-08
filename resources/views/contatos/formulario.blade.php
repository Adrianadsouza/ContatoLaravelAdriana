<style>
    #submit{
        margin-top: 10px;
    }
</style>


        {!! Form::label('nome', 'Nombre') !!}
        {!! Form::text('nombre' , null , ['class'  =>  'form-control']) !!}

        {!! Form::label('email', 'E-Mail') !!}
        {!! Form::text('email' , null , ['class'  =>  'form-control']) !!}

        {!! Form::label('nome', 'Teféfono') !!}
        {!! Form::text('telefono' , null , ['class'  =>  'form-control']) !!}

        {!! Form::label('nome', 'Direccion') !!}
        {!! Form::text('direccion' , null , ['class'  =>  'form-control']) !!}
        {!! Form::submit('Cambiar', ['class'    =>  'btn btn-primary' , 'id'    =>  'submit']) !!}




