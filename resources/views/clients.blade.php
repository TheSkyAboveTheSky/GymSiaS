@extends("layouts.master")
<!DOCTYPE html>
    <!-- Coding by CodingLab | www.codinglabweb.com -->
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Coaches</title>

        <!-- Swiper CSS -->
        <link rel="stylesheet" href="{{ URL::asset('css/swiper-bundle.min.css') }}" />

        <!-- CSS -->
        <link rel="stylesheet" href="{{ URL::asset('css/cards.css') }}" />

                                        
    </head>
    <body>
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    @foreach($clients as $client)
                    @if ($client->role_id == 0)
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                        
                            <div class="card-image">
                                <img src="http://127.0.0.1:8000/storage/{{$client->profile_photo_path}}" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">{{$client->name}}</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">Contact The Client</button>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
        
    </body>

    <!-- Swiper JS -->
    <script type="text/javascript" src="{{ URL::asset('js/swiper-bundle.min.js') }}"></script>

    <!-- JavaScript -->
    <script type="text/javascript" src="{{ URL::asset('js/cards.js') }}"></script>
</html>