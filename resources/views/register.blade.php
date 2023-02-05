@extends('partials.user');

@section('content')
    <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div>
                <img class="mx-auto h-20 w-auto rounded-lg" src="/img/logo.png" alt="Your Company">
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Create a new account</h2>
            </div>
            <form class="mt-8 space-y-6" action="/" method="POST">
                <input type="hidden" name="remember" value="true">
                <div class="-space-y-px rounded-md shadow-sm">
                    <div>
                        <label for="name" class="sr-only">Name</label>
                        <input id="name" name="name" type="text" required class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-yellow-300 focus:outline-none focus:ring-yellow-300 sm:text-sm" placeholder="Name">
                    </div>
                    <div>
                        <label for="email-address" class="sr-only">Email address</label>
                        <input id="email-address" name="email" type="email" required class="relative block w-full appearance-none rounded-none border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-yellow-300 focus:outline-none focus:ring-yellow-300 sm:text-sm" placeholder="Email address">
                    </div>
                    <div>
                        <label for="password" class="sr-only">Password</label>
                        <input id="password" name="password" type="password" required class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-yellow-300 focus:outline-none focus:ring-yellow-300 sm:text-sm" placeholder="Password">
                    </div>
                </div>

                <div class="flex">
                    <button type="submit" class="btn2 group relative flex w-full justify-center rounded-md border border-transparent  py-2 px-4 text-md font-medium text-white">
                        <a href="/">Cancel</a>    
                    </button>
                    <button type="submit" class="btn group relative flex w-full justify-center rounded-md border border-transparent  py-2 px-4 text-md font-medium text-white">
                        Sign up
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection;