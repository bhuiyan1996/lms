@extends('backend.master')
@section('backend_content')

<h1>Add Reader</h1>

<form action="{{route('store.reader')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="formGroupExampleInput">Reader Name: </label>
        <input name="reader_name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Reader Name">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">Id: </label>
        <input name="reader_id" type="Number" class="form-control" id="formGroupExampleInput" placeholder="Enter Reader Numbert">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">Phone No: </label>
        <input name="reader_phn" type="Number" class="form-control" id="formGroupExampleInput" placeholder="Enter Reader Id">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">Emile: </label>
        <input name="reader_email" type="email" class="form-control" id="formGroupExampleInput" placeholder="Enter Reader email">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">Address: </label>
        <input name="reader_address" type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Reader Address">
    </div>

    <div class="form-group">
        <label for="gender">Gender: </label>
        <select name="gender" id="gender">
            <option selected disable>Select your Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success" >Submit</button>
</form>
    @endsection