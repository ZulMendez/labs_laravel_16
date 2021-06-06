<!-- Page header -->
<div class="page-top-section">
    <div class="overlay"></div>
    <div class="container text-right">
        <div class="page-info">
            <h2>Blog</h2>
            <div class="page-links">
                <a href="#">Home</a>
                <span>Blog</span>
            </div>
        </div>
    </div>
</div>
<!-- Page header end-->

<!-- page section -->
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                @foreach ($posts as $post)
                <!-- Post item -->
                <div class="post-item">
                    <div class="post-thumbnail">
                        <img src="{{asset('img/' . $post->image)}}" alt="">
                        <div class="post-date">
                            <h2>03</h2>
                            <h3>Nov 2017</h3>
                        </div>
                    </div>
                    <div class="post-content">
                        <h2 class="post-title">{{$post->titre}}</h2>
                        <div class="post-meta">
                            <a href="">{{$post->categorie->nom}}</a>
                                @if (count($post->tags) <= 0)
                                    <span class="text-secondary">
                                        0 tags pour cet article. 
                                    </span>
                                @else
                                    @foreach ($post->tags as $tag)
                                        <a href="">
                                            <span class="text-primary">{{$tag->nom}}</span> 
                                        </a>
                                    @endforeach
                                @endif
                            <a href="">2 Comments</a>
                        </div>
                        <p>{{$post->description}}</p>
                        <a href={{route('blog-post')}} class="read-more">Read More</a>
                    </div>
                </div>
            @endforeach

            <div class="text-center">
                {{$posts->links('vendor.pagination.simple-default')}}
            </div>

                <!-- Pagination -->
                <div class="page-pagination">
                    <a class="active" href="">01.</a>
                    <a href="">02.</a>
                    <a href="">03.</a>
                </div>
            </div>
            <!-- Sidebar area -->
            <div class="col-md-4 col-sm-5 sidebar">
                <!-- Single widget -->
                <div class="widget-item">
                    <form action="#" class="search-form">
                        <input type="text" placeholder="Search">
                        <button class="search-btn"><i class="flaticon-026-search"></i></button>
                    </form>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Categories</h2>
                    <ul>
                        @foreach ($categories as $item)
                            <li><a href="#">{{$item->nom}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Tags</h2>
                    <ul class="tag">
                        @foreach ($tags as $tag)
                        <li><a href="">{{$tag->nom}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page section end-->



