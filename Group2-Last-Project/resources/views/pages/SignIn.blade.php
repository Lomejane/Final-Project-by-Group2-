@extends('layouts.app')

@section('content')

<div class="container" style="height: 90vh;">
    <div class="row">
        <div class="col-sm" style="border: solid green 3px">
            red
            <img src="" alt="">
        </div>
            <div class="col-sm" style="border: solid green 3px;">
                <div class="card">
                    <br>
              <form action="">
               <h3>Sign in</h3>
               <label for="">Email</label>
                <input type="text" class="form-control" name="" id="" placeholder="Enter email">
                <br>
                <label for="">Password</label>
                <input type="text" class="form-control" name="" id="" placeholder="Password">
                <br>
                <button type="button" class="btn btn-primary btn-lg btn-block">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection