@extends('layouts.app', ['body_class' => 'page-comodos'])

@section('content')
<div class="container">
    <h2 class="title">Calculadora de Tinta</h2>

    <h3>Cadastro de cômodos</h3>
    <p class="page-info">Agora cadastre todos os cômodos que deseja pintar em sua casa, inserindo as medidas, quantidade de janelas, portas, e a cor desejada de cada parede.<p/>

    <div class="row">
        <section class="col-9">
            <form method="POST" action="{{ route('comodos') }}" class="form-comodos row justify-content-center">
                @csrf

                <div class="col-6 top">
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="input-altura-top" class="form-label">Altura</label>
                            <input type="text" class="form-control  @error('altura-top') is-invalid @enderror" id="input-altura-top" name="altura-top" value="{{ old('altura-top') }}" required autofocus />

                            @error('altura-top')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="input-largura-top" class="form-label">Largura</label>
                            <input type="text" class="form-control  @error('largura-top') is-invalid @enderror" id="input-largura-top" name="largura-top" value="{{ old('largura-top') }}" required autofocus />

                            @error('largura-top')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-3">
                            <label for="input-portas-top" class="form-label">Portas</label>
                            <input type="number" class="form-control  @error('portas-top') is-invalid @enderror" id="input-portas-top" name="portas-top" value="{{ old('portas-top', 0) }}" required autofocus />

                            @error('portas-top')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-3">
                            <label for="input-janelas-top" class="form-label">Janelas</label>
                            <input type="number" class="form-control  @error('janelas-top') is-invalid @enderror" id="input-janelas-top" name="janelas-top" value="{{ old('janelas-top', 0) }}" required autofocus />

                            @error('janelas-top')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror</div>
                        <div class="form-group col-6">
                            <label for="input-cor-top" class="form-label">Cor</label>
                            <select class="form-select @error('cor-top') is-invalid @enderror" id="input-cor-top" name="cor-top" >
                                <option selected>Selecione</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>

                            @error('cor-top')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row middle">
                    <div class="col-3">
                        <div class="form-group">
                            <label for="input-altura-left" class="form-label">Altura</label>
                            <input type="text" class="form-control  @error('altura-left') is-invalid @enderror" id="input-altura-left" name="altura-left" value="{{ old('altura-left') }}" required autofocus />

                            @error('altura-left')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="input-largura-left" class="form-label">Largura</label>
                            <input type="text" class="form-control  @error('largura-left') is-invalid @enderror" id="input-largura-left" name="largura-left" value="{{ old('largura-left') }}" required autofocus />

                            @error('largura-left')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="input-portas-left" class="form-label">Portas</label>
                                <input type="number" class="form-control  @error('portas-left') is-invalid @enderror" id="input-portas-left" name="portas-left" value="{{ old('portas-left', 0) }}" required autofocus />

                                @error('portas-left')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-6">
                                <label for="input-janelas-left" class="form-label">Janelas</label>
                                <input type="number" class="form-control  @error('janelas-left') is-invalid @enderror" id="input-janelas-left" name="janelas-left" value="{{ old('janelas-left', 0) }}" required autofocus />

                                @error('janelas-left')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">

                            <div class="form-group col-8">
                                <label for="input-cor-left" class="form-label">Cor</label>
                                <select class="form-select @error('cor-left') is-invalid @enderror" id="input-cor-left" name="cor-left" >
                                    <option selected>Selecione</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>

                                @error('cor-left')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="room">
                            <div class="form-group">
                                <label for="input-nome" class="form-label">Nome do cômodo</label>
                                <input type="text" class="form-control  @error('nome') is-invalid @enderror" id="input-nome" name="nome" value="{{ old('nome') }}" required autofocus />

                                @error('nome')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="input-altura-right" class="form-label">Altura</label>
                            <input type="text" class="form-control  @error('altura-right') is-invalid @enderror" id="input-altura-right" name="altura-right" value="{{ old('altura-right') }}" required autofocus />

                            @error('altura-right')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="input-largura-right" class="form-label">Largura</label>
                            <input type="text" class="form-control  @error('largura-right') is-invalid @enderror" id="input-largura-right" name="largura-right" value="{{ old('largura-right') }}" required autofocus />

                            @error('largura-right')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="input-portas-right" class="form-label">Portas</label>
                                <input type="number" class="form-control  @error('portas-right') is-invalid @enderror" id="input-portas-right" name="portas-right" value="{{ old('portas-right', 0) }}" required autofocus />

                                @error('portas-right')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-6">
                                <label for="input-janelas-right" class="form-label">Janelas</label>
                                <input type="number" class="form-control  @error('janelas-right') is-invalid @enderror" id="input-janelas-right" name="janelas-right" value="{{ old('janelas-right', 0) }}" required autofocus />

                                @error('janelas-right')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-8">
                                <label for="input-cor-right" class="form-label">Cor</label>
                                <select class="form-select @error('cor-right') is-invalid @enderror" id="input-cor-right" name="cor-right" >
                                    <option selected>Selecione</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>

                                @error('cor-right')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 bottom">
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="input-altura-bottom" class="form-label">Altura</label>
                            <input type="text" class="form-control  @error('altura-bottom') is-invalid @enderror" id="input-altura-bottom" name="altura-bottom" value="{{ old('altura-bottom') }}" required autofocus />

                            @error('altura-bottom')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="input-largura-bottom" class="form-label">Largura</label>
                            <input type="text" class="form-control  @error('largura-bottom') is-invalid @enderror" id="input-largura-bottom" name="largura-bottom" value="{{ old('largura-bottom') }}" required autofocus />

                            @error('largura-bottom')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-3">
                            <label for="input-portas-bottom" class="form-label">Portas</label>
                            <input type="number" class="form-control  @error('portas-bottom') is-invalid @enderror" id="input-portas-bottom" name="portas-bottom" value="{{ old('portas-bottom', 0) }}" required autofocus />

                            @error('portas-bottom')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-3">
                            <label for="input-janelas-bottom" class="form-label">Janelas</label>
                            <input type="number" class="form-control  @error('janelas-bottom') is-invalid @enderror" id="input-janelas-bottom" name="janelas-bottom" value="{{ old('janelas-bottom', 0) }}" required autofocus />

                            @error('janelas-bottom')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="input-cor-bottom" class="form-label">Cor</label>
                            <select class="form-select @error('cor-bottom') is-invalid @enderror" id="input-cor-bottom" name="cor-bottom" >
                                <option selected>Selecione</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>

                            @error('cor-bottom')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
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
            <h3>Cômodos cadastrados</h3>
            <div class="list-items">
                <a href="#">Branco</a>
                <a href="#">Verde</a>
            </div>

            <h3>Importante</h3>
            <p>
                Cada janela possui 2,00m x 1,20m<br />
                Cada porta possui 0,80m x 1,90m
            </p>
        </aside>
    </div>
</div>
@endsection
