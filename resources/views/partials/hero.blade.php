<!-- Intro Section -->
<div class="hero-section">
    <div class="hero-content">
        <div class="hero-center">
            <img src="{{$logo}}"  alt="{{ config('app_name') }}">
            <p id="cartext">
                @foreach ($carousel as $car)
                    @if ($car->principal == 1)
                        {{ $car->titreIntro }}
                    @endif
                @endforeach
            </p>
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