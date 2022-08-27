@extends('backend.master')
@section('backend_content')

<h1>Add Reader</h1>

<form action="{{route('update.reader',$reader->id)}}" method="post">
    @csrf
    <div class="form-group">
        <label for="formGroupExampleInput">Reader Name: </label>
        <input name="reader_name" type="text" class="form-control" value="{{$reader->name}}" require>
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">Phone No: </label>
        <input name="reader_phn" type="Number" class="form-control" value="{{$reader->phone}}" require>
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">Emile: </label>
        <input name="reader_email" type="email" class="form-control" value="{{$reader->email}}" require>
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">Address: </label>
        <input name="reader_address" type="text" class="form-control"value="{{$reader->address}}" require>
    </div>

   
    <button type="submit" class="btn btn-success" >Submit</button>
</form>

    @endsection