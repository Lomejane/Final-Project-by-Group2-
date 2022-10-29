<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{('/assets/app.css')}}" rel="stylesheet"> {{-- This would not be required since app.css is already existing under /public/build/assets/ --}}
    <link href="{{'/css/Navbar.css'}}" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">

    {{-- Links and scripts from here down to the next marker below are added by Enerio: --}}
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
    crossorigin="anonymous"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link  href="{{asset('build/assets/app.css')}}" rel="stylesheet">
    <link href="{{secure_asset('build/assets/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/properties.css')}}" rel="stylesheet">
    <script src="{{secure_asset('build/assets/app.css')}}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    {{-- Links and scripts from here up to the next marker above are added by Enerio: --}}

</head>
<body style="background-color: #FAD9C1">
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
{{-- script below added by Enerio --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
