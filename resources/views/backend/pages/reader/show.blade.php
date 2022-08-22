@extends('backend.master')

@section('backend_content')





    <div class="form-group">
        <label for="formGroupExampleInput">Reader Name: </label>
        <h3>{{$reader->name}}</h3>
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">Id: </label>
        <h3>{{$reader->id}}</h3>
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">Phone No: </label>
        <h3>{{$reader->phone}}</h3>
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">Emile: </label>
        <h3>{{$reader->email}}</h3>
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">Address: </label>
        <h3>{{$reader->address}}</h3>
    </div>

    <div class="form-group">
        <label for="gender">Gender: </label>
        <h3>{{$reader->gender}}</h3>
    </div>




@endsection