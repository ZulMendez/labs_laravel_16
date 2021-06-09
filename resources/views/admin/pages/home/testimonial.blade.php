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
                                <td>#</td>
                                <td>Auteur</td>
                                <td>Photo</td>
                                <td>Avis</td>
                                <td>Poste</td>
                                <td>Action</td>
                            </tr>
                            @foreach ($testi as $test)
                                <tr class="border-b-2">
                                    <td>{{ $test->id }}</td>
                                    <td><p class="text-center">{{ $test->nom }}</p></td>
                                    <td> <img src="{{ asset('img/' . $test->photo->url) }}" alt="" class="object-contain"></td>
                                    <td>{{ $test->avis }}</td>
                                    <td> {{$test->poste->titre}} </td>
                                    
                                    <td> Delete </td>
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
                    