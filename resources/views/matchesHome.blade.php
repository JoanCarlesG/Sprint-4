@extends('partials.main')

@section('content')

@if ($message = Session::get('success'))
<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
<strong class="font-bold">Success!</strong>
<span class="block sm:inline">{{ $message }}</span>
</div>
<br>
@endif

<button class="btn font-bold text-green-600">
    <a href="matches/create">Create Match</a>
</button>
<br>
<br>
<div class="table">
    <table class="w-full text-md text-center text-gray-500 table-auto">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">Date</th>
                <th scope="col" class="px-6 py-3">Stadium</th>
                <th scope="col" class="px-6 py-3">Length</th>
                <th scope="col" class="px-6 py-3">Team 1</th>
                <th scope="col" class="px-6 py-3">Result</th>
                <th scope="col" class="px-6 py-3">Team 2</th>
                <th scope="col" class="px-6 py-3">Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($matches as $match)

            <tr class="bg-white border-b">
                <td class="px-6 py-4">{{ $match->date }}</td>
                <td class="px-6 py-4">{{ $match->stadium }}</td>
                <td class="px-6 py-4">{{ $match->length }}'</td>
                <td class="px-6 py-4">
                    @foreach ($teams as $team)
                    @if ($team->team_id == $match->team1_id)
                    <img src="/img/{{ $team->crest }}" width="70px" alt="Team Crest">
                    @endif
                    @endforeach
                </td>
                <td class="px-6 py-4">{{ $match->goals1 }} : {{ $match->goals2 }}</td>
                <td class="px-6 py-4">
                    @foreach ($teams as $team)
                    @if ($team->team_id == $match->team2_id)
                    <img src="/img/{{ $team->crest }}" width="70px" alt="Team Crest">
                    @endif
                    @endforeach
                </td>
                <td class="px-6 py-4">

                    <form action="{{ route('matches.destroy', $match->matches_id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="matches/{{ $match->matches_id }}/edit" class="font-medium text-blue-600 hover:underline mr-2">Edit</a>

                        <button onclick="return confirmDelete()" type="submit" class="font-medium text-red-600 hover:underline">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- CONFIRM DELETE BUTTON -->
<script>
    function confirmDelete() {
        var result = confirm("Are you sure you want to delete this match?");
        if (!result) {
            return false
        }
    }
</script>


@endsection