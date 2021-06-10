<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-gray-600 text-center font-bold md:text-2xl text-xl">Edit title</h3> 
                    <form action="{{route('titre.update', $titre->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        @include('layouts.flash')
                        <div class="mt-4">
                            <x-label for="titre" :value="__('Titre')" />
                            <x-input id="titre" class="block mt-1 w-full" type="text" name="titre" value="{{$titre->titre}}"  required autofocus />
                        </div>
                        <div class="mt-4 flex flex-col md:w-1/6">
                            <button type="submit" class="w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2" >Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>