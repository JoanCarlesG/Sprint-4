@extends('partials.main')

@section('content')

@if ($message = Session::get('success'))
<div class="bg-green-100 border border-green-400 text-red-700 px-4 py-3 rounded relative" role="alert">
<strong class="font-bold">Success!</strong>
<span class="block sm:inline">{{ $message }}</span>
</div>
<br>
@endif

<button class="btn font-bold text-green-600">
    <a href="teams/create">Add Team</a>
</button>
<br>
<!--
<div class="table rounded-md">
    <table class="w-full text-md text-center text-gray-500 table-auto">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">Crest</th>
                <th scope="col" class="px-6 py-3">Name</th>
                <th scope="col" class="px-6 py-3">Home City</th>
                <th scope="col" class="px-6 py-3">Stadium</th>
                <th scope="col" class="px-6 py-3">Options</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($teams as $team)
            <tr class="bg-white border-b">
                <td>
                    @if ($team->crest)
                    <img src="/img/{{ $team->crest }}" width="60px" alt="Team Crest">
                    @else
                    <img src="/img/crest.png" width="60px" class="rounded-md" style="background-color: white" alt="Team Crest">

                    @endif
                </td>

                <td class="px-6 py-4">{{ $team->name }}</td>
                <td class="px-6 py-4">{{ $team->home_city }}</td>
                <td class="px-6 py-4">{{ $team->stadium }}</td>
                <td class="px-6 py-4">
                    <form action="{{ route('teams.destroy', $team->team_id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="teams/{{ $team->team_id }}/edit" class="font-medium text-blue-600 hover:underline mr-2">Edit</a>

                        <button onclick="return confirmDelete()" type="submit" class="font-medium text-red-600 hover:underline">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
-->
<!-- CONFIRM DELETE BUTTON -->
<script>
    function confirmDelete() {
        var result = confirm("Are you sure you want to delete this team?");
        if (!result) {
            return false
        }
    }
</script>
<br>
<div class="teams-layout md:grid md:grid-cols-12 md:gap-2">
    @foreach ($teams as $team)
    @if ($team->user_id == auth()->user()->user_id)
    <div class="card md:col-span-1">
        <div class="flex items-center justify-center">
            @if ($team->crest)
            <img src="/img/{{ $team->crest }}" width="70px" alt="Team Crest">
            @else
            <img src="/img/crest.png" width="70px" class="rounded-md" style="background-color: white" alt="Team Crest">
            @endif
            <h1>{{ $team->name }}</h1>
        </div>
        <br>
        <p>Home: {{ $team->home_city }}</p>
        <p>Stadium: {{ $team->stadium }}</p>
        <div>
            <form action="{{ route('teams.destroy', $team->team_id) }}" method="POST">
                @csrf
                @method('DELETE')
                <a href="teams/{{ $team->team_id }}/edit" class="font-medium text-blue-600 hover:underline mr-2">Edit</a>
                <br>
                <button onclick="return confirmDelete()" type="submit" class="font-medium text-red-600 hover:underline">Delete</button>
            </form>
        </div>

    </div>
    <br>
    @endif
    @endforeach
    
</div>

@endsection