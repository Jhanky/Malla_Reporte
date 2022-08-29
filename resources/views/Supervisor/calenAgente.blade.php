@extends('layouts.main')

@section('title', 'agente')

@section('base')
    <div class="card shadow mb-4">
        <div class="card-header py-3 row" id="agente_info">
            @foreach ($empleado as $list)
                <input type="text" value="{{ $list->EMP_ID }}" name="id_empleado" style="display: none">
                <div class="col-lg-4">
                    <h5>Agente: {{ $list->EMP_NOMBRES }}</h5>
                </div>
                <div class="col-lg-4">
                    <h5>Cargo: {{ $list->CAR_NOMBRE }}</h5>
                </div>
                <div class="col-lg-4">
                    <button type="button" class="btn" style="background-color: #f96806; color:white; float: right;"
                        data-bs-toggle="modal" data-bs-target="#asignarEvento">
                        Asignar Malla
                    </button>
                </div>

                @include('Supervisor.asignar')
            @endforeach
        </div>
        <div class="card-body">
            <div>
                <div id="calendario_supervisor_agente"></div>
            </div>
        </div>
    </div>
    {{-- CALENDARIO --}}
    <script src="{{ asset('js/calendario_supervisor.js') }}"></script>
@endsection
