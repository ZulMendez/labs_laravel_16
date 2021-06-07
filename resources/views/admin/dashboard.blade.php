<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
    <div class="text-center bg-purple-500 py-5 shadow-md w-3/12 mx-auto rounded-lg">
        <h1 class="text-3xl max-w-full">Bonjour {{ Auth::user()->nom }} !</h1>
    </div>
</x-app-layout>
