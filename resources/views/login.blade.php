<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/icon type">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <title>GameDay</title>
    <!-- Fonts -->
    <script src="https://cdn.jsdelivr.net/npm/kute.js@2.2.4/dist/kute.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Styles -->
    <style>
        body {
            max-height: fit-content;
            height: 100vh;
        }

        html {

            background-image: url("/img/ball.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
        }

        html>* {
            z-index: 100;
        }

        html::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: linear-gradient(120deg, white, black);
            opacity: .5;
            z-index: -1;
        }
    </style>
</head>

<body>

    <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div>
                <img class="mx-auto h-20 w-auto rounded-lg" src="/img/logo.png" alt="Your Company">
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Sign in to your account</h2>
                <p class="mt-2 text-center text-sm text-gray-900">
                    Or
                    <a href="#" class="font-medium text-gray-900 hover:text-yellow-300 hover:drop-shadow-lg">Create a new account</a>
                </p>
            </div>
            <form class="mt-8 space-y-6" action="#" method="POST">
                <input type="hidden" name="remember" value="true">
                <div class="-space-y-px rounded-md shadow-sm">
                    <div>
                        <label for="email-address" class="sr-only">Email address</label>
                        <input id="email-address" name="email" type="email" autocomplete="email" required class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Email address">
                    </div>
                    <div>
                        <label for="password" class="sr-only">Password</label>
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Password">
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="container">
                        <input type="checkbox" id="cbx2" style="display: none;">

                        <label for="cbx2" class="check">
                            <div class="flex items-center space-around">
                                <svg width="18px" height="18px" viewBox="0 0 18 18">
                                    <path d="M 1 9 L 1 9 c 0 -5 3 -8 8 -8 L 9 1 C 14 1 17 5 17 9 L 17 9 c 0 4 -4 8 -8 8 L 9 17 C 5 17 1 14 1 9 L 1 9 Z"></path>
                                    <polyline points="1 9 7 14 15 4"></polyline>
                                </svg>
                                <span class="ml-2 font-medium text-sm text-gray-900">Remember me</span>
                            </div>
                        </label>
                    </div>


                    <div class="text-sm">
                        <a href="#" class="font-medium text-gray-900 hover:text-yellow-300 hover:drop-shadow-lg">Forgot your password?</a>
                    </div>
                </div>

                <div>
                    <button type="submit" class="btn group relative flex w-full justify-center rounded-md border border-transparent  py-2 px-4 text-md font-medium text-white">
                        Sign in
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>