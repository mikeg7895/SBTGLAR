<div>
    <h1>Agendar</h1>
    <form wire:submit.prevent="store">
        <div class="form-group">
            <label for="serviceName">Seleccione el servicio:</label>
            <select class="form-select" aria-label="Default select example" wire:model="titulo">
                <option selected>Oprima para abrir el menu</option>
                @forelse($services as $service)
                    <option value="{{ $service->id }}">{{ $service->titulo }}</option>
                @empty
                    <option disabled>No hay servicios</option>
                @endforelse
              </select>
        </div>
        <div class="form-group">
            <label for="serviceDate">Fecha del Servicio:</label>
            <input type="date" class="form-control" id="serviceDate" min="{{ date('Y-m-d') }}" wire:model="fecha" required>
        </div>
        <div class="form-group">
            <label for="customerName">Nombre del Cliente:</label>
            <input type="text" class="form-control" id="customerName" placeholder="Ingrese su nombre" wire:model="nombre" required>
        </div>
        <div class="form-group">
            <label for="contactNumber">Número de Contacto:</label>
            <input type="tel" class="form-control" id="contactNumber" placeholder="Ingrese su número de contacto" wire:model="contacto" required>
        </div>
        <button type="submit" class="btn btn-primary">Reservar Servicio</button>
    </form>
</div>
