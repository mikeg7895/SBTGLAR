<div class="col-lg-4 col-md-6 mb-4">
    <div class="card">
      <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
        <img src="{{ $imagen }}" class="img-fluid" />
        <a href="#!">
          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
        </a>
      </div>
      <div class="card-body">
        <h5 class="card-title">{{ $titulo }}</h5>
        <p class="card-text">
          {{ $texto }}
        </p>
        <a href="{{ route("post", ["id" => $id]) }}" class="btn btn-primary">Leer</a><i class="far fa-heart" style="margin-left: 75%;"></i>
      </div>
    </div>
  </div>