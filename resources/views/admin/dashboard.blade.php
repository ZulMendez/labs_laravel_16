<x-app-layout>
    <div class="py-2">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex justify-between text-center bg-white font-bold border-b border-gray-200">
                    <img class="" src="{{asset('img/logo.png')}}" alt="">
                    <h2 class="">You're logged in!</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center bg-green-300 py-2 shadow-md w-3/12 mx-auto rounded-lg">
        <h1 class="text-3xl max-w-full">Hello {{ Auth::user()->nom }} !</h1>
    </div>
</x-app-layout>
