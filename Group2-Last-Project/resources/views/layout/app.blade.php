<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{('/assets/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="Navbar.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg" style="background-color: #10202b;">
    <div class="container-fluid text-white">
      <a class="navbar-brand" href="#">
        <img src="/assets/1.png" alt="Company Logo" width="120px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Properties</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Signup
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Owner</a></li>
              <li><a class="dropdown-item" href="#">Agent</a></li>
              <li><a class="dropdown-item" href="#">Admin</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             SignIn
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Owner</a></li>
              <li><a class="dropdown-item" href="#">Agent</a></li>
              <li><a class="dropdown-item" href="#">Admin</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<div>
  @yield('content')
</div>
</body>
</html>
