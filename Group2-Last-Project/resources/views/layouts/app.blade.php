<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{('/assets/app.css')}}" rel="stylesheet">
    <link href="{{'/css/Navbar.css'}}" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
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
            <a class="nav-link" aria-current="page" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/properties">Properties</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Signup
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/signup">Owner</a></li>
              <li><a class="dropdown-item" href="/signup">Agent</a></li>
              <li><a class="dropdown-item" href="/signup">Admin</a></li>
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
 <main>

 </main>
 <div>
  @yield('content')
 </div>

  <footer style="background-color: pink">
    <div class="row text-center">
      <div class="col">
        <h5>Explore</h5>
        <li><a href="">Home</a></li>
        <li><a href="">Properties</a></li>
        <li><a href="">Pricing</a></li>
        <li><a href="">Sign Up</a></li>
      </div>
      <div class="col">
        <h5>Latest Properties</h5>
        <li><a href="">Metro Manila</a></li>
        <li><a href="">Luzon</a></li>
        <li><a href="">Visayas</a></li>
        <li><a href="">Mindanao</a></li>
      </div>
      <div class="col">
        Follow Us
        <li><a href="">Facebook</a></li>
        <li><a href="">Youtube</a></li>
        <li><a href="">Instagram</a></li>
        <li><a href="">Twitter</a></li>
      </div>
      <div class="col">
        <h5>Subscribe to our newsletter</h5>
        <p>We'll provife updates on recent property listings, promotions, sales and more.</p>
        <label for="">Email</label>
        <input type="text" name="email">
        <button type="submit">Subscribe</button>
      </div>
    </div>
  </footer>
</body>
</html>
