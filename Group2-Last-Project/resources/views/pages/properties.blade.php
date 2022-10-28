<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name', 'Default Value')}}</title>
    <link  href="{{asset('build/assets/app.css')}}" rel="stylesheet">
    <link href="{{secure_asset('build/assets/app.css')}}" rel="stylesheet">
    <link href="{{secure_asset('build/assets/properties.css')}}" rel="stylesheet">

    <script src="{{secure_asset('build/assets/app.css')}}"></script>

</head>
<body style="background-color: #FAD9C1">
  {{-- @extends('layout.app')

  @section('content') --}}
{{-- //style=" justify-content: center; align-items: center; font-family: cursive; text-align: center" --}}
  <div Class="container-fluid justify-content-center align-items-center pt-2" style="margin-left:auto; margin-right:auto ">
      <h1 Class="propertiesTitle" >Search Properties</h1>
      <div Class="row px-2 pb-2 mx-2 d-flex flex-row flex-wrap text-center" >
      <form action="" method="">
        <p>
        <label for="province"><b>Select Province:</b> </label>
        <select class="btn bg-light" name="province" id="province" onChange={handleBtns} style="width:200px; margin-right: 10px; margin-bottom:5px; border: solid blue; border-radius:15px">
          <option value="All">All</option>
          <option value="CEBU">Cebu</option>
          <option value="NEGROS ORIENTAL">Negros Oriental</option>
          <option value="Misamis Oriental">Misamis Oriental</option>
        </select>
        <label htmlFor="City"><b>Select City/Municipality:</b> </label>
        <select class="btn bg-light" name="city" id="city_municipality" style="width:200px; margin-right:10px; margin-bottom:5px; border: solid blue;  border-radius:15px">
          <option value="All">All</option>
          <option value="Cebu City">Cebu City</option>
          <option value="Dumaguete City">Dumaguete City</option>
          <option value="Cagayan De Oro City">Cagayan De Oro City</option>
        </select>
        <button class="btn" type="submit" style="width:200px; margin-right:10px;  border: solid blue;  border-radius:15px; background-color:#FE9C8F">Submit</button>
        </p>
      </form>
      </div>

  
        <br />
        <div Class="row">
            <div Class="propertiesList " >
              Cards of properties are displayed here
              
             </div>
      </div>
      <script src="{{secure_asset('build/assets/app.css')}}"></script>
      <main class="py-4">
          @yield('content')
      </main>
    </div>
    {{-- @endsection --}}
</body>
</html>