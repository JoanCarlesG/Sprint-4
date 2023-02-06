@extends('partials.main')

@section('content')
<div class="header mb-2 p-6 text-lg">
    <h1>GameDay</h1>
    <br>
    <h2>Teams</h2>
</div>

<button class="font-medium text-green-600 dark:text-green-500 hover:underline">
    <a href="teams/create" teams/create"">Add Team</a>
</button>

<div class="table rounded-md">
    <table class="w-full text-md text-left text-gray-500 dark:text-gray-400 table-auto">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <td>{{ $team->crest }}</td>
                <td class="px-6 py-4">{{ $team->name }}</td>
                <td class="px-6 py-4">{{ $team->home_city }}</td>
                <td class="px-6 py-4">{{ $team->stadium }}</td>
                <td class="px-6 py-4">
                    <a href="teams/edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-2">Edit</a>
                    <button class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection