
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SBTG</title>
    
    <link rel="icon" type="image/x-icon" href="{% static 'assets/favicon.ico' %}" />

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
   
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
 
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
                    </a>
                </li>
            </ul>
        </div>
      </div>
    </nav>
    @yield('content')
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
     
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
     
     <script src="{{asset('js/scripts.js')}}"></script>

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