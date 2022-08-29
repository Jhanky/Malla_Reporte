@extends('layouts.main')

@section('title', 'agente')

@section('base')
    <div class="card shadow mb-4">
        {{-- <div class="card-header py-3">
        </div> --}}
        <div class="card-body">
            <div id="agente_info">
                <input type="text" value="{{Auth::user()->empleados->EMP_ID}}" style="display: none;" name="id_empleado">
                <div id="calendario_agente"></div>
            </div>
        </div>
    </div>
    {{-- CALENDARIO --}}
    <script src="{{ asset('js/calendario_agente.js') }}"></script>
@endsection
