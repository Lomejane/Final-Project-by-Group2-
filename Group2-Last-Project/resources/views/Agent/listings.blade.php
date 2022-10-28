@extends('Agent.agentaccount')

@section('content')

    <div class="container bg-light">
    <div class="row">
        <div class="row">
            <h3 class="text">Property List</h3> <br>
            <div class="col">
                <button class="btn btn-dark btn-lg" style="width: 18rem;"><a href="" style="text-decoration: none; color:aliceblue">Check Properties</a></button>
            </div>
            <div class="col">
                <input type="text" class="form-control w-100" name="search" id="" placeholder="search">
            </div>
        </div>
        <table class="table table-striped table table-hover w-100 align-items-center">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Property Type</th>
        <th scope="col">Description</th>
        <th scope="col">Property Image</th>
        <th scope="col">No.Bedroom/s</th>
        <th scope="col">Location</th>
        <th scope="col">Price</th>
        <th scope="col">Name of owner</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Apartment</td>
        <td>Sample Description</td>
        <td>Sample Image</td>
        <td>3 Bedrooms</td>
        <td>Pinas</td>
        <td>3M</td>
        <td>WiLliam Yu</td>
        <td>
          <a href="">Sold</a>
        </td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Apartment</td>
        <td>Sample Description</td>
        <td>Sample Image</td>
        <td>3 Bedrooms</td>
        <td>Pinas</td>
        <td>3M</td>
        <td>WiLliam Yu</td>
        <td>
          <a href="">Available</a>
        </td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Apartment</td>
        <td>Sample Description</td>
        <td>Sample Image</td>
        <td>3 Bedrooms</td>
        <td>Pinas</td>
        <td>3M</td>
        <td>WiLliam Yu</td>
        <td>
          <a href="">Available</a>
        </td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Apartment</td>
        <td>Sample Description</td>
        <td>Sample Image</td>
        <td>3 Bedrooms</td>
        <td>Pinas</td>
        <td>3M</td>
        <td>WiLliam Yu</td>
        <td>
          <a href="">Available</a>
        </td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Apartment</td>
        <td>Sample Description</td>
        <td>Sample Image</td>
        <td>3 Bedrooms</td>
        <td>Pinas</td>
        <td>3M</td>
        <td>WiLliam Yu</td>
        <td>
          <a href="">Available</a>
        </td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Apartment</td>
        <td>Sample Description</td>
        <td>Sample Image</td>
        <td>3 Bedrooms</td>
        <td>Pinas</td>
        <td>3M</td>
        <td>WiLliam Yu</td>
        <td>
          <a href="">Available</a>
        </td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Apartment</td>
        <td>Sample Description</td>
        <td>Sample Image</td>
        <td>3 Bedrooms</td>
        <td>Pinas</td>
        <td>3M</td>
        <td>WiLliam Yu</td>
        <td>
          <a href="">Available</a>
        </td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Apartment</td>
        <td>Sample Description</td>
        <td>Sample Image</td>
        <td>3 Bedrooms</td>
        <td>Pinas</td>
        <td>3M</td>
        <td>WiLliam Yu</td>
        <td>
          <a href="">Available</a>
        </td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Apartment</td>
        <td>Sample Description</td>
        <td>Sample Image</td>
        <td>3 Bedrooms</td>
        <td>Pinas</td>
        <td>3M</td>
        <td>WiLliam Yu</td>
        <td>
          <a href="">Available</a>
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