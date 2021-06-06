<!-- Intro Section -->
<div class="hero-section">
    <div class="hero-content">
        <div class="hero-center">
            @foreach ($logo as $item)
                <img src="{{asset('img/' . $item->logo)}}" alt="">
                <p>{{$item->titreIntro}}</p>
            @endforeach
        </div>
    </div>
    
    <!-- slider -->
    <div id="hero-slider" class="owl-carousel">
        @foreach ($carousel as $item)
        <div class="item  hero-item" data-bg="{{$item->img}}"></div>
        {{-- <div class="item  hero-item" data-bg="img/02.jpg"></div> --}}
        @endforeach
    </div>
</div>
<!-- Intro Section -->