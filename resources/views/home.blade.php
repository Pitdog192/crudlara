@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inicio de sesión') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Ya has iniciado sesión') }}
                    <a href="{{ url('/maquina') }}"class="btn btn-primary" role="button">Ir al listado</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
