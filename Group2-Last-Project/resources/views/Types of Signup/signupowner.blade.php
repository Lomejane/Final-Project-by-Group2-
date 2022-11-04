<title>Signup as Owner</title>
<link href="{{asset('/css/signupowner.css')}}" rel="stylesheet">
@extends('layouts.app')

@section('content')

    <section id="sg-up">
        <div class="bg">

        </div>
    </section>
        <section id="signup">
            <div class="row d-flex justify-content-center">
                
                    <div class="card" style="width: 25rem; padding: 10px;">
                        <form action="">
                            <h5>Create Your Owners Account</h5>
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
        </section>
@endsection