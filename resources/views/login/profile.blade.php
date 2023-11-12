@extends('Layouts.layoutlogin')

@section('content')
<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-white" style="background-color: var(--bs-link-color);"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
              <h5 style="color: black">{{ auth()->user()->name }}</h5>
              <p style="color: black">Usuario</p>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6 class="text-left" style="color: black">Informacion</h6>
                <hr class="mt-0 mb-4" style="color: black">
                <div class="row pt-1">
                  <div class="mb-3">
                    <h6 style="color: black">Correo</h6>
                    <p class="text-muted">{{ auth()->user()->email }}</p>
                  </div>
                </div>
                <form method="post" action="{{ route('logout') }}">
                  @csrf
                  <button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit" style="padding: 0.25rem 1.5rem; margin-bottom: -55px">Salir</button></div>
                </form>  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection