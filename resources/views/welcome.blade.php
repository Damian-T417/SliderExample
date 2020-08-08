@extends('templates.base')

@section('content')

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

    <div class="carousel-inner">
      @foreach($images as $image)
      <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
        <img src="{{ asset('storage'.$image->image) }}" class="d-block w-100" alt="{{ $image->title }}">
      </div>
      @endforeach

      
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

@endsection