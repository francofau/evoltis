<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group mb-2">
            {{ Form::label('Marca') }}
            {{ Form::text('marca', $coch->marca, ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mb-2">
            {{ Form::label('Modelo') }}
            {{ Form::text('modelo', $coch->modelo, ['class' => 'form-control' . ($errors->has('modelo') ? ' is-invalid' : ''), 'placeholder' => 'Modelo']) }}
            {!! $errors->first('modelo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mb-2">
            {{ Form::label('Matrícula') }}
            {{ Form::text('matricula', $coch->matricula, ['class' => 'form-control' . ($errors->has('matricula') ? ' is-invalid' : ''), 'placeholder' => 'Matrícula']) }}
            {!! $errors->first('matricula', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mb-2">
            {{ Form::label('Propietario') }}
            {{ Form::select('id_propietario', $propietarios ,$coch->id_propietario, ['class' => 'form-control', 'id' => 'selectProp', 'name' => 'selectProp' . ($errors->has('id_propietario') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar']) }}
            {!! $errors->first('id_propietario', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</div>