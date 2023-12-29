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
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4" style="color: black;">Bienvenido</h1>
                            </div>
                            @if(session('error'))
                                <h5 class="text-muted">{{ session('error') }}</h5>
                            @endif
                            @if(session('message'))
                                <h5 class="text-muted">{{ session('message') }}</h5>
                            @endif
                            @if(session('login'))
                                <h5 class="text-muted">{{ session('login') }}</h5>
                            @endif
                            <form class="user" method="post" action="{{ route('validar.login') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Ingresa tu correo electronico" name="email">
                                    @error('email')
                                        <h5 class="text-muted">{{ $message }}</h5>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Contraseña" style="margin-top: 15px" name="password">
                                    @error('password')
                                        <h5 class="text-muted">{{ $message }}</h5>
                                    @enderror
                                </div>
                                <input class="btn btn-primary btn-user btn-block" type="submit" value="Iniciar sesion" style="margin-top: 25px;">
                                <hr>
                                <a href="/google-auth/redirect" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Ingresa con Google
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="{{ route('olvido') }}">¿Olvidaste tu contraseña?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="{{ route('registrar') }}">Crea una cuenta</a>
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