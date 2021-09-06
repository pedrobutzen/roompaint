@extends('layouts.app', ['body_class' => 'page-estimativa'])

@section('content')
<div class="container">
    <h2 class="title">Calculadora de Tinta</h2>

    <h3>Resultado</h3>
    <p class="page-info">
        Abaixo você pode conferir a quantidade de latas que serão necessárias de cada cor.<br/ >
        Cada litro de tinta é capaz de pintar 5 metros quadrados.<br/ >
        A recomendação de compra dá prioridade para latas maiores.
    <p/>

    <div class="row">
        <section class="col-md-9">
            <div class="box">
                <h3>Recomendação</h3>
                <div class="total-area">Área total para cobertura: {{ $user->getArea() }}m²</div>
                <div class="row">
                    @foreach($colors as $color)
                        <div class="color col-6">
                            <h4>{{ $color->name }} ({{ $color->getArea() }}m²)</h4>
                            <div class="estimated">
                                <div>Total necessário: {{ $color->amountNeededToPaint() }}L</div>
                                <ul>
                                    <li>Compre:</li>
                                    @foreach($color->recommendedGallonsToBuy() as $size => $amount)
                                        <li>{{ $amount }} lata{{ $amount > 1 ? 's' : '' }} de {{ $size }}L</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            
            <div class="btn-wrapper d-flex justify-content-between">
                <a href="{{ route('rooms.index') }}" class="btn btn-light">
                    Voltar
                </a>

                {!! Form::open(['route' => 'reset']) !!}
                    {!! Form::submit('Reiniciar processo do zero', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </section>
        <aside class="col-md-3">
            <h3>Variações disponíveis de tamanho</h3>
            <ul>
                <li>0,5L</li>
                <li>2,5L</li>
                <li>3,6L</li>
                <li>18L</li>
            </div>
        </aside>
    </div>
</div>
@endsection
