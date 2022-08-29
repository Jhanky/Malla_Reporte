@extends('layouts.main')

@section('title', 'perfil')

@section('base')

    <main>
        <div class="container text-center px-4">
            <h1 class="mt-4">Perfil</h1>
            @include('usuarios.msj')

            @if (Session::has('msjperfilactualizado'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong> {{ Session::get('msjperfilactualizado') }} </strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card">
                <div class="card-body">
                    <form class="" method="POST" action="{{ route('UpdatePerfil', Auth::user()->id) }}" novalidate>
                        @csrf
                        @method('PUT')

                        <div class="modal-body" id="cont_modal">
                            <div class="row">

                                <input type="email" class="form-control" style="display: none;" id="name"
                                    name="name" value="{{ Auth::user()->name }}" required>

                                <div class="col-lg-4 col-sm-12">
                                    <label for="email" class="form-label">Correo *</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        value="{{ Auth::user()->email }}" required>
                                </div>

                                <div class="col-lg-4 col-sm-12">
                                    <label for="password" class="form-label">Confirmar</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                    <br>
                                </div>

                                <div class="col-lg-4 col-sm-12">
                                    <label for="confirm-password" class="form-label">Confirmar Contraseña</label>
                                    <input type="password" class="form-control" id="confirm-password"
                                        name="confirm-password">
                                    <br>
                                </div>

                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="submit" class="btn btn-primary col-md-3">Actualizar</button>
                                </div>



                            </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

@endsection
