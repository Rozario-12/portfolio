<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 5 Example</title>
    <!-- Link to Bootstrap CSS -->
    <!-- Link to Bootstrap CSS -->
<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">

<!-- Link to your custom CSS (main.css) -->
<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

<!-- Link to Google Fonts (Sofia) -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

<!-- Font Awesome CSS for icons -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<!-- Include jQuery first, then Bootstrap JS -->
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.js') }}"></script>

<!-- Include your custom JS (main.js) -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('dashboard')}}">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('viewprofile')}}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('data-skill')}}">Skill</a>w
                    </li>
                </ul>
                <!-- In your Blade template -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Logout</button>
                </form>

            </div>
        </div>
    </nav>
    @yield('content')

</body>


</html>
