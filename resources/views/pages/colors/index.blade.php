@extends('layouts.app', ['body_class' => 'page-colors'])

@section('content')
<div class="container">
    <h2 class="title">Calculadora de Tinta</h2>

    <h3>Cadastro de cores</h3>
    <p class="page-info">Para começar, cadastre todas as cores que deseja pintar seu imóvel.<p/>

    <div class="row">
        <section class="col-9">
            {!! Form::open(['route' => 'colors.store', 'class' => 'form-colors']) !!}
                @include('pages.colors.fields')
            {!! Form::close() !!}
        </section>

        @include('pages.colors.aside')
    </div>
</div>
@endsection
