@extends('Layouts.layout')

@section('content')
    
<header class="masthead">
    <div class="container">
      <div class="masthead-subheading">Bienvenidos a SBTG</div>
      <div class="masthead-heading text-uppercase">Es un placer tenerte aqui</div>
      <a class="btn btn-primary btn-xl text-uppercase" href="#portfolio">Servicios</a>
    </div>
</header>
@include('pags.services')
@include('pags.about')
@include('pags.reseñas')
@include('pags.contact')
@include('pags.descripcionser')

@endsection