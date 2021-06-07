<!-- Services section -->
<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
            @foreach ($titres as $item)
                {{-- <h2>{{$item->titreService}}</h2> --}}
            @endforeach
        </div>
        <div class="row">
            @foreach ($services9 as $service)
            <!-- single service -->
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <div class="icon">
                        <i class="{{$service->icone}}"></i>
                    </div>
                    <div class="service-text">
                        <h2>{{$service->soustitre}}</h2>
                        <p>{{$service->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center">
            <a href="" class="site-btn">Browse</a>
        </div>
    </div>
</div>
<!-- services section end -->