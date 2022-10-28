@extends('Admin.adminsidebar')


@section('content')
    <br><br>
    <div class="container align-items-center bg-light w-50" style="padding: 20px;">
        <div class="row">
            <div class="col">
                <form action="" method="">
                    <h3>User Photo</h3> 
                    <p>Select File to Upload</p>
                    <input type="file" class="form-control" name="file" id="" style="height: 12rem;">
                </form>
            </div>
            <div class="col bg-light">
                <h3>Create new User</h3>
                <form action="" method="">
                    <label>Username</label><br>
                    <input type="text" classname="form-control" name="" id="" style="min-width: 25rem;">
                    <br>
                    <label>Password</label>
                    <br>
                    <input type="text" classname="form-control" name="" id="" style="min-width: 25rem;">
                    <br>
                    <label>Firstname</label><br>
                    <input type="text" classname="form-control" name="" id="" style="min-width: 25rem;">
                    <br>
                    <label>Lastname</label><br>
                    <input type="text" classname="form-control" name="" id="" style="min-width: 25rem;">
                    <br>
                    <label>UserType</label><br>
                    <input type="text" classname="form-control" name="" id="" style="min-width: 25rem;">
                </form>
            </div>
        </div>
        <button class="btn btn-dark btn-lg">Cancel</button>
        <button class="btn btn-success btn-lg">Save</button>
    </div>
@endsection