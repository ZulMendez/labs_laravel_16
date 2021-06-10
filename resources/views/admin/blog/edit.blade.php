<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-xl m-4 text-center md:text-left">Modifier l'article{{$blog->id}} </h3>
                    <div class="text-center md:text-left">
                        <img src="{{asset('img/' . $blog->image)}}" alt="{{$blog->titre}}" />
                        <div>
                            <input type="file" name="newimg" />
                        </div>

                        <p>Catégorie: 
                            <select name="cat" id="">
                                @foreach ($categories as $cat)
                                    <option value="{{$cat->id}}">{{$cat->nom}}</option>
                                @endforeach
                            </select>
                        </p>
                        <p>Tags: 
                            @forelse ($tags as $tag)
                                <span>
                                    <input type="checkbox" name="taglist[]" value="{{$tag->id}}">
                                    <label for="taglist[{{$tag->id}}]">{{$tag->nom}}</label>
                                </span>
                            @empty
                                <span>pas de tags dans la db..</span>
                            @endforelse
                        </p>

                        <textarea class="m-2 bg-gray-200"> {{$blog->description }} </textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>