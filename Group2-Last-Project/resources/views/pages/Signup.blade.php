@extends('layouts.app')

@section('content')
<main>
<div class="container w-100" style="border: solid red 3px;">
  <div class="row">
    <div class="col-sm">
      {{-- <img src="../assets/for_buy.jpg" alt="Property in Manila" style="height: 90vh;"> --}}
    </div>
    <div class="col-sm">
      One of three columns
      {{-- Card --}}
      <div class="card" style="padding: 15px; min-height: 30vh;">
        <div class="row">
          <h3>Sign up</h3>
          <div class="col-sm-5">
          <form action="">
            <label for="">Username</label><br>
            <input type="text" class="form-control" name="" placeholder="Username">
            <label for="">Email</label><br>
            <input type="text" class="form-control" name="" id="" placeholder="Email">
            <label for="">Password</label><br>
            <input type="text" class="form-control" name="" id="" placeholder="Create password">
            <label for="">Retype password</label><br>
            <input type="text" class="form-control" name="" id="" placeholder="Retype password"><br> 
            <button type="submit" class="btn btn-dark">Submit</button>
          </form>
          </div>
          
          <div class="col-sm-2">
            <br> <br> 
            <h1>OR</h1>
          </div>
          <div class="col-sm-5">
            <button class="btn btn-dark btn-lg btn-block">Log in with Twitter</button><br>
            <br>
            <button class="btn btn-light btn-lg btn-block">Log in with Google+</button><br>
            <br>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Log in with facebook</button><br>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
</main>
@endsection