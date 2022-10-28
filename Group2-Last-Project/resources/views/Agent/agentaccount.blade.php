<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{('/assets/app.css')}}" rel="stylesheet">
    <link href="{{'/css/agent.css'}}" rel="stylesheet" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Agent Account</title>
</head>
<body>

<header>
    <nav class="Navbar">
        <img src="./assets/lem-logo.png" alt="" class="Logo">
    </nav>
</header>
    <div class="sidebar">
        <a href="#home">
            <span class="material-symbols-sharp">
                home
            </span>
            <h3>Home</h3>
        </a>
        <a href="{{'agentdashboard'}}">
            <span class="material-symbols-sharp">
                space_dashboard
            </span>
            <h3>Dashboard</h3>    
            </a>
            <a href="{{'agentprofile'}}">
                <span class="material-symbols-sharp">
                    person
                </span>
            <h3>Profile</h3>
            <a href="{{'listings'}}">
                <span class="material-symbols-sharp">
                    apartment
                </span>
                <h3>Properties</h3>
            </a>
            <a href="{{''}}">
                <span class="material-symbols-sharp">
                    real_estate_agent
                    </span>
                <h3>Sales</h3>
            </a>
            <br>
            <br>
            <br>
            <br>
            <a href="">
                <span class="material-symbols-sharp">
                    logout
                </span>
                <h3>Logout</h3>
            </a>
    </div>
    @yield('content')

    
</body>
</html>