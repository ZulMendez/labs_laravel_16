<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-4xl m-2 text-center text-gray-600">Page Blog</h3>
                    <ul class="flex justify-center">
                        <a href="{{route('service.create')}}" class="bg-green-400 hover:bg-green-500 m-2 py-2 text-white font-bold hover:text-black px-4 rounded-sm">Add post</a>
                    </ul>

                    <table class="w-full">
                        <tr class="underline">
                            <td>#</td>
                            <td>Image</td>
                            <td>Titre</td>
                            <td>Action</td>
                        </tr>
                        @forelse ($articles as $art)
                            <tr>
                                <td>{{ $art->id }}</td>
                                <td><img src="{{ asset($art->image) }}" alt="{{ $art->titre }}" style="max-height:50px;"></td>
                                <td>{{ $art->titre }}</td>
                                <td>
                                    {{-- <a href="{{route('blog.show', $art)}}">
                                        <button class="bg-green-500 p-1 hover:bg-green-300 rounded" title="Regarde l'article en détails">S</button>                        
                                    </a> --}}
                                    <a href="{{route('blog.edit', $art)}}">
                                        <button class="bg-yellow-500 p-1 hover:bg-yellow-300 rounded" title="Modifie l'article">M</button>
                                    </a>
                                    <a href="#">
                                        <button class="bg-red-500 p-1 hover:bg-red-300 rounded" title="supprime l'article">X</button> 
                                    </a>
                                </td>
                            </tr>
                        @empty
                            
                        @endforelse
                    </table>
                    
                    <div class="page-pagination">
                    {{ $articles->links('vendor/pagination/default') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>