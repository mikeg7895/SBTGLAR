@foreach ($servicios as $servicio)
    @component('_components.descripcion')
        @slot('portafolioModal', 'portfolioModal'.$servicio->id)
        @slot('imagen', asset('storage/images/'.$servicio->imagen))
        @slot('title', $servicio->titulo)
        @slot('description')
            {!! html_entity_decode($servicio->contenido) !!}
        @endslot
        @slot('precio', '$'.$servicio->precio)
    @endcomponent
@endforeach