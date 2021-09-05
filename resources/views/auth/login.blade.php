@extends('layouts.app', ['body_class' => 'page-login'])

@section('content')
<div class="container">
    <h2 class="title">Calculadora de Tinta</h2>

    <h3>Login</h3>
    <p class="page-info">Para começar, faça login informando seu e-mail.<p/>

    <div class="row">
        <section class="col-9">
            <form method="POST" action="{{ route('login') }}" class="form-login">
                @csrf

                <div class="form-group">
                    <label for="input-email-login" class="form-label">E-mail</label>
                    <input type="text" class="form-control  @error('email') is-invalid @enderror" id="input-email-login" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />

                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="btn-wrapper d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">
                        Entrar
                    </button>
                </div>
            </form>
        </section>
        <aside class="col-3">
            <h3>Info</h3>
            <p></p>
        </aside>
    </div>
</div>
@endsection
