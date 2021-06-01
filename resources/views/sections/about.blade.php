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
                        <h2>{{$service->titre}}</h2>
                        <p>{{$service->texte}}</p>
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
            @foreach ($discovers as $item)
                
            <div class="section-title">
                <h2>{{$item->titre}}</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p>{{$item->description}}</p>
                </div>
                <div class="col-md-6">
                    <p>{{$item->description}}</p>
                </div>
            </div>
            @endforeach
            <div class="text-center mt60">
                <a href="" class="site-btn">Browse</a>
            </div>
            <!-- popup video -->
            <div class="intro-video">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <img src="img/video.jpg" alt="">
                        <a href="https://www.youtube.com/watch?v=JgHfx2v9zOU" class="video-popup">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About section end -->

