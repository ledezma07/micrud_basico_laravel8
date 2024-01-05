@extends('layouts.app')

@section('template_title')
    {{ $mascota->name ?? "{{ __('Show') Mascota" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Mascota</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('mascotas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $mascota->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Raza:</strong>
                            {{ $mascota->raza }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $mascota->edad }}
                        </div>
                        <div class="form-group">
                            <strong>Idpersona:</strong>
                            {{ $mascota->idPersona }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
