@extends('partials.main')

@section('content')
<div class="header mb-2 p-6 text-lg">
    <h1>GameDay</h1>
    <br>
    <h2>Add Team</h2>
</div>

<div>
    <div class="md:grid md:grid-cols-4 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Team Details</h3>
                <p class="mt-1 text-sm text-gray-600"></p>
            </div>
        </div>

        <!-- FORM -->
        <div class="mt-5 md:col-span-2 md:mt-0">
            <form action="/teams" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="shadow sm:overflow-hidden sm:rounded-md">
                    <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                        <!-- Name -->
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="name" id="name" class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Team Name">
                                </div>
                            </div>
                        </div>
                        <!-- Home City -->
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="city" class="block text-sm font-medium text-gray-700">Home City</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="city" id="city" class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="City Name">
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
                        <!-- Crest -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Default Crest</label>
                            <div class="mt-1 flex items-center">
                                <span class="inline-block h-12 w-12 overflow-hidden rounded-full bg-gray-100">
                                    <img src="/img/crest.png" alt="Crest Icon">
                                </span>
                            </div>
                            <br>
                            <!-- Add PNG, JPG -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Add Crest</label>
                                <div class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                                    <div class="space-y-1 text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <div class="flex text-sm text-gray-600">
                                            <label for="crest" class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                                                <input type="file" id="crest" name="crest" class="form-control">
                                            </label>
                                        </div>
                                        <p class="text-xs text-gray-500">PNG, JPG up to 10MB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                        <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection