@extends('front.layout.layout')

@section('content')

    <header class="row tm-welcome-section">
        <h2 class="col-12 text-center tm-section-title">Welcome to Simple House</h2>
        <p class="col-12 text-center">Armorhead catfish grouper bobtail snipe eel mud minnow mudsucker barbel northern squawfish tui chub snubnose parasitic eel. Roundhead mud cat pollyfish: pearleye swallower; candiru jewelfish flagfish inconnu. Pumpkinseed grouper oilfish electric ray. Northern pearleye scat jawfish dogteeth tetra Dolly Varden trout Black scalyfin pineconefish sea snail conger eel icefish redlip blenny masu salmon spearfish</p>
    </header>

    <div class="tm-paging-links">
        <nav>
            <ul>
                <li class="tm-paging-item"><a href="#" class="tm-paging-link active">Pizza</a></li>
                <li class="tm-paging-item"><a href="#" class="tm-paging-link">Salad</a></li>
                <li class="tm-paging-item"><a href="#" class="tm-paging-link">Noodle</a></li>
            </ul>
        </nav>
    </div>

    <!-- Gallery -->
    <div class="row tm-gallery">
        <!-- gallery page 1 -->
        <div id="tm-gallery-page-pizza" class="tm-gallery-page">
            @foreach ($pizzas as $pizza)
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <div class="images"><img src="{{ asset("uploads/$pizza->thumbnail")  }}"  alt="Image" class="img-fluid tm-gallery-img" /></div>

                    <figcaption>
                        <h4 class="tm-gallery-title">{{ $pizza->title }}</h4>
                        <p class="tm-gallery-description">{{ $pizza->description }}</p>
                        <p class="tm-gallery-price">${{ $pizza->price }}</p>
                    </figcaption>
                </figure>
            </article>
            @endforeach


        </div> <!-- gallery page 1 -->

        <!-- gallery page 2 -->
        <div id="tm-gallery-page-salad" class="tm-gallery-page hidden">
            @foreach ($salads as $salad)
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <div class="images">
                    <img src="{{ asset("uploads/$salad->thumbnail")  }}" alt="Image" class="img-fluid tm-gallery-img" />
                </div>
                    <figcaption>
                        <h4 class="tm-gallery-title">{{ $salad->title }}</h4>
                        <p class="tm-gallery-description">{{ $salad->description }}</p>
                        <p class="tm-gallery-price">${{ $salad->price }}</p>
                    </figcaption>
                </figure>
            </article>
            @endforeach


        </div> <!-- gallery page 2 -->

        <!-- gallery page 3 -->
        <div id="tm-gallery-page-noodle" class="tm-gallery-page hidden">
            @foreach ($noodles as $noodle)
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <div class="images">
                        <img src="{{ asset("uploads/$noodle->thumbnail")  }}" alt="Image" class="img-fluid tm-gallery-img" />
                    </div>
                    <figcaption>
                        <h4 class="tm-gallery-title">{{ $noodle->title }}</h4>
                        <p class="tm-gallery-description">{{ $noodle->description }}</p>
                        <p class="tm-gallery-price">${{ $noodle->price }}</p>
                    </figcaption>
                </figure>
            </article>
            @endforeach


        </div> <!-- gallery page 3 -->
    </div>


@endsection
