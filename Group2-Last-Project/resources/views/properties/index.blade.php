<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
    crossorigin="anonymous"
    />
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
    <link  href="{{asset('build/assets/app.css')}}" rel="stylesheet">
    <link href="{{secure_asset('build/assets/app.css')}}" rel="stylesheet">
    {{-- <link href="{{secure_asset('build/assets/properties.css')}}" rel="stylesheet"> --}}
    <link href="{{asset('css/properties.css')}}" rel="stylesheet">

    <script src="{{secure_asset('build/assets/app.css')}}"></script>
</head>


@extends ('layouts.app')

@section('content')


<body style="background-color: #FAD9C1">
    
<div Class="container-fluid justify-content-center align-items-center pt-2" style="margin-left:auto; margin-right:auto ">
    <h1 Class="justify-content-center align-items-center" style="font-family: cursive; nfont-size:60px; text-align: center">Search Properties</h1>
    <div Class="row p-2 mx-2 d-flex flex-row flex-wrap text-align-center justify-content-center align-items-center xbg-primary" style="justify-content: center; align-items:center; text-align:center" >
    <form action="" method="">
      <p>
      <select class="btn bg-light" name="province" id="province" style="width:200px; margin-right: 10px; margin-bottom:5px; border: solid blue; border-radius:15px">
        <option value="All">Select Province</option>
        @foreach($properties as $item)
          <option value={{($item->province_description)}}>{{(Str::title($item->province_description))}}</option>
        @endforeach;
        {{-- <option value="NEGROS ORIENTAL">Negros Oriental</option>
        <option value="Misamis Oriental">Misamis Oriental</option> --}}
      </select>
      <select class="btn bg-light" name="city" id="city_municipality" value="Try" style="width:200px; margin-right:10px; margin-bottom:5px; border: solid blue;  border-radius:15px">
        <option value="All">Select City/Municipality</option>
        @foreach($properties as $item)
          <option value={{($item->city_mun_description)}}>{{(Str::title($item->city_mun_description))}}</option>
        @endforeach;

        {{-- <option value="Cebu City">Cebu City</option>
        <option value="Dumaguete City">Dumaguete City</option>
        <option value="Cagayan De Oro City">Cagayan De Oro City</option> --}}
      </select>
      <button class="btn" type="submit" style="width:200px; border: solid blue;  border-radius:15px; background-color:#FE9C8F">Submit</button>
      </p>
    </form>
</div>
<br />    
<div>
    <div Class="row">
        <div Class="propertiesList " >
            @foreach ($properties as $item)
                <div Class="propertiesItem">
                  <div class="bg-success" style="background-image: url({{'Image/'. $item->images}})"> 
                  {{-- <img src="{{'Image/'. $item->images}}" Class="w-100" style="size:vmax">                       {{$item->property_image_id}} --}}
                 </div>
                {{-- {/* <div style={{ backgroundImage:'url(${image})'}}> </div> */}
                    {{-- <div class="card p-5"> --}}
                        <div Class='card-body'>
                            <h3>{{$item->property_title}}</h3>
                            <p>Price:{{number_format($item->property_price, 2)}}</p>
                            {{-- {Number(Item.price).toLocaleString('en-US')} --}}
                            <p>Location: {{$item->city_mun_description}}, {{$item->province_description}}</p>
                            {{-- <p>Details: {{$item->property_description}}</p> --}}
                            <br>
                        </div>
                        <div Class="card-footer">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color:black; border-radius: 10px " >
                            <b>DETAILS</b>
                            </Button>
                        </div>
                    {{-- </div> --}}
                </div>
            @endforeach
    </div>
</div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  
      </div>

    {{-- {{$properties}}; --}}
    
</body>
@endsection

</html>