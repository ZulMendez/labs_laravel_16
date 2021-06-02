<!-- Intro Section -->
<div class="hero-section">
    <div class="hero-content">
        <div class="hero-center">
            <img src="img/big-logo.png" alt="">
            @foreach ($carousel as $item)
            <p>{{$item->titre}}</p>
        </div>
    </div>
    
    <!-- slider -->
    <div id="hero-slider" class="owl-carousel">
        <div class="item  hero-item" data-bg="{{asset('img/' . $item->img)}}"></div>
        {{-- <div class="item  hero-item" data-bg="img/02.jpg"></div> --}}
    </div>
    @endforeach
</div>
<!-- Intro Section -->