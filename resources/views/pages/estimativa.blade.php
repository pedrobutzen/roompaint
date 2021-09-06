@extends('layouts.app', ['body_class' => 'page-estimativa'])

@section('content')
<div class="container">
    <h2 class="title">Calculadora de Tinta</h2>

    <h3>Resultado</h3>
    <p class="page-info">
        Abaixo você pode conferir a quantidade de latas que serão necessárias de cada cor.<br/ >
        Cada litro de tinta é capaz de pintar 5 metros quadrados.<br/ >
        A recomendação de compra é baseada no menor desperdício possível.
    <p/>

    <div class="row">
        <section class="col-9">
            <div class="box">
                <h3>Recomendação</h3>
                <div class="total-area">Área total para cobertura: 34m2</div>
                <div class="row">
                    <div class="color col-4">
                        <h4>Branco (22m™)</h4>
                        <div class="estimated">
                            <div>Total necessário: 4,4L</div>
                            <ul>
                                <li>Compre:</li>
                                <li>1 lata de 3,6L</li>
                                <li>1 lata de 3,6L</li>
                                <li>1 lata de 3,6L</li>
                            </ul>
                        </div>
                    </div>
                    <div class="color col-4">
                        <h4>Branco (22m™)</h4>
                        <div class="estimated">
                            <div>Total necessário: 4,4L</div>
                            <ul>
                                <li>Compre:</li>
                                <li>1 lata de 3,6L</li>
                                <li>1 lata de 3,6L</li>
                                <li>1 lata de 3,6L</li>
                            </ul>
                        </div>
                    </div>
                    <div class="color col-4">
                        <h4>Branco (22m™)</h4>
                        <div class="estimated">
                            <div>Total necessário: 4,4L</div>
                            <ul>
                                <li>Compre:</li>
                                <li>1 lata de 3,6L</li>
                                <li>1 lata de 3,6L</li>
                                <li>1 lata de 3,6L</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="btn-wrapper d-flex justify-content-end">
                <a href="#" class="btn btn-danger">
                    Reiniciar processo do zero
                </a>
                <a href="#" class="btn btn-primary">
                    Voltar
                </a>
            </div>
        </section>
        <aside class="col-3">
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
