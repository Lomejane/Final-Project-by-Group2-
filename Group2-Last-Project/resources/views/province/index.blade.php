
@extends ('layouts.app')

@section('content')
<div Class="container-fluid justify-content-center align-items-center pt-2" style="margin-left:auto; margin-right:auto ">
    <h1 Class="justify-content-center align-items-center" style="font-family: cursive; nfont-size:60px; text-align: center">Search Properties</h1>
    <div Class="row p-2 mx-2 d-flex flex-row flex-wrap text-align-center justify-content-center align-items-center xbg-primary" style="justify-content: center; align-items:center; text-align:center" >
    <form action="/province" method="post">
        @csrf
      <p>
      <select class="btn bg-light" name="province" id="province" style="width:200px; margin-right: 10px; margin-bottom:5px; border: solid blue; border-radius:15px">
        <option value="All">Select Province</option>
        @foreach($province as $item)
          <option value={{($item->province_description)}}>{{(Str::title($item->province_description))}}</option>
        @endforeach;
        {{-- <option value="NEGROS ORIENTAL">Negros Oriental</option>
        <option value="Misamis Oriental">Misamis Oriental</option> --}}
      </select>
      <select class="btn bg-light" name="city" id="city_municipality" value="Try" style="width:200px; margin-right:10px; margin-bottom:5px; border: solid blue;  border-radius:15px">
        <option value="All">Select City/Municipality</option>
        @foreach($province as $item)
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

@endsection