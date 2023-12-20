<div>
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center" style="margin-bottom: 5%">
                <h2 class="section-heading text-uppercase">Reseñas de nuestros clientes</h2>
                <a class="btn btn-primary portfolio-link"  data-bs-toggle="modal" href="#reseña">Dejanos la tuya aca</a>
            </div>
            <div class="row">
                    <div class="team-member">
                        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              @forelse ($reseñas as $reseña)
                                <div class="carousel-item active">
                                  <img class="mx-auto rounded-circle" src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp" alt="..." />
                                  <h4>{{ $reseña->user->name }}</h4>
                                  <p class="text-muted">{{ $reseña->reseña }}</p>
                                </div>
                              @empty
                                <div class="carousel-item active">
                                  <p class="text-muted">Aun no hay reseñas</p>
                                </div>
                              @endforelse
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>  
                    </div>
            </div>
           
        </div>
    </section>
    <div class="portfolio-modal modal fade" id="reseña" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Escribe tu reseña</h2>

                                <textarea class="form-control" id="content" name="content" rows="10" wire:model="resena" required></textarea>
                                
                                <button class="btn btn-primary text-uppercase" data-bs-dismiss="modal" type="button" style="margin-top: 5px" wire:click="store">
                                    Guardar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
