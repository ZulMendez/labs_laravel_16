<!-- Promotion section -->
<div class="promotion-section">
    <div class="container">
        <div class="row">
            @foreach ($readies as $item)
            <div class="col-md-9">
                <h2>{{$item->titre}}</h2>
                <p>{{$item->texte}}</p>
            </div>
            @endforeach
            <div class="col-md-3">
                <div class="promo-btn-area">
                    <a href="{{route('contact')}}#contact" class="site-btn btn-2">Browse</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Promotion section end-->