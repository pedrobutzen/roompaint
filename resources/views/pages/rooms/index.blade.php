@extends('layouts.app', ['body_class' => 'page-rooms'])

@section('content')
<div class="container">
    <h2 class="title">Calculadora de Tinta</h2>

    <h3>Cadastro de cômodos</h3>
    <p class="page-info">Agora cadastre todos os cômodos que deseja pintar em sua casa, inserindo as medidas, quantidade de janelas, portas, e a cor desejada de cada parede.<p/>

    <div class="row">
        <section class="col-9">
            {!! Form::open(['route' => 'rooms.index', 'class' => 'form-rooms row justify-content-center']) !!}
                @include('pages.rooms.fields')
            {!! Form::close() !!}
        </section>

        @include('pages.rooms.aside')
    </div>
</div>
@endsection
