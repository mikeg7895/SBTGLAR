<div class="portfolio-item">
    <a class="portfolio-link" data-bs-toggle="modal" href="{{ $portafolio }}">
        <div class="portfolio-hover">
            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
        </div>
        <img class="img-fluid" src="{{ $imagen }}" alt="..." />
    </a>
    <div class="portfolio-caption">
        <div class="portfolio-caption-heading">{{ $titulo }}</div>
        <div class="portfolio-caption-subheading text-muted">{{ $subtitulo }}</div>
    </div>
</div>