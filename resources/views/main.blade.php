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
                    <a href="#">
                        <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="content ml-20 " >


        <div class="header mb-2 p-6 text-lg">
            <h1>GameDay</h1>
            <br>
            <h2>Teams</h2>
        </div>

        <button class="font-medium text-green-600 dark:text-green-500 hover:underline">
            <a href="teams/create"teams/create"">Add Team</a>
        </button>

        <div class="table rounded-md">
            <table class="w-full text-md text-left text-gray-500 dark:text-gray-400 table-auto">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Crest</th>
                        <th scope="col" class="px-6 py-3">Name</th>
                        <th scope="col" class="px-6 py-3">Home City</th>
                        <th scope="col" class="px-6 py-3">Stadium</th>
                        <th scope="col" class="px-6 py-3">Options</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($teams as $team)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <td>{{ $team->crest }}</td>
                        <td class="px-6 py-4">{{ $team->name }}</td>
                        <td class="px-6 py-4">{{ $team->home_city }}</td>
                        <td class="px-6 py-4">{{ $team->stadium }}</td>
                        <td class="px-6 py-4">
                            <a href="teams/edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-2">Edit</a>
                            <button class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>




    </div>


</body>

</html>