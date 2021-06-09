<!-- Page header -->
<div class="page-top-section">
    <div class="overlay"></div>
    <div class="container text-right">
        <div class="page-info">
            <h2>Services</h2>
            <div class="page-links">
                <a href="#">Home</a>
                <span>Services</span>
            </div>
        </div>
    </div>
</div>
<!-- Page header end-->

<!-- services section -->
<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
            <h2>
                @php
                    $titre1 = str_replace('(', '<span>', $titreService->titre);
                    $titre2 = str_replace(')', '</span>', $titre1);
                    echo $titre2;
                @endphp
            </h2>
        </div>
        <div class="row">
            <!-- single service -->
            @foreach ($services as $service)
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
            {{$services->links('vendor.pagination.simple-default')}}
        </div>
    </div>
</div>
<!-- services section end -->


<!-- features section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>
                @php
                    $titre1 = str_replace('(', '<span>', $titreDiscover->titre);
                    $titre2 = str_replace(')', '</span>', $titre1);
                    echo $titre2;
                @endphp
            </h2>
        </div>
        <div class="row">
            <!-- feature item -->
            <div class="col-md-4 col-sm-4 features">
                @foreach ($features as $item)
                <div class="icon-box light left">
                    <div class="service-text">
                        <h2>{{$item->soustitre}}</h2>
                        <p>{{$item->description}}</p>
                    </div>
                    <div class="icon">
                        <i class="{{$item->icone}}"></i>
                    </div>
                </div>
            @endforeach
            </div>
            <!-- Devices -->
            <div class="col-md-4 col-sm-4 devices">
                <div class="text-center">
                    <img src="img/device.png" alt="">
                </div>
            </div>
            <!-- feature item -->
            <div class="col-md-4 col-sm-4 features">
                @foreach ($features as $item)
                    <div class="icon-box light">
                        <div class="icon">
                            <i class="{{$item->icone}}"></i>
                        </div>
                        <div class="service-text">
                            <h2>{{$item->soustitre}}</h2>
                            <p>{{$item->description}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="text-center mt100">
            <a href="" class="site-btn">Browse</a>
        </div>
    </div>
</div>
<!-- features section end-->

<!-- services card section-->
<div class="services-card-section spad">
    <div class="container">
        <div class="row">
            <!-- Single Card -->
            @foreach ($articles as $article)
            <div class="col-md-4 col-sm-6">
                <div class="sv-card">
                    <div class="card-img">
                        <img src="{{asset('img/' . $article->image)}}" alt="">
                    </div>
                    <div class="card-text">
                        <h2>{{$article->titre}}</h2>
                        <p>{{$article->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- services card section end-->
