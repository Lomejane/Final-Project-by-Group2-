@extends('Admin.adminsidebar')


@section('content')
    <div class="container bg-light">
    <div class="row">
        <div class="row">
            <h3 class="text">User Manangement</h3> <br>
            <div class="col">
                <button class="btn btn-dark btn-lg" style="width: 18rem;">Add New User</button>
            </div>
            <div class="col">
                <input type="text" class="form-control w-100" name="search" id="" placeholder="search">
            </div>
        </div>
        <table class="table table-striped table table-hover w-100 align-items-center">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Username</th>
        <th scope="col">Firstname</th>
        <th scope="col">Lastname</th>
        <th scope="col">UserType</th>
        <th scope="col">Gmail</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Sample User</td>
        <td>Sample First Name</td>
        <td>Sample Last Name</td>
        <td>Owner</td>
        <td>sample@gmail.com</td>
        <td><a href="">Update</a>
            <a href="">Delete</a>
        </td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Sample User</td>
        <td>Sample First Name</td>
        <td>Sample Last Name</td>
        <td>Owner</td>
        <td>sample@gmail.com</td>
        <td><a href="">Update</a>
            <a href="">Delete</a>
        </td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Sample User</td>
        <td>Sample First Name</td>
        <td>Sample Last Name</td>
        <td>Owner</td>
        <td>sample@gmail.com</td>
        <td><a href="">Update</a>
            <a href="">Delete</a>
        </td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Sample User</td>
        <td>Sample First Name</td>
        <td>Sample Last Name</td>
        <td>Owner</td>
        <td>sample@gmail.com</td>
        <td><a href="">Update</a>
            <a href="">Delete</a>
        </td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Sample User</td>
        <td>Sample First Name</td>
        <td>Sample Last Name</td>
        <td>Owner</td>
        <td>sample@gmail.com</td>
        <td><a href="">Update</a>
            <a href="">Delete</a>
        </td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Sample User</td>
        <td>Sample First Name</td>
        <td>Sample Last Name</td>
        <td>Owner</td>
        <td>sample@gmail.com</td>
        <td><a href="">Update</a>
            <a href="">Delete</a>
        </td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Sample User</td>
        <td>Sample First Name</td>
        <td>Sample Last Name</td>
        <td>Owner</td>
        <td>sample@gmail.com</td>
        <td><a href="">Update</a>
            <a href="">Delete</a>
        </td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Sample User</td>
        <td>Sample First Name</td>
        <td>Sample Last Name</td>
        <td>Owner</td>
        <td>sample@gmail.com</td>
        <td><a href="">Update</a>
            <a href="">Delete</a>
        </td>
      </tr><tr>
        <th scope="row">3</th>
        <td>Sample User</td>
        <td>Sample First Name</td>
        <td>Sample Last Name</td>
        <td>Owner</td>
        <td>sample@gmail.com</td>
        <td><a href="">Update</a>
            <a href="">Delete</a>
        </td>
      </tr>
    </tbody>
        </table>
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-end">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
    </div>
</div>

@endsection