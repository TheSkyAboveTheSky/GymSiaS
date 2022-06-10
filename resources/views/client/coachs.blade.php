@extends('adminlte::page')
@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/swiper-bundle.min.css') }}" />

<!-- CSS -->
<link rel="stylesheet" href="{{ URL::asset('css/cards.css') }}" />
@endsection
@section('content')

<div class="slide-container swiper">
    <div class="slide-content">
        <div class="card-wrapper swiper-wrapper">
            @foreach($coachs as $coach)
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="http://127.0.0.1:8000/storage/{{$coach->profile_photo_path}}" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">{{$coach->name}}</h2>
                    <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                    <button class="button">Contact The coach</button>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="swiper-button-next swiper-navBtn"></div>
    <div class="swiper-button-prev swiper-navBtn"></div>
    <div class="swiper-pagination"></div>
</div>


@endsection
@section('js')

<!-- Swiper JS -->
<script type="text/javascript" src="{{ URL::asset('js/swiper-bundle.min.js') }}"></script>

<!-- JavaScript -->
<script type="text/javascript" src="{{ URL::asset('js/cards.js') }}"></script>
@endsection