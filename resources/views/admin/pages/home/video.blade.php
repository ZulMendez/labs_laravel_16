<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 bg-white border-b border-gray-200 block">
                    <div class="text-center bg-gray-100 py-4 shadow-md w-6/12 mx-auto rounded-lg">
                        <h1 class="text-center text-gray-600 text-4xl m-auto">Video</h1>
                    </div>
                    <!-- popup video -->
                    <div class="intro-video mt-10">
                        <div class="row">
                            @foreach ($video as $item)
                            <div class="col-md-6 col-md-offset-2">
                                <img src="{{asset($item->url)}}" alt="">
                                <a href="{{$item->lien}}" class="video-popup">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                            <div class="text-center mt-5">
                                <a href="{{route('video.edit', $item->id) }}" class="w-auto bg-blue-500 hover:bg-blue-700 rounded-lg shadow-xl font-medium text-white mr-1 px-3 py-2">Edit</a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>