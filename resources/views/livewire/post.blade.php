<div>
    <section class="mb-5" style="margin-top: -285px">
        <div class="card bg-light">
            <div class="card-body">
                <!-- Comment form-->
                <p>{{ $feedback }}</p>
                <div class="mb-4">
                    <textarea class="form-control" rows="3" placeholder="Deja un comentario" wire:model="coment"></textarea>
                    <button class="btn btn-primary mt-1" wire:click='store'>Comentar</button>
                </div>
                @forelse ($comentarios as $comentario)
                    @component('_components.comentario')
                        @slot('usuario', $comentario->name)
                        @slot('comentario', $comentario->pivot->comentario)
                    @endcomponent
                @empty
                    <p>No hay comentarios</p>
                @endforelse
            </div>
        </div>
    </section>
</div>
