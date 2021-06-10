<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 bg-white border-b border-gray-200 block">
                    <div class="mb-5 text-center bg-gray-100 py-4 shadow-md w-6/12 mx-auto rounded-lg">
                        <h1 class="text-center text-gray-600 text-4xl m-auto">Titres</h1>
                    </div>
                    <!-- About contant -->
                        @foreach ($titres as $item)
                        <div class="m-auto">
                            <div class="flex align-center justify-evenly">
                                <div>
                                    <p class="">{{$item->titre}}</p>
                                </div>
                                <div>
                                    <a href="{{route('titre.edit', $item->id) }}" class="mt-10 w-auto bg-blue-500 hover:bg-blue-700 rounded-lg shadow-xl font-medium text-white mr-1 px-3 py-2">Edit</a>
                                </div>
                            </div>
                            
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>