@extends('layouts.app')

@section('template_title')
    Crear Coche
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Coche</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('coches.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('coch.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
       {{-- <div class="col-md-12">
            @includeif('partials.errors')
            <div class="card card-default mt-3">
                <div class="card-header">
                    <span class="card-title">Vehiculos del propietario</span>
                </div>
                <div class="card-body">
                    <div class="col-md-4">
                        <input type="text" id="coche" name="coche" class="mt-4" disabled>
                    </div>
                    <div class="col-md-4">
                        
                    </div>
                    <div class="col-md-4">
                        
                    </div>
                    
                </div>
            </div>
        </div> --}}
    </section>
@endsection
   

