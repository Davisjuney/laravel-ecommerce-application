@extends('site.app')
@section('title', 'Homepage')

@section('header')
@endsection
@section('hero')
{{--
<div class="hero-image">
    @include('site.partials.header')
    <div class="hero-text">
        <h1>Ecommerce Life is good!</h1>
        <p>Amazing products</p>
        <button class="btn btn-rounded btn-primary">Shop Now</button>
    </div>
</div> 
--}}
<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        @include('site.partials.header') 
        <img src="/frontend/images/banners/slide1.jpg" class="d-block w-100" style="height: 35rem; object-fit:cover;" alt="..."> 
        <div class="carousel-caption d-none d-md-block">
          <h2>Fashion Tips</h2>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        @include('site.partials.header') 
        <img src="/frontend/images/banners/slide2.jpg" class="d-block w-100" style="height: 35rem; object-fit:cover;" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2>Be What You Wear</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        @include('site.partials.header') 
        <img src="/frontend/images/banners/slide3.jpg" class="d-block w-100" style="height: 35rem; object-fit:cover;" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2>Buy Amazing Stuff At Affordable Price </h2>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    {{--
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    --}}
  </div>
@include('site.partials.nav')
@endsection
@section('content')
@stop
