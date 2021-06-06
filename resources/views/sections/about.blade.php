<!-- About section -->
<div class="about-section">
    <div class="overlay"></div>
    <!-- card section -->
    <div class="card-section">
        <div class="container">
            <div class="row">
                <!-- single card -->
                @foreach ($services3 as $service)
                <div class="col-md-4 col-sm-6">
                    <div class="lab-card">
                        <div class="icon">
                            <i class="{{$service->icone}}"></i>
                        </div>
                        <h2>{{$service->soustitre}}</h2>
                        <p>{{$service->description}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- card section end-->


    <!-- About contant -->
    <div class="about-contant">
        <div class="container">
            
            <div class="section-title">
                    @foreach ($titres as $item)
                        <h2>{{$item->titreDiscover}}</h2>
                    @endforeach
                    @php
                        $titre1 = str_replace('(', '<span>', $titres[0]->titreDiscover);
                        $titre2 = str_replace(')', '</span>', $titre1);
                        echo $titre2;
                    @endphp
            </div>
            

            <div class="row">
                @foreach ($discovers as $item)
                <div class="col-md-6">
                    <p>{{$item->description}}</p>
                </div>
                @endforeach
            </div>
            
            <div class="text-center mt60">
                <a href="" class="site-btn">Browse</a>
            </div>
            <!-- popup video -->
            <div class="intro-video">
                <div class="row">
                    @foreach ($video as $item)
                    <div class="col-md-8 col-md-offset-2">
                        <img src="{{asset('img/' . $item->url)}}" alt="">
                        <a href="{{$item->lien}}" class="video-popup">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About section end -->

