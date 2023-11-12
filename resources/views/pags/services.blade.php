<section class="page-section bg-light" id="portfolio">
    <div class="container">
      <div class="text-center">
        <h2 class="section-heading text-uppercase">Servicios</h2>
        <h3 class="section-subheading text-muted">Amplia gama de servicios y diseños</h3>
      </div>
      <div class="row">
        <div class="col-lg-4 col-sm-6 mb-4">
          <!-- Portfolio item 1-->
          @component('_components.service')
            @slot('portafolio', '#portfolioModal1')
            @slot('imagen', asset('assets/img/portfolio/1.jpeg'))
            @slot('titulo', 'Maquillaje social')
            @slot('subtitulo', 'Belleza')
          @endcomponent
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <!-- Portfolio item 2-->
          @component('_components.service')
          @slot('portafolio', '#portfolioModal2')
            @slot('imagen', asset('assets/img/portfolio/2.jpeg'))
            @slot('titulo', 'Peinados de gala')
            @slot('subtitulo', 'Estilo')
          @endcomponent
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <!-- Portfolio item 3-->
          @component('_components.service')
          @slot('portafolio', '#portfolioModal3')
            @slot('imagen', asset('assets/img/portfolio/3.jpeg'))
            @slot('titulo', 'Peinados infantiles')
            @slot('subtitulo', 'Infantil')
          @endcomponent
        </div>
        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
          <!-- Portfolio item 4-->
          @component('_components.service')
          @slot('portafolio', '#portfolioModal4')
            @slot('imagen', asset('assets/img/portfolio/4.jpeg'))
            @slot('titulo', 'Manicure y pedicure')
            @slot('subtitulo', 'Consejos y ciudados')
          @endcomponent
        </div>
        <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
          <!-- Portfolio item 5-->
          @component('_components.service')
          @slot('portafolio', '#portfolioModal5')
            @slot('imagen', asset('assets/img/portfolio/5.jpeg'))
            @slot('titulo', 'Alisados y keratinas')
            @slot('subtitulo', 'Cuidado del cabello')
          @endcomponent
        </div>
        <div class="col-lg-4 col-sm-6">
          <!-- Portfolio item 6-->
          @component('_components.service')
          @slot('portafolio', '#portfolioModal6')
            @slot('imagen', asset('assets/img/portfolio/6.jpeg'))
            @slot('titulo', 'Terapias capilares')
            @slot('subtitulo', 'Tratamientos')
          @endcomponent
        </div>
      </div>
    </div>
</section>
