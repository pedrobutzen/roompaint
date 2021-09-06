<div class="form-group">
    {!! Form::label('name', 'Cor', ['class' => 'form-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'autofocus']) !!}

    @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="btn-wrapper d-flex justify-content-end">
    {!! Form::submit('Salvar e criar nova', ['class' => 'btn btn-secundary']) !!}
    {!! Form::submit('Avançar', ['class' => 'btn btn-primary', 'name' => 'next']) !!}
</div>
