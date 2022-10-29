@extends('Agent.agentaccount')


@section('content')

<div class="container">
    <div class="row">
        <div class="card bg-light" style="height: 20rem; background-image: url('/assets/bgimage.jpg');">
         <!-- <div class="responsive" style="padding-left: 584px; padding-top: 173px;"> -->
            <div class="responsive">
               <img class="rounded-circle" style="width: 5.7rem;" src="/assets/profile.jpg" alt="profile" >
         </div>
        </div>
    </div>
    <br>
</div>
    <div class="container bg-light">
        <div class="row" style="padding: 10px;">
                <div class="col-5">
                    <h5>Account Information</h5>
                    <form action="">
                        <label>Username</label>
                        <input type="text" class="form-control w-100" name="" id="">
                        <label>Firstname</label>
                        <input type="text" class="form-control w-100" name="" id="">
                        <label>LastName</label>
                        <input type="text" class="form-control w-100" name="" id="">
                        <label>Gmail</label>
                        <input type="text" class="form-control w-100" name="" id="">
                        <label>Password</label>
                        <input type="text" class="form-control w-100" name="" id="">
                    </form>
                </div>
            

                <div class="col-7">
                  <div class="card w-100" style="height: 25rem;">
                    <div class="row" style="padding: 10px;">
                        <div class="col-6">
                    
                        </div>
                        <div class="col-6">
                        <form action="" method="">
                            <label>Username</label>
                            <input type="text" class="form-control w-100" name="" id="">
                            <label>Firstname</label>
                            <input type="text" class="form-control w-100" name="" id="">
                            <label>LastName</label>
                            <input type="text" class="form-control w-100" name="" id="">
                            <label>Gmail</label>
                            <input type="text" class="form-control w-100" name="" id="">
                            <label>Password</label>
                            <input type="text" class="form-control w-100" name="" id="">
                        </form>
                        <br>
                        <button class="btn btn-dark">Update</button>
                        <button class="btn btn-primary">Cancel</button>
                         </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
@endsection