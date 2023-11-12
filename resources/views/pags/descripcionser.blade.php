@component('_components.descripcion')
    @slot('portafolioModal', 'portfolioModal1')
    @slot('imagen', asset('assets/img/portfolio/1.jpeg'))
    @slot('title', 'Maquillaje social')
    @slot('description')
    <p>Destaca tu belleza en ocasiones especiales con nuestro maquillaje social. Ideal para invitadas de bodas, graduaciones, cumpleaños y eventos únicos.</p>
    <ul class="list-inline">
        <li><strong>¿Cuánto dura?</strong> Hasta que decidas lavar tu rostro. </li>
        <li><strong>¿Que incluye el maquillaje?</strong> Incluye pestañas postizas de tira, preparación de piel con productos de alta calidad.</li>
        <li><strong>Cuida tu maquillaje evitando tocar tu rostro directamente y actividades físicas intensas.</strong></li>
    </ul>
    <p><strong>El procedimiento toma aproximadamente 1 hora</strong></p>
    @endslot
    @slot('precio', '$110.000')
@endcomponent
@component('_components.descripcion')
    @slot('portafolioModal', 'portfolioModal2')
    @slot('imagen', asset('assets/img/portfolio/2.jpeg'))
    @slot('title', 'Peinados de gala')
    @slot('description')
    <p>Realza tu elegancia con nuestros peinados de gala, diseñados para eventos formales ,Sofisticados y adaptados a tu vestuario y estilo personal. </p>
    <p><strong>Utilizamos productos de alta calidad para garantizar la duración en todo tipo de cabello.</strong></p>
    @endslot
    @slot('precio', '$80.00')
@endcomponent
@component('_components.descripcion')
    @slot('portafolioModal', 'portfolioModal3')
    @slot('imagen', asset('assets/img/portfolio/3.jpeg'))
    @slot('title', 'Peinados infantiles')
    @slot('description')
    <p>Encantadores peinados infantiles para cualquier ocasión: trenzados, encintados, kanekalon y más, incluso peinados para bautizos. </p>
    @endslot
    @slot('precio',)
    Desde los $30.000
    <p><strong>Aprovecha nuestro Combo Escolar: </strong>4 peinados sencillos al mes por $100.000.</p>
    @endslot
@endcomponent
@component('_components.descripcion')
    @slot('portafolioModal', 'portfolioModal4')
    @slot('imagen', asset('assets/img/portfolio/4.jpeg'))
    @slot('title', 'Manicure y pedicure')
    @slot('description')
    <p><strong> Uñas que Reflejan tu Estilo Único </strong></p>
    <p>Nunca subestimes el poder de unas uñas impecables. En SDBTG, cada servicio de manicure y pedicure es una experiencia de cuidado y belleza completa, garantizando uñas limpias y perfectas. Nuestros servicios incluyen desinfección, limpieza, exfoliación, jelly spa, esmaltado e hidratación.</p>
    @endslot
    @slot('precio', 'Sin especificar')
@endcomponent
@component('_components.descripcion')
    @slot('portafolioModal', 'portfolioModal5')
    @slot('imagen', asset('assets/img/portfolio/5.jpeg'))
    @slot('title', 'Alisados y keratinas')
    @slot('description', 'lorem ipsum adf agargaer a gara W G ')
    @slot('precio', 'Sin especificar')
@endcomponent
@component('_components.descripcion')
    @slot('portafolioModal', 'portfolioModal6')
    @slot('imagen', asset('assets/img/portfolio/6.jpeg'))
    @slot('title', 'Terapias capilares')
    @slot('description', 'lorem ipsum adf agargaer a gara W G ')
    @slot('precio', 'Sin especificar')
@endcomponent