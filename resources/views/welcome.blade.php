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
            font-family: 'Titillium Web', sans-serif;
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

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #2f2f2f;
            padding: 0 25px;
            font-size: 20px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>

</head>

<body>
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md flex-center ">
                <img class="rounded-md" src="/img/FullLogo.png" width="300px" alt="GameDay Logo with Name">
            </div>

            <div class="links">
                @if (Route::has('login') && Auth::check())
                <div class="btn">
                    <a href="{{ url('/teams') }}">Enter</a>
                </div>
                @elseif (Route::has('login') && !Auth::check())
                <div class="flex-center">
                    <div class="btn">
                    <a href="{{ url('/login') }}">Login</a>
                    </div>
                    <div class="btn">
                    <a href="{{ url('/register') }}">Register</a>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</body>

</html>