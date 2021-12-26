<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group mb-2">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $propietario->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group mb-2">
            {{ Form::label('dni') }}
            {{ Form::text('dni', $propietario->dni, ['class' => 'form-control' . ($errors->has('dni') ? ' is-invalid' : ''), 'placeholder' => 'Dni']) }}
            {!! $errors->first('dni', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group mb-2">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $propietario->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group mb-2">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $propietario->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</div>