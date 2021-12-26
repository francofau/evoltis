@extends('layouts.app')

@section('template_title')
    {{ $coch->name ?? 'Detalle coche' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalle Coche</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $coch->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $coch->modelo }}
                        </div>
                        <div class="form-group">
                            <strong>Matrícula:</strong>
                            {{ $coch->matricula }}
                        </div>
                        <div class="form-group">
                            <strong>Propietario:</strong>
                            {{ $coch->propietario->nombre }}
                        </div>
                    </div>
                </div>
                <div class="m-2">
                    <a class="btn btn-primary" href="{{ route('coches.index') }}"> Atrás</a>
                </div>
            </div>
        </div>
    </section>
@endsection
