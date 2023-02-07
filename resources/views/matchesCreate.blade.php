@extends('partials.main')

@section('content')
<div class="header mb-2 p-6 text-lg">
    <h1>GameDay</h1>
    <br>
    <h2>Create New Match</h2>
</div>

@if ($errors->any())
<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
    <strong class="font-bold">Red card!</strong>
    <span class="block sm:inline">Something seriously bad happened.</span>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
<br>

@endif

<div>
    <div class="md:grid md:grid-cols-4 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Match Details</h3>
                <p class="mt-1 text-sm text-gray-600"></p>
            </div>
        </div>

        <!-- FORM -->
        <div class="mt-5 md:col-span-2 md:mt-0">
            <form action="/matches" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="shadow sm:overflow-hidden sm:rounded-md">
                    <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                        <!-- Date -->
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="datetime-local" name="date" id="date" class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Team Name">
                                </div>
                            </div>
                        </div>
                        <!-- Team 1 -->
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="team1" class="block text-sm font-medium text-gray-700">Team 1</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <select name="team1" id="team1" class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        <option selected="selected" value="">Choose a Team</option>
                                        @foreach($teams as $team)
                                        <option value="{{$team->team_id}}">{{$team->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- Team 2 -->
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="team2" class="block text-sm font-medium text-gray-700">Team 2</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <select name="team2" id="team2" class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        <option selected="selected" value="">Choose a Team</option>
                                        @foreach($teams as $team)
                                        <option value="{{$team->team_id}}">{{$team->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- Stadium -->
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="stadium" class="block text-sm font-medium text-gray-700">Stadium</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="stadium" id="stadium" class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Stadium Name">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                        <button class="inline-flex justify-center rounded-md border border-transparent bg-red-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                            <a href="/matches">Cancel</a>
                        </button>

                        <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection