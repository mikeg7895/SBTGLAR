@extends('Layouts.layoutlogin')

@section('content')
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-2" style="color: black">¿Olvidaste tu contraseña?</h1>
                                    <p class="mb-4" style="color: black">
                                        Solo ingresa tu correo y te enviaremos un link para recuperarla</p>
                                </div>
                                <form class="user" action="{{route('send')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Ingresa el correo electronico" name="email">
                                    </div>
                                    <a href="login.html" class="btn btn-primary btn-user btn-block" style="margin-top: 25px;">
                                        Recuperar contraseña
                                    </a>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="{{ route('registrar' )}}">Crear nueva cuenta</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="{{ route('login') }}">Iniciar sesion</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

@endsection