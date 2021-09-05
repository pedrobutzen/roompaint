@extends('layouts.app', ['body_class' => 'page-cores'])

@section('content')
<div class="container">
    <h2 class="title">Calculadora de Tinta</h2>

    <h3>Cadastro de cores</h3>
    <p class="page-info">Para começar, cadastre todas as cores que deseja pintar seu imóvel.<p/>

    <div class="row">
        <section class="col-9">
            <form method="POST" action="{{ route('cores') }}" class="form-cores">
                @csrf

                <div class="form-group">
                    <label for="input-cor" class="form-label">Cor</label>
                    <input type="text" class="form-control  @error('cor') is-invalid @enderror" id="input-cor" name="cor" value="{{ old('cor') }}" required autofocus />

                    @error('cor')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="btn-wrapper d-flex justify-content-end">
                    <button type="submit" class="btn btn-secundary">
                        Salvar e criar nova
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Avançar
                    </button>
                </div>
            </form>
        </section>
        <aside class="col-3">
            <h3>Cores cadastradas</h3>
            <div class="list-items">
                <a href="#">Branco</a>
                <a href="#">Verde</a>
            </div>
        </aside>
    </div>
</div>
@endsection
