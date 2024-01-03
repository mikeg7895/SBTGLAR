<style>
    ul {
        list-style-type: none;
    }
</style>

<div class="portfolio-modal modal fade" id="{{ $portafolioModal }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('assets/img/close-icon.svg') }}" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">{{ $title }}</h2>
                            <img class="img-fluid d-block mx-auto" src="{{ $imagen }}" alt="..." />
                            {{ $description }}
                            <ul class="list-inline">
                                <li>
                                    <strong>Precio:</strong>
                                    {{ $precio }}
                                </li>
                            </ul>
                            <button class="btn btn-primary" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-xmark me-1"></i>
                                Cerrar ventana
                            </button>
                            <button class="btn btn-primary">Agendar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>