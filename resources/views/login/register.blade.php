@extends('Layouts.layoutlogin')

@section('content')
    <div class="container" style="margin-top: -145px;">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image" style="background: url('/assets/img/portfolio/3.jpeg'); background-position: center; background-size: cover;"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4" style="color: black;">Crea una cuenta</h1>
                            </div>
                            <form class="user" method="post" action="{{ route('validar.registro') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" aria-describedby="emailHelp" placeholder="Nombre de usuario" name="name">    
                                    @error('name')
                                        <h5 class="text-muted">{{ $message }}</h5>
                                    @enderror                                
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" aria-describedby="emailHelp" placeholder="Correo electronico" style="margin-top: 25px; margin-bottom: 25px;" name="email">
                                    @error('email')
                                        <h5 class="text-muted">{{ $message }}</h5>
                                    @enderror       
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" aria-describedby="emailHelp" placeholder="Contraseña" name="password">
                                        @error('password')
                                        <h5 class="text-muted">{{ $message }}</h5>
                                    @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" aria-describedby="emailHelp" placeholder="Confirmar contraseña" name="password_confirmation">
                                        @error('password_confirmation')
                                        <h5 class="text-muted">{{ $message }}</h5>
                                    @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block" style="margin-top: 25px;">Registrate</button>
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Registrate con Google
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="{{ route('login') }}">¿Ya tienes una cuenta?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection