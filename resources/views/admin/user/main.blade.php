<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 bg-white border-b border-gray-200 block">
                    <div class="text-center bg-gray-100 py-4 shadow-md w-6/12 mx-auto rounded-lg">
                        <h1 class="text-center text-gray-600 text-4xl m-auto">Users</h1>
                        <p class="text-center">All users: {{ count($users) }}</p>
                    </div>
                    <div class="text-center mt-3">
                        <a href="{{route('user.create')}}" class="bg-green-400 hover:bg-green-500 m-2 py-2 text-white font-bold hover:text-black px-3 rounded-sm">Add user</a>
                    </div>
                    @Webmaster
                    <table class="text-left w-full">
                        <thead>
                            <tr>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    Photo</th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    Nom</th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    Email</th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    Poste</th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    Genre</th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    Role</th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr class="hover:bg-grey-lighter">
                                <td class="py-4 px-6 border-b border-grey-light">
                                    <img src="{{asset($user->img) }}" alt="" class="h-10" />
                                </td>
                                <td class="py-4 px-6 border-b border-grey-light">{{ $user->nom }}</td>
                                <td class="py-4 px-6 border-b border-grey-light">{{ $user->email }}</td>
                                <td class="py-4 px-6 border-b border-grey-light">{{ $user->poste->titre }}</td>
                                <td class="py-4 px-6 border-b border-grey-light">{{ $user->genre->type }}</td>
                                <td class="py-4 px-6 border-b border-grey-light font-bold">{{ $user->role->nom }}</td>
                                <td class="py-4 px-6 border-b border-grey-light">
                                    @if (Auth::id() == $user->id)
                                        <p class="text-green-800 font-bold">Tu es connecté !</p>
                                    @elseif($user->role_id == 1)
                                        <p class="text-red-600 font-bold "> Action refusée !</p>
                                    @else
                                        <div class="flex">
                                            <a href="{{ route('user.edit', $user->id) }}" class="w-auto bg-blue-500 hover:bg-blue-700 rounded-lg shadow-xl font-medium text-white mr-1 px-4 py-2">Edit</a>
                                            {{-- @Admin --}}
                                            <form action="{{ route('user.destroy', $user->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                @if ((Auth::user()->role_id == 1) && (Auth::user()->id != $user->id))
                                                    <button class="w-auto bg-red-500 hover:bg-red-700 rounded-lg shadow-xl font-medium text-white px-4 py-2">Delete</button>
                                                @endif
                                            </form>
                                            {{-- @endAdmin --}}
                                        </div>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endWebmaster
                </div>
            </div>
        </div>
    </div>
</x-app-layout>