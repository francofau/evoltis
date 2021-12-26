@extends('layouts.app')

@section('template_title')
    {{ $propietario->name ?? 'Detalle' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalle del Propietario</span>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre y Apellidos:</strong>
                            {{ $propietario->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>DNI:</strong>
                            {{ $propietario->dni }}
                        </div>
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            {{ $propietario->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Teléfono:</strong>
                            {{ $propietario->telefono }}
                        </div>

                    </div>
                </div>
                <div class="m-2">
                    <a class="btn btn-primary" href="{{ route('propietarios.index') }}"> Atrás</a>
                </div>
            </div>
        </div>
    </section>
@endsection
