<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/icon type">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <title>GameDay</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/kute.js@2.2.4/dist/kute.min.js"></script>
    <style> 
    body{
        font-family: 'Titillium Web', sans-serif;
    }
    </style>
</head>

<body>
    <div class="sidebar">
        <nav class="main-menu">
            <ul>
                <li>
                    <img class="border-solid border-2 border-yellow-300 rounded-md" src="/img/FullLogo.png" alt="GameDay Logo with Name">
                </li>
                <br>
                <li>
                    <a href="/teams">
                        <i class="fa fa-users fa-2x"></i>
                        <span class="nav-text">
                            My Teams
                        </span>
                    </a>
                </li>
                <br>
                <li>
                    <a href="/matches">
                        <i class="fa fa-trophy fa-2x"></i>
                        <span class="nav-text">
                            Matches
                        </span>
                    </a>
            </ul>
            <!--
            <ul class="logout">
                <li>
                    <a href="/">
                        <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>
            </ul>
            -->
        </nav>
    </div>
    <div class="header mb-2 p-6 text-lg">
        <div class="ml-20" style="font-size: 150%;">
            <h1>GAMEDAY</h1>
        </div>
    </div>

    <div class="content ml-24">
        @yield('content')
    </div>


</body>

</html>