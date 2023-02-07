@extends('partials.main')

@section('content')

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
            <form action="/matches/{{ $match->matches_id }}" method="POST">
                @method('PUT')
                @csrf
                <div class="shadow sm:overflow-hidden sm:rounded-md">
                    <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                         <!-- Date -->
                         <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="date" class="block text-sm font-medium text-gray-700">Set new Date</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="datetime-local" name="date" id="date" class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ $match->date }}">
                                </div>
                            </div>
                        </div>
                        <!-- Team 1 -->
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="team1" class="block text-sm font-medium text-gray-700">Selected Team 1:</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                <span>
                                    @foreach($teams as $team)
                                            @if ($team->team_id == $match->team1_id)
                                            {{ $team->name }}
                                            @endif
                                        @endforeach
                                    </span>
                                </div>
                                <br>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <select name="team1" id="team1" class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
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
                                <label for="team2" class="block text-sm font-medium text-gray-700">Selected Team 2:</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                <span>
                                    @foreach($teams as $team)
                                            @if ($team->team_id == $match->team2_id)
                                            {{ $team->name }}
                                            @endif
                                        @endforeach
                                    </span>
                                </div>
                                <br>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <select name="team2" id="team2" class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
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
                                <label for="stadium" class="block text-sm font-medium text-gray-700">Edit Stadium</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="stadium" id="stadium" class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ $match->stadium }}">
                                </div>
                            </div>
                        </div>
                        <!-- Goals -->
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-1 sm:col-span-1">
                                <label for="goals1" class="block text-sm font-medium text-gray-700">Goals Team 1</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="number" name="goals1" id="goals1" class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="0" value="{{ $match->goals1 }}">
                                </div>
                            </div>
                            <div class="col-span-1 sm:col-span-1">
                                <label for="goals2" class="block text-sm font-medium text-gray-700">Goals Team 2</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="number" name="goals2" id="goals2" class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="0" value="{{ $match->goals2 }}">
                                </div>
                            </div>
                        </div>
                        <!-- Length -->
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-1 sm:col-span-1">
                                <label for="length" class="block text-sm font-medium text-gray-700">Match Length (minutes)</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="number" name="length" id="length" class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Minutes" value="{{ $match->length }}">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                        <button class="inline-flex justify-center rounded-md border border-transparent bg-red-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                            <a href="/matches">Cancel</a></button>

                        <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection