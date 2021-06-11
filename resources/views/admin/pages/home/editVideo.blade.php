<x-app-layout>
    <form action="{{ route('video.update', $video->id) }}" method="post"
        class="grid bg-white rounded-lg shadow-xl  col-span-2 w-10/12 mx-auto" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('layouts.flash')
        <div class="flex justify-center pt-8">
            <div class="flex">
                <h1 class="text-gray-600 font-bold md:text-2xl text-xl">Edit video</h1>
            </div>
        </div>
        {{-- image --}}
        <div class="grid grid-cols-1 md:grid-cols-1 gap-5 md:gap-8 mt-5 mx-auto">
            <div class="grid grid-cols-1">
                <label class="font-bold" for="lien">Lien </label><br/>
                <input type="text" name="lien" value="{{$video->lien}}" class="w-full" /> <br/> 
                @error('lien')
                    <br/> <span class="text-red-500">{{$message}}</span><br/>
                @enderror
                
                <label for="imgvideo"><br/><strong>Image </strong></label><br/>
                <img src="{{asset($video->url)}}" alt="">
                <input type="file" name="imgvideo" class="w-full" />
                @error('imgvideo')
                    <br/> <span class="text-red-500">{{$message}}</span><br/>
                @enderror
            </div>
        </div>

        <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
            <button type="submit"
                class='w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Update
            </button>
        </div>
    </form>
</x-app-layout>
