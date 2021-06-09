<x-app-layout>
    <div class="py-2">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex justify-between text-center bg-white font-bold border-b border-gray-200">
                    <img class="" src="{{asset('img/logo.png')}}" alt="">
                    {{-- <div class="text-center bg-green-300 py-2 shadow-md w-3/12 mx-auto rounded-lg"> --}}
                        <h1 class="text-3xl font-bold text-gray-600 hover:text-gray-800 max-w-full">Hello {{ Auth::user()->nom }} !</h1>
                    {{-- </div> --}}
                    <h2 class="text-green-400 font-bold">You're logged in!</h2>
                </div>
            </div>
        </div>
    </div>
    <div>
        @include('partials.profil')
    </div>
</x-app-layout>
