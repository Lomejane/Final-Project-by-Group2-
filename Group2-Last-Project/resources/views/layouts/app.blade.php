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

<body>

<body style="background-color: #FAD9C1">
  <nav class="navbar navbar-expand-lg" style="background-color: #10202b;">

    <div class="container-fluid text-white">
<<<<<<< HEAD
      <a class="navbar-brand" href="#">
        <img src="/assets/1.png" alt="Company Logo" width="120px"></a>
      <button class="navbar-toggler bg-dark mr-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
=======
      <a class="navbar-brand" href="/">
        <img src="/assets/1.png" alt="Company Logo" width="120px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
>>>>>>> 87398bf68e412b0c8dee269fa347d7bb8dad3873
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse pl-2" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/">Home</a>
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
          <li class="nav-item">
            <a class="nav-link" href="/pricing">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/signup">SignUp</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/signin">SignIn</a>
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
 
  <div className="container" style="width: 100vw;">
  <footer class="py-6 row justify-content-md-center">
    <div class="row w-75 d-flex justify-content-between">
      <div class="col-2" style="width: 15vw;">
        <ul class="nav flex-column">
          <h4>Explore</h4>
          <li class="nav-item mb-2"><a href="">Home</a></li>
          <li class="nav-item mb-2"><a href="">Properties</a></li>
          <li class="nav-item mb-2"><a href="">Pricing</a></li>
          <li class="nav-item mb-2"><a href="">Sign Up</a></li>
        </ul>
      </div>

      <div class="col-2" style="width: 15vw;">
        <ul class="nav flex-column">
          <h5>Latest Properties</h5>
          <li class="nav-item mb-2"><a href="">Metro Manila</a></li>
          <li class="nav-item mb-2"><a href="">Luzon</a></li>
          <li class="nav-item mb-2"><a href="">Visayas</a></li>
          <li class="nav-item mb-2"><a href="">Mindanao</a></li>
        </ul>
      </div>

      <div class="col-2"style="width: 15vw;">
        <ul class="nav flex-column">
          <h5>Follow Us</h5>
          <li class="nav-item mb-2"><a href="">Youtube</a></li>
          <li class="nav-item mb-2"><a href="">Instagram</a></li>
          <li class="nav-item mb-2"><a href="">Facebook</a></li>
          <li class="nav-item mb-2"><a href="">Twitter</a></li>
        </ul>
      </div>

      <div className="col-4" style="width: 16vw;">
        <div class="card shadow lg p-1 mb-2" style="width: 15vw; padding: 5px; background-color: #FAD9C1">
          <form>
            <h5>Subscribe to our newsletter</h5>
            <p>We'll provide recent updates on property listings, promotions, sales and more.</p>
            <input type="text" class="form-control w-100" name="email" placeholder="Email">
            <br>
            {{-- <button  class="btn btn-dark btn-lg w-100" type="submit">Subscribe</button> --}}
            <button type="button" class="btn-lg w-100" style="font-family:'Poppins', sans-serif; height: 2.5rem; background-color:#368D96; border:none; border-radius: 8px;">Subscribe</button>
          </form>
        </div>
      </div>
      <br>
      <div class="py-5 my-5" style="border-top: 1px solid black;">
        <p>© 2022 Lem Properties.ph, All rights reserved.</p>
      </div>
    </div>
      
  </footer>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
