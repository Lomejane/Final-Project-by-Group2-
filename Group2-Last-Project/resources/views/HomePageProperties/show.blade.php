@extends('Layout_Main.app')

@section('content')
    <h1>{{$HomePageProperties->PropertyType}}</h1>
    <hr>
    <div class="card-5">
        <p>Description: {{$HomePageProperties->PropertyDescription}}</p>
        <p>Property Type: {{$HomePageProperties->PropertyType}}</p>
        <p>Porperty Price: {{$HomePageProperties->PropertyPrice}}</p>
        <a class="btn btn-dark" href="/HomePageProperties/{{$HomePageProperties->id}}/edit">Edit</a>
        <br>
        <a class="btn btn-dark" href="">Delete</a>
    </div>
@endsection