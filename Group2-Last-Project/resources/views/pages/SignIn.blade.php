@extends('layouts.app')

@section('content')
<main style="height: 80vh">
  <br><br> <br><br>
  <div class="container">
      <div class="card" style="width: 65rem; padding: 10px;">
          <br> <br>
          <div class="row">
              <h3>Select Sign In Type</h6> <br>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus sunt repellendus at quidem odit reiciendis, facere quasi fuga voluptatem? Quas in aliquam reiciendis provident. Suscipit vel culpa aliquam dolore hic.
              <br><br>
              <div class="col">
                  <div class="btn-active">
                      <!-- <input type="radio" class="form-control" name="" id="" placeholder="Tect"> -->
                      <button  class="btn btn-light" style="width: 10rem; height: 10rem;">
                        <a href="/signinowner"><span>
                          <img src="/assets/user.png" alt="" width="80rem">
                        </span> <br>
                        <span style="font-size: 25px;">Owner</span></a>
                    </button>
                  </div>
              </div>
              <div class="col">
                  <div class="btn-active">
                      <!-- <input type="radio" class="form-control" name="" id="" placeholder="Tect"> -->
                      <button  class="btn btn-light" style="width: 10rem; height: 10rem;">
                        <a href="/signinagent"><span>
                          <img src="/assets/realtor.png" alt="" width="80rem">
                        </span> <br>
                        <span style="font-size: 25px;">Agent</span></a>
                    </button>
                  </div>
              </div>
              <div class="col">
                  <div class="btn-active">
                      <!-- <input type="radio" class="form-control" name="" id="" placeholder="Tect"> -->
                      <button  class="btn btn-light" style="width: 10rem; height: 10rem;">
                        <a style="text-decoration: none" href="/signinadmin"><span>
                          <img src="/assets/owner.png" alt="" width="80rem">
                        </span> <br>
                        <span style="font-size: 25px;">Admin</span></a>
                    </button>
                  </div>
              </div>
              
          </div>
      </div>
  </div>
</main>

{{-- <div class="container w-100" style="border: solid red 3px;">
  <div class="row">
    <div class="col-sm"> --}}
      {{-- <img src="../assets/for_buy.jpg" alt="Property in Manila" style="height: 90vh;"> --}}
    {{-- </div>
    <div class="col-sm">
      One of three columns
      {{-- Card --}}
      {{-- <div class="card" style="padding: 15px; min-height: 30vh;">
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
</main> --}} 
@endsection