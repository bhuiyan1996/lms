@extends('backend.master')
@section('backend_content')

<h1>Borrow</h1>

<form action="{{route('store.borrow')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="formGroupExampleInput">Reader Id: </label>
        <input name="reader" type="number" class="form-control" id="formGroupExampleInput" placeholder="Enter Reader Id">
    </div>

    <div class="form-group">
        <label for="bookname">Book Name: </label>
        <select class="form-select" aria-label="Default select example" id="bookname" name="book">
                <option selected>Select Book</option>
                @foreach($books as $book)
                <option value="{{$book->id}}">{{$book->name}}</option>
                @endforeach
            </select>
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">Retune Date: </label>
        <input name="date" type="date" class="form-control" id="formGroupExampleInput" placeholder="Enter Return Date">
    </div>

    <button class="btn btn-success" >Submit</button>
</form>
    @endsection