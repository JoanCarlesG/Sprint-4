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

</head>

<body>
    <div class="sidebar">
        <nav class="main-menu">
            <ul>
                <li>
                    <img class="border-solid border-2 border-yellow-300 rounded-md" src="/img/FullLogo.png" alt="GameDay Logo with Name">
                </li>
                <li>
                    <a href="https://jbfarrow.com">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Community Dashboard
                        </span>
                    </a>

                </li>
                <li class="has-subnav">
                    <a href="#">
                        <i class="fa fa-globe fa-2x"></i>
                        <span class="nav-text">
                            Global Surveyors
                        </span>
                    </a>

                </li>
                <li class="has-subnav">
                    <a href="#">
                        <i class="fa fa-comments fa-2x"></i>
                        <span class="nav-text">
                            Group Hub Forums
                        </span>
                    </a>

                </li>
                <li class="has-subnav">
                    <a href="#">
                        <i class="fa fa-camera-retro fa-2x"></i>
                        <span class="nav-text">
                            Survey Photos
                        </span>
                    </a>

                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-film fa-2x"></i>
                        <span class="nav-text">
                            Surveying Tutorials
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-book fa-2x"></i>
                        <span class="nav-text">
                            Surveying Jobs
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-cogs fa-2x"></i>
                        <span class="nav-text">
                            Tools & Resources
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-map-marker fa-2x"></i>
                        <span class="nav-text">
                            Member Map
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-info fa-2x"></i>
                        <span class="nav-text">
                            Documentation
                        </span>
                    </a>
                </li>
            </ul>

            <ul class="logout">
                <li>
                    <a href="/user">
                        <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="content ml-20">
        @yield('content')
    </div>


</body>

</html>