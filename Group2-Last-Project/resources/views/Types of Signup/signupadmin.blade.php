@extends('layouts.app')

    @section('content')

    <div class="container" style="width:100%; border: solid black 3px;">
        <div class="row justify-content-start">
            <div class="col-6" style="border: solid black 3px; background-image: url(/assets/dusit_residence_hero.jpg);     background-repeat: no-repeat;
              background-size: cover; height: 100vh;">
                  <!-- <img src="dusit_residence_hero.jpg" alt="" style=" width: 40rem; height: 100vh;
                  background-repeat: no-repeat;
                  background-size: cover;"> -->
            </div>
              
            <div class="col-6 " style="border: rgb(23, 0, 128) solid 3px;  padding: 10px; margin: none;">
                <br><br><br> <br>
                <div class="card" style="width: 25rem; padding: 10px;">
               
                    <form action="">
                        <h5>Create Your Account</h5>
                        <label for="">Username</label>
                            <input type="text" class="form-control" name="" id="" placeholder="create username">
                            <label for="">Firstname</label>
                            <input type="text" class="form-control" name="" id="" placeholder="firstname">
                            <label for="">Lastname</label>
                            <input type="text" class="form-control" name="" id="" placeholder="lastname">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="" id="" placeholder="email">
                            <label for="">Password</label>
                            <input type="text" class="form-control" name="" id="" placeholder="create password">
                            <label for="">Password</label>
                            <input type="text" class="form-control" name="" id="" placeholder="confirm password">
                    </form>
                    <br>
                    <button class="btn btn-dark btn-lg w-100">Submit</button>
                </div>
            </div>
        </div>
    </div>
@endsection