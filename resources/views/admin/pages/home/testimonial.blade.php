<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="text-center bg-gray-100 py-4 shadow-md w-6/12 mx-auto rounded-lg">
                        <h1 class="text-center text-gray-600 text-4xl m-auto">Testimonial</h1>
                    </div>
                    @if (count($testi) >= 0)
                        <table>
                            <tr class="text-center">
                                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">#</th>
                                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Auteur</th>
                                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Photo</th>
                                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Avis</th>
                                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Poste</th>
                                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Action</th>
                            </tr>
                            @foreach ($testi as $test)
                                <tr class="border-b-2">
                                    <td class="py-4 px-6 border-b text-black font-bold border-grey-light">{{ $test->id }}</td>
                                    <td class="py-4 px-6 border-b text-black font-bold border-grey-light"><p class="text-center">{{ $test->nom }}</p></td>
                                    <td class="py-4 px-6 border-b text-black font-bold border-grey-light"> <img src="{{ asset('img/' . $test->photo->url) }}" alt="" class="object-contain"></td>
                                    <td class="py-4 px-6 border-b text-black font-bold border-grey-light">{{ $test->avis }}</td>
                                    <td class="py-4 px-6 border-b text-black font-bold border-grey-light"> {{$test->poste->titre}} </td>
                                    <td class="flex">
                                        <form method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="w-auto bg-red-500 hover:bg-red-700 rounded-lg shadow-xl font-medium text-white px-4 py-2">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {{-- pagination --}}
                        <div class="mt-3">
                            {{ $testi->links() }}
                        </div>
                    @else
                        <p>Pas d'avis à afficher</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
                    