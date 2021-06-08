<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-xl m-4 text-center md:text-left">Modification du service: ({{ $service->id }}) {{ $service->soustitre }} </h3> 
                    
                    <form action="{{route('service.update', $service->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        @include('layouts.flash')
                        <div class="flex flex-col md:w-2/6">
                            <i style="font-size:4rem;" class="{{$service->icone}}"></i>
                            <div class="flex justify-between">
                                <label for="icone">Icone </label>
                            </div> 
                            
                            <input type="text" name="icone" value="{{$service->icone}}"/>
                            @error('icone')
                                <span class="text-red-500 font-bold">{{$message}}</span> 
                            @enderror
                            </div>
                        <div class="mt-4 flex flex-col md:w-2/6">
                            <label for="soustitre">Titre</label>
                            <input type="text" name="soustitre" value="{{$service->soustitre}}" />
                            @error('soustitre')
                                <span class="text-red-500 font-bold">{{$message}}</span> 
                            @enderror
                        </div>

                        <div class="mt-4 flex flex-col md:w-4/6">
                            <label for="description">Description</label>
                            <textarea name="description" id="desc" maxlength="200" cols="30" rows="10" style="resize:none;">{{$service->description}}</textarea>
                            <p class="text-right text-gray-400 strong"> <span id="limit">0</span> / 200 </p>
                            @error('description')
                                <span class="text-red-500 font-bold">{{$message}}</span> 
                            @enderror
                        </div>


                        <div class="flex flex-col md:w-1/6">
                            <input type="submit" value="Modifier" class="bg-green-400 hover:bg-green-300 rounded:md" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>