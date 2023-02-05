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
    <div class="container">
        @yield('content')
    </div>
</body>

</html>