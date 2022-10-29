@extends('Layout_Main.app')

@section('content')
    <h1>Home Page Property List</h1>
    <hr>
    <br>
    @foreach ($HomePageProperties as $item)
    <div class="card p-5">
        <h2>{{$item->propertyType}}</h2>
        <hr>
        <p>Property Location: {{$item->PropertyLocation}}</p>
        <p>Price: {{$item->propertyPrice}}</p>
        <p>Property Description{{$HomePageProperties->PropertyDescription}}</p>
        {{-- <a class="btn btn-dark" href="/HomePageProperties/{{$item->id}}">See Details</a> --}}
        <a class="btn btn-dark" href="">Edit</a>
        <br>
        <a class="btn btn-dark" href="" >Delete</a>
    </div>
    @endforeach
    <div>
        {{$HomePageProperties->links()}}
    </div>
@endsection
