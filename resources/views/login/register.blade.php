@extends('Layouts.layoutlogin')

@section('content')
    <div class="container" style="margin-top: -145px;">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image" style="background: url('/public/assets/img/portfolio/3.jpeg'); background-position: center; background-size: cover;"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4" style="color: black;">Crea una cuenta</h1>
                            </div>
                            <form class="user" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        {{form.nombre}}
                                    </div>
                                    <div class="col-sm-6">
                                        {{form.nick}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {{form.email}}
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        {{form.password}}
                                    </div>
                                    <div class="col-sm-6">
                                        {{form.confirm_password}}
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
                                <a class="small" href="{% url 'applications.blog:login' %}">¿Ya tienes una cuenta?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection