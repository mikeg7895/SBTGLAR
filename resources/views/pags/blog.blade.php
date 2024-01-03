@extends('Layouts.layout')

@section('active', 'active')
@section('content')
<header class="masthead">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Bienvenido a nuestro blog</h1>
            <p class="lead mb-0">Aca encontraras publicaciones de tu interes</p>
        </div>
    </div>
</header>
<main class="my-5">
    <div class="container">
      <!--Section: Content-->
      @auth
      <h4 class="mb-5"><strong>Bienvenido {{ auth()->user()->name }}</strong></h4>
      @if(auth()->user()->name == 'SBTG')
        <!-- publicar -->
        <div class="portfolio-item" style="margin-bottom: 3%">
          <a class="portfolio-link" data-bs-toggle="modal" href="#publicar">
              <div class="portfolio-hover">
                  <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
              </div>
          </a>
        </div>
      @endif
      @endauth
        <div class="row">
          @forelse ($publicaciones as $publicacion)
            @component('_components.targetpost')
              @if($publicacion->imagen == null)
                @slot('imagen', 'https://mdbootstrap.com/img/new/standard/nature/184.jpg')
              @else
                @slot('imagen', asset("storage/images/".$publicacion->imagen))
              @endif
              @slot('titulo', $publicacion->titulo)
              @slot('texto', $publicacion->subdescripcion)
              @slot('id', $publicacion->id)
            @endcomponent
          @empty
          <h1>No hay publicaciones</h1>
          @endforelse
        </div>

        <div class="row">
        
        </div>
      <!--Section: Content-->

      <div class="portfolio-modal modal fade" id="publicar" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('assets/img/close-icon.svg') }}" alt="Close modal" /></div>
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-lg-8">
                          <div class="modal-body">
                            <div class="container mt-5">
                              <form id="editorForm" method="POST" action="{{ route("publicar") }}" enctype="multipart/form-data">
                                @csrf
                                  <div class="form-group">
                                      <label for="title">Titulo</label>
                                      <input type="text" class="form-control" id="title" name="title" required>
                                      <input type="file" class="form-control" name="image" placeholder="Cargar imagen" style="margin-top: 3%"> 
                                  </div>
                                  <div class="form-group">
                                      <label for="content">Contenido</label>
                                      <textarea class="form-control" id="subcontent" name="subcontent" placeholder="Subcontenido"></textarea>
                                      <textarea class="form-control" id="content" name="content" rows="10"></textarea>
                                  </div>
                                  <button type="submit" class="btn btn-primary">Publicar</button>
                              </form>
                            </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      </div>

      <!-- Pagination -->
      <nav class="my-4" aria-label="...">
        <ul class="pagination pagination-circle justify-content-center">
          <li class="page-item">
            <a class="page-link {{ $pag==1 ? 'disabled' : '' }}" href="{{ route('blog', ['pag'=>$pag-1]) }}" tabindex="-1" aria-disabled="true"><<</a>
          </li>
          @for($i=1; $i<=$numero; $i++)
            <li class="page-item {{ $i==$pag ? 'active' : '' }} "><a class="page-link" href="{{ route('blog', ['pag'=>$i]) }}">{{$i}} <span class="sr-only">(current)</span></a></li>
          @endfor
          <li class="page-item">
            <a class="page-link {{ $pag==$numero ? 'disabled' : '' }}" href="{{ route('blog', ['pag'=>$pag+1]) }}">>>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </main>

  <script>
    ClassicEditor.create( document.querySelector( '#content' ) )
                  .catch( error => {
                      console.error( error );
                  } );
  </script>

@endsection