@extends('layout.layout')

@section('title','Slider Assignment')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">

    <div class="carousel-inner">
        @foreach($contents as $key => $content)
            <div class="carousel-item @if($key === 0) active @endif">
                <div class="carousel-caption" style="color: #1b1e21!important;">
                    <div class="float-left" style="text-align: left!important;">
                        <div class="h3 font-weight-bold">{{ $content['name'] }}</div>
                        <div >{{ $content['description'] }}</div>
                    </div>
                </div>
                <img class="d-block text-center mh-100" alt="Image"
                     src="https://demo.innosabi.com/api/v4/media/{{ $content['image'] }}/thumbnail/strategy/crop">
            </div>
        @endforeach
    </div>
    <a style="color: #1b1e21!important;" class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
@endsection
<style>
    img {
        background-position: center center;
        background-repeat: no-repeat;
        background-size: contain;
        width: 100vw;
        height: 100vh;
    }
    .carousel-caption {
        top: 0;
        bottom: auto;
    }
    .carousel-control-next,
    .carousel-control-prev {
        filter: invert(100%);
    }
</style>
