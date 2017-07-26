@extends('plantilla')

@section('titulo','NUEVA OFICINA')


@section('subtitulo')

    <div class="container">
        <div class="row">

            <div class="col-md-2">
                <div class="form-group">
                    <a href="{!! route('activo.compact') !!}"><button class="btn btn-success btn active">RETORNAR A COMPLEMENTO</button></a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="navbar-right">
                    <a href="{!! route('oficina.listar') !!}"><button class="btn btn-warning btn active">LISTA DE OFICINA</button></a>
                </div>
            </div>



        </div>
    </div>


@endsection



@section('contenido')


    @if(count($errors)>0)

        <div class="alert alert-danger">
            <h4>Error</h4>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(['route'=>('oficina.grabar'),'method'=>'POST']) !!}
    {{csrf_field()}}

    @include('componentes.formulariogeneral')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                {{Form::button('Guardar',['type'=>'submit','class'=>'btn btn-primary'])}}
            </div>
        </div>
    </div>

    {!! Form::close() !!}


@endsection