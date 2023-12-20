@extends('Layouts.layout')

@section('content')
<header class="masthead" 
    @if($post->imagen == null)
        style="background-image: url(https://mdbootstrap.com/img/new/standard/nature/184.jpg)"
    @else
        style="background-image: url({{ asset("storage/images/".$post->imagen) }})"
    @endif>
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">{{ $post->titulo }}</h1>
            <p class="lead mb-0">{{ $post->subdescripcion }}</p>
        </div>
    </div>
</header>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <!-- Post content-->
            <article>
                <!-- Post header-->
                <header class="mb-4">
                    <!-- Post title-->
                    <h1 class="fw-bolder mb-1">Welcome to Blog Post!</h1>
                    <i class="far fa-heart"></i> Like <!-- Cambiar a fas fa_hear al dar like-->
                    <!-- Post meta content-->
                    <div class="text-muted fst-italic mb-2">{{ $post->created_at }}</div>
                </header>
                <!-- Post content-->
                <section class="mb-5">
                    <p class="fs-5 mb-4">{!! html_entity_decode($post->descripcion) !!}</p>
                </section>
            </article>
            <!-- Comments section-->

            <livewire:post :id="$post->id" />
            
        </div>
    </div>
</div>
@endsection