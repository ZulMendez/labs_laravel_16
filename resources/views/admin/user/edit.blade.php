<x-app-layout>

    <form action="{{ route('role.update', $user->id) }}" method="post"
        class="grid bg-white rounded-lg shadow-xl  col-span-2 w-10/12 mx-auto">
        @csrf
        @method('PUT')
        @include('layouts.flash')
        <input type="hidden" name="roleUpdate" id="roleUpdate">
        <div class="flex justify-center pt-8">
            <div class="flex">
                <h1 class="text-gray-600 font-bold md:text-2xl text-xl">Modification profil</h1>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-1 gap-5 md:gap-8 mt-5 mx-7">
            <div class="grid grid-cols-1">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Nom</label>
                <input
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                    type="text" name="nom" value="{{ $user->nom }}" placeholder="Ton nom" />
                @error('nom')
                @include('partials.error')
                @enderror
            </div>
        </div>
        
        <div class="grid grid-cols-1 mt-5 mx-7">
            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Email</label>
            <input
                class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                type="text" name="email" value="{{ $user->email }}" placeholder="Ton email" />
            @error('email')
            @include('partials.error')
            @enderror

        </div>

        <div class="grid grid-cols-1 mt-5 mx-7">
            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Avatar</label>
            <select name="role_id"
                class="form-select mt-1 block w-full py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                @foreach ($roles as $role)
                <option {{ $role->id == $user->role_id ? 'selected' : '' }} value="{{ $role->id }}">
                    {{ $role->nom }}</option>

                @endforeach
            </select>
        </div>

        <div class="grid grid-cols-1 mt-5 mx-7">
            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Avatar</label>
            <select name="avatar_id"
                class="form-select mt-1 block w-full py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                @foreach ($postes as $poste)
                <option {{ $poste->id == $user->poste_id ? 'selected' : '' }} value="{{ $poste->id }}">
                    {{ $poste->titre}}</option>

                @endforeach
            </select>
        </div>

        <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
            <button
                class='w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Update
            </button>
        </div>

    </form>
    {{-- @Webmaster
        <p class="text-center">Changement de rôles</p>
        <table class="container text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>name</th>
                    <th>email</th>
                    <th>rôle</th>
                    <th>poste</th>
                    <th>change poste</th>
                    @Admin
                        <th>delete</th>
                    @endAdmin
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                    @if (!($item->role->nom == "admin"))
                        @if (!(Auth::user()->role->nom == "webmaster" && $item->role->nom == "webmaster"))
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->nom}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->role->nom}}</td>
                                <td>{{$item->poste->titre}}</td>
                                <td>
                                    <form action="{{route('role.update' , $item->id)}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="roleUpdate" id="roleUpdate">
                                        <select name="role_id" id="role_id">
                                            @foreach ($roles as $item)
                                            <option disabled selected>{{$item->nom}}</option>
                                            @endforeach
                                        </select>
                                        <button type="submit" class='w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Submit</button>
                                    </form>            
                                </td>
                                <td>
                                    @Admin
                                    <form action="{{route('user.destroy', $item->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Delete</button>
                                    </form>
                                    @endAdmin
                                </td>
                            </tr>
                        @endif
                    @endif
                @endforeach
            </tbody>
        </table>
    @endWebmaster --}}
</x-app-layout>
