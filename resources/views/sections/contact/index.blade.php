<!-- Page header -->
<div class="page-top-section">
    <div class="overlay"></div>
    <div class="container text-right">
        <div class="page-info">
            <h2>Contact</h2>
            <div class="page-links">
                <a href="{{route('home')}}">Home</a>
                <span>Contact</span>
            </div>
        </div>
    </div>
</div>
<!-- Page header end -->

<!-- Google map -->
<div class="map" id="map-area" pos="{{$contacts[0]->position}}"></div>

