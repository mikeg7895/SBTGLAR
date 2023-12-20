
<div>
    <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <title>SBTG</title>
      <!-- Favicon-->
      <link rel="icon" type="image/x-icon" href="{% static 'assets/favicon.ico' %}" />
      <!-- Font Awesome icons (free version)-->
      <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
      <!-- Google fonts-->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
      <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
      <!-- Core theme CSS (includes Bootstrap)-->
      <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
      @livewireStyles
    </head>
    <body id="page-top">
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
          <a class="navbar-brand" href="{{ route('inicio') }}"><img src="{{asset('imagenes/LOGO-CORPO-2023-SEPTIEMBRE.png')}}" alt="..."/></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              Menu
              <i class="fas fa-bars ms-1"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                  <li class="nav-item"><a class="nav-link" href="{{ route('inicio') }}">Volver a inicio</a></li>
                  <li class="nav-item d-flex justify-content-end">
                    <a class="btn btn-dark btn-social mx-2" href="{{ route('profile') }}" aria-label="login"><i class="fas fa-user"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="{{ route("carrito") }}" aria-label="cart">
                      <i class="fas fa-shopping-cart"></i>
                          @if($count > 0)
                              <span class="badge badge-danger">{{ $count }}</span>
                          @endif
                      </a>
                  </li>
              </ul>
          </div>
        </div>
      </nav>
      
      <header class="masthead">
          <div class="container">
          <div class="masthead-subheading">Bienvenidos a nuestr tienda</div>
          <div class="masthead-heading text-uppercase">Es un placer tenerte aqui</div>
          </div>
      </header>
      <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
                  @auth
                  <h4 class="mb-5"><strong>Bienvenido {{ auth()->user()->name }}</strong></h4>
                  @if(auth()->user()->name == 'Maykoll')
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
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @forelse($productos as $producto)
                  <div class="col mb-5"><a href="{{route('detail', ['id'=>$producto->id])}}" style="text-decoration: none; color: inherit">
                      <div class="card h-100">
                          <!-- Product image-->
                          <img class="card-img-top" src="{{asset('storage/images/'.$producto->imagen)}}" alt="..." />
                          <!-- Product details-->
                          <div class="card-body p-4">
                              <div class="text-center">
                                  <!-- Product name-->
                                  <h5 class="fw-bolder">{{$producto->name}}</h5>
                                  
                                  <!-- Product price-->
                                 ${{$producto->precio}}
                              </div>
                          </div>
                          </a>
                          <!-- Product actions-->
                          @if($producto->users->find($user->id))
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent" disabled>
                              <div class="text-center"><button class="btn btn-outline-dark mt-auto" disabled>Producto en el carrito</button></div>
                            </div>
                          @else
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><button class="btn btn-outline-dark mt-auto" wire:click="store({{$producto->id}})">Añadir al carrito</button></div>
                            </div>
                          @endif
                      </div>
                  </div>
                @empty
                      <p class="text-muted">No hay productos aun</p>
                @endforelse
            </div>
        </div>
    </section>

      
      <div class="portfolio-modal modal fade" id="publicar" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog">
          <div class="modal-content">
              <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('assets/img/close-icon.svg') }}" alt="Close modal" /></div>
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-lg-8">
                          <div class="modal-body">
                              <div class="container mt-5">
                              <form id="editorForm" method="POST" action="{{ route('save.prod') }}" enctype="multipart/form-data">
                                  @csrf
                                  <div class="form-group">
                                      <label for="title">Nombre del producto</label>
                                      <input type="text" class="form-control" id="title" name="name" required>
                                      <input type="file" class="form-control" name="image" placeholder="Cargar imagen" style="margin-top: 3%"> 
                                  </div>
                                  <div class="form-group">
                                      <label for="content">Descripcion del producto</label>
                                      <textarea class="form-control" id="content" name="content" rows="10" required></textarea>
                                  </div>
                                  <div class="form-group">
                                      <label for="content">Precio</label>
                                      <input class="form-control" type="text" name="precio">
                                  </div>
                                  <button type="submit" class="btn btn-primary" style="margin-top: 20px">Publicar</button>
                              </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      </div>
      <footer class="footer py-4">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2023</div>
            <div class="col-lg-4 my-3 my-lg-0">
              <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-whatsapp"></i></a>
              <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="col-lg-4 text-lg-end">
              <a class="link-dark text-decoration-none me-3" href="#!">correo@example.com</a>
            </div>
          </div>
        </div>
      </footer>
      <!-- Bootstrap core JS-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
      <!-- Core theme JS-->
      <script src="{{asset('js/scripts.js')}}"></script>
      <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
      <!-- * *                               SB Forms JS                               * *-->
      <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
      <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
      <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
      @livewireScripts
      <script>
        function toggleBusqueda() {
          const campoBusqueda = document.getElementById("campoBusqueda");
          const iconoBusqueda = document.getElementById("iconoBusqueda");

          if (campoBusqueda.classList.contains("d-none")) {
            campoBusqueda.classList.remove("d-none");
            iconoBusqueda.classList.remove("fas", "fa-search");
            iconoBusqueda.classList.add("fas", "fa-times");
          } else {
            campoBusqueda.classList.add("d-none");
            iconoBusqueda.classList.remove("fas", "fa-times");
            iconoBusqueda.classList.add("fas", "fa-search");
          }
        }
      </script>
    </body>
  </html>
    
      

</div>
