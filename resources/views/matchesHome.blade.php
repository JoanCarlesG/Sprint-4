@extends('partials.main')

@section('content')
<div class="header mb-2 p-6 text-lg">
    <h1>GameDay</h1>
    <br>
    <h2>Matches</h2>
</div>

<button class="font-medium text-green-600 dark:text-green-500 hover:underline">
    <a href="matches/create">Create Match</a>
</button>

<div class="table rounded-md">
    <table class="w-full text-md text-center text-gray-500 dark:text-gray-400 table-auto">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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

            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
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
                        <a href="matches/{{ $match->matches_id }}/edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-2">Edit</a>

                        <button onclick="return confirmDelete()" type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
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