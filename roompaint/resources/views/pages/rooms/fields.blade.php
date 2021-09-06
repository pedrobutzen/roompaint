<div class="col-6">
    <div class="row">
        <div class="form-group col-6">
            {!! Form::label('height-top', 'Altura', ['class' => 'form-label']) !!}
            {!! Form::number('height-top', null, ['class' => 'form-control' . ($errors->has('height-top') ? ' is-invalid' : ''), 'autofocus', 'step' => '0.01']) !!}

            @error('height-top')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group col-6">
            {!! Form::label('width-top', 'Largura', ['class' => 'form-label']) !!}
            {!! Form::number('width-top', null, ['class' => 'form-control' . ($errors->has('width-top') ? ' is-invalid' : ''), 'step' => '0.01']) !!}

            @error('width-top')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="form-group col-3">
            {!! Form::label('doors-top', 'Portas', ['class' => 'form-label']) !!}
            {!! Form::number('doors-top', 0, ['class' => 'form-control' . ($errors->has('doors-top') ? ' is-invalid' : '')]) !!}

            @error('doors-top')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group col-3">
            {!! Form::label('windows-top', 'Janelas', ['class' => 'form-label']) !!}
            {!! Form::number('windows-top', 0, ['class' => 'form-control' . ($errors->has('windows-top') ? ' is-invalid' : '')]) !!}

            @error('windows-top')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror</div>
        <div class="form-group col-6">
            {!! Form::label('color-top', 'Cor', ['class' => 'form-label']) !!}
            {!! Form::select('color-top', $colors, null, [ 'class' => 'form-select' . ($errors->has('color-top') ? ' is-invalid' : ''), 'placeholder' => 'Selecione']) !!}

            @error('color-top')
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
            {!! Form::label('height-left', 'Altura', ['class' => 'form-label']) !!}
            {!! Form::number('height-left', null, ['class' => 'form-control' . ($errors->has('height-left') ? ' is-invalid' : ''), 'step' => '0.01']) !!}

            @error('height-left')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::label('width-left', 'Largura', ['class' => 'form-label']) !!}
            {!! Form::number('width-left', null, ['class' => 'form-control' . ($errors->has('width-left') ? ' is-invalid' : ''), 'step' => '0.01']) !!}

            @error('width-left')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="row">
            <div class="form-group col-6">
                {!! Form::label('doors-left', 'Portas', ['class' => 'form-label']) !!}
                {!! Form::number('doors-left', 0, ['class' => 'form-control' . ($errors->has('doors-left') ? ' is-invalid' : '')]) !!}

                @error('doors-left')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group col-6">
                {!! Form::label('windows-left', 'Janelas', ['class' => 'form-label']) !!}
                {!! Form::number('windows-left', 0, ['class' => 'form-control' . ($errors->has('windows-left') ? ' is-invalid' : '')]) !!}

                @error('windows-left')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('color-left', 'Cor', ['class' => 'form-label']) !!}
            {!! Form::select('color-left', $colors, null, [ 'class' => 'form-select' . ($errors->has('color-left') ? ' is-invalid' : ''), 'placeholder' => 'Selecione']) !!}

            @error('color-left')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="col-6">
        <div class="room">
            <div class="form-group">
                {!! Form::label('name', 'Nome do cômodo', ['class' => 'form-label']) !!}
                {!! Form::text('name', null, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : '')]) !!}

                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="form-group">
            {!! Form::label('height-right', 'Altura', ['class' => 'form-label']) !!}
            {!! Form::number('height-right', null, ['class' => 'form-control' . ($errors->has('height-right') ? ' is-invalid' : ''), 'step' => '0.01']) !!}

            @error('height-right')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::label('width-right', 'Largura', ['class' => 'form-label']) !!}
            {!! Form::number('width-right', null, ['class' => 'form-control' . ($errors->has('width-right') ? ' is-invalid' : ''), 'step' => '0.01']) !!}

            @error('width-right')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="row">
            <div class="form-group col-6">
                {!! Form::label('doors-right', 'Portas', ['class' => 'form-label']) !!}
                {!! Form::number('doors-right', 0, ['class' => 'form-control' . ($errors->has('doors-right') ? ' is-invalid' : '')]) !!}

                @error('doors-right')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group col-6">
                {!! Form::label('windows-right', 'Janelas', ['class' => 'form-label']) !!}
                {!! Form::number('windows-right', 0, ['class' => 'form-control' . ($errors->has('windows-right') ? ' is-invalid' : '')]) !!}

                @error('windows-right')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('color-right', 'Cor', ['class' => 'form-label']) !!}
            {!! Form::select('color-right', $colors, null, [ 'class' => 'form-select' . ($errors->has('color-right') ? ' is-invalid' : ''), 'placeholder' => 'Selecione']) !!}

            @error('color-right')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
</div>
<div class="col-6">
    <div class="row">
        <div class="form-group col-6">
            {!! Form::label('height-bottom', 'Altura', ['class' => 'form-label']) !!}
            {!! Form::number('height-bottom', null, ['class' => 'form-control' . ($errors->has('height-bottom') ? ' is-invalid' : ''), 'step' => '0.01']) !!}

            @error('height-bottom')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group col-6">
            {!! Form::label('width-bottom', 'Largura', ['class' => 'form-label']) !!}
            {!! Form::number('width-bottom', null, ['class' => 'form-control' . ($errors->has('width-bottom') ? ' is-invalid' : ''), 'step' => '0.01']) !!}

            @error('width-bottom')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="form-group col-3">
            {!! Form::label('doors-bottom', 'Portas', ['class' => 'form-label']) !!}
            {!! Form::number('doors-bottom', 0, ['class' => 'form-control' . ($errors->has('doors-bottom') ? ' is-invalid' : '')]) !!}

            @error('doors-bottom')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group col-3">
            {!! Form::label('windows-bottom', 'Janelas', ['class' => 'form-label']) !!}
            {!! Form::number('windows-bottom', 0, ['class' => 'form-control' . ($errors->has('windows-bottom') ? ' is-invalid' : '')]) !!}

            @error('windows-bottom')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group col-6">
            {!! Form::label('color-bottom', 'Cor', ['class' => 'form-label']) !!}
            {!! Form::select('color-bottom', $colors, null, [ 'class' => 'form-select' . ($errors->has('color-bottom') ? ' is-invalid' : ''), 'placeholder' => 'Selecione']) !!}

            @error('color-bottom')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
</div>

<div class="btn-wrapper d-flex justify-content-between">
    <a href="{{ route('colors.index') }}" class="btn btn-light">
        Voltar
    </a>
    <div>
        {!! Form::submit('Salvar e criar nova', ['class' => 'btn btn-secundary']) !!}
        {!! Form::submit('Avançar', ['class' => 'btn btn-primary', 'name' => 'next']) !!}
    </div>
</div>
