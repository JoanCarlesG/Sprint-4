@extends('partials.main')

@section('content')
<div>
    <div class="md:grid md:grid-cols-4 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Update User Role</h3>
                <p class="mt-1 text-sm text-gray-600"></p>
            </div>
        </div>

        <!-- FORM -->
        <div class="mt-5 md:col-span-2 md:mt-0">
            <form action="/user/{{$user->user_id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="shadow sm:overflow-hidden sm:rounded-md">
                    <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                        <!-- Name -->
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <label class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" for="name">{{ $user->name }}</label>
                                </div>
                            </div>
                        </div>
                        <!-- Email -->
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <label class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" for="email">{{ $user->email }}</label>
                                </div>
                            </div>
                        </div>
                        <!-- Stadium -->
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <label class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" for="role">{{ $user->roles->last()->name }}</label>
                                </div>
                            </div>
                        </div>
                        <!-- Checkboxes -->
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="role" class="block text-sm font-medium text-gray-700">New Role</label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <br>
                                    <ul>
                                        @foreach ($roles as $role)
                                        <li>
                                            <input class="text-sm font-medium text-gray-700" type="checkbox" name="roles[]" value="{{ $role->id }}"> {{ $role->name }}
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                        <button class="inline-flex justify-center rounded-md border border-transparent bg-red-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                            <a href="/user">Cancel</a>
                        </button>
                        <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection