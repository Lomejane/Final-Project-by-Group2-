@extends('Layout_Main.app')

@section('content')
<div>
    <h1>Edit Form</h1>
    <div class="card w-50">
    <form action="/HomePageProperties/{{$HomePageProperties->id}}" method="post">
        {!! csrf_field() !!}
        @method("PATCH");
        <input type="hidden" class="form-control" name="id" value="{{$HomePageProperties->id}}">
        <label>PropertyDescription:</label>
        <input type="text" class="form-control" name="PropertyDescription" value="{{$HomePageProperties->PropertyDescription}}">
        <br>
        <label>Location:</label>
        <input type="text" class="form-control" name="PropertyLocation" value="{{$HomePageProperties->PropertyLocation}}">
        <br>
        <label>Price:</label>
        <input type="text" class="form-control" name="PropertyPrice" value="{{$HomePageProperties->PropertyPrice}}">
        <br>
        <input class="btn btn-dark" type="submit" value="Edit Information">
    </form>
    </div>
</div>
@endsection