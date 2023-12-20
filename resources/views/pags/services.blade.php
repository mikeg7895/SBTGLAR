<section class="page-section bg-light" id="portfolio">
    <div class="container">
      <div class="text-center">
        <h2 class="section-heading text-uppercase">Servicios</h2>
        <h3 class="section-subheading text-muted">Amplia gama de servicios y diseños</h3>
        <a class="btn btn-primary portfolio-link"  data-bs-toggle="modal" href="#agendar" style="margin-bottom: 10px">Agenda aqui</a>
        @auth
         @if(auth()->user()->name == 'Maykoll')
         <a class="btn btn-primary portfolio-link"  data-bs-toggle="modal" href="#crear" style="margin-bottom: 10px">Agrega un nuevo servicio</a>
         @endif   
        @endauth
      </div>
      <div class="row">
        @forelse ($servicios as $servicio)
          <div class="col-lg-4 col-sm-6 mb-4">
            <!-- Portfolio item 1-->
            @component('_components.service')
              @slot('portafolio', '#portfolioModal'.$servicio->id)
              @slot('imagen', asset('assets/img/portfolio/'.$servicio->imagen))
              @slot('titulo', $servicio->titulo)
              @slot('subtitulo', $servicio->subtitulo)
            @endcomponent
          </div>
        @empty
          <div class="col-lg-4 col-sm-6 mb-4">
            <p class="text-muted">No hay servicios</p>
          </div>
        @endforelse
      </div>
    </div>
</section>

<div class="portfolio-modal modal fade" id="agendar" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('assets/img/close-icon.svg') }}" alt="Close modal" /></div>
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-8">
                      <div class="modal-body">
                                           
                     </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<div class="portfolio-modal modal fade" id="crear" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('assets/img/close-icon.svg') }}" alt="Close modal" /></div>
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-8">
                      <div class="modal-body">
                        <div class="container mt-5">
                          <h4>Crear servicio</h4>
                          <form id="editorForm" method="POST" action="{{ route('validar.service') }}" enctype="multipart/form-data">
                            @csrf
                              <div class="form-group">
                                  <input type="text" class="form-control" id="title" name="titulo" placeholder="Titulo" required>
                                  <input type="text" class="form-control" name="subtitulo" placeholder="Subtitulo">
                                  <input type="file" class="form-control" name="imagen" placeholder="Cargar imagen" style="margin-top: 3%"> 
                              </div>
                              <div class="form-group">
                                  <label for="content">Descripcion</label>
                                  <textarea class="form-control" id="content" name="contenido" rows="10"></textarea>
                                  <input type="number" class="form-control" name="precio" placeholder="Precio">
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

