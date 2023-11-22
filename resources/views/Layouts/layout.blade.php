<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SBTG</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico')}}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css')}}" rel="stylesheet" />
    @livewireStyles
  </head>
  <body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> 
          <i class="fas fa-bars"></i>
        </button>
        <div class="d-flex d-lg-none">
          <button class="btn btn-dark btn-social mx-2" data-bs-toggle="collapse" data-bs-target="#campoBusqueda1" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"  >
            <i class="fas fa-search"></i>
          </button>
        </div>
        <div class="text-center mx-auto">
          <a class="navbar-brand" href="#page-top" style="margin-left: 18%"><img src="{{asset('imagenes/LOGO-CORPO-2023-SEPTIEMBRE.png')}}" alt="..."/></a>
        </div>
        <div class="d-flex d-lg-none">
          <a class="btn btn-dark btn-social mx-2" href="{{ route('profile') }}" aria-label="login"><i class="fas fa-user"></i></a>
          <a class="btn btn-dark btn-social mx-2" aria-label="tienda" href="#"><i class="fas fa-shopping-bag"></i></a>
        </div>

        <div class="collapse navbar-collapse" id="campoBusqueda1">
          <ul  class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
            <li class="nav-item d-lg-none"><input type="text" id="campo" class="form-control" placeholder="Buscar"></li>
          </ul>
        </div>
        
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
            <li class="nav-item"><a class="nav-link" href="/#page-top">Inicio</a></li>
            <li class="nav-item"><a class="nav-link" href="/#portfolio">Servicios</a></li>
            <li class="nav-item"><a class="nav-link" href="/#about">Sobre nosotros</a></li>
            <li class="nav-item"><a class="nav-link" href="/#contact">Contacto</a></li>
            <li class="nav-item"><a class="nav-link @yield('active')" href="{{ route('blog', ['pag'=>1]) }}">Blog</a></li>
            <li class="nav-item d-flex justify-content-end d-none d-lg-flex">
              <a class="btn btn-dark btn-social mx-2" href="{{ route('profile') }}" aria-label="login"><i class="fas fa-user"></i></a>
              <a class="btn btn-dark btn-social mx-2" aria-label="tienda" href="#"><i class="fas fa-shopping-bag"></i></a>
              <a class="btn btn-dark btn-social mx-2" onclick="toggleBusqueda()">
                <i class="fas fa-search"></i>
              </a>
              <input type="text" id="campoBusqueda" class="form-control d-none" placeholder="Buscar">
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
     <!-- Bootstrap core JS-->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
     <!-- Core theme JS-->
     <script src="{{asset('js/scripts.js')}}"></script>
     <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
     <!-- * *                               SB Forms JS                               * *-->
     <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
     <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
     <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
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
    @livewireScripts
  </body>
</html>
