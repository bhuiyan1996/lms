@extends('backend.master')
@section('backend_content')
    <h1>Create New Book</h1>
    <div>
        <form action="{{route('book.update')}}" method="POST">
            @csrf
            
            <label for="">Book Price</label>
            <input type="number" class="form-control" name="book_price">
            <label for="">Book Qty</label>
            <input type="number" class="form-control" name="book_qty">
            <label for="">Book Desc</label>
            <input type="text" class="form-control" name="book_desc">

            

            <button type="submit" class="btn btn-success">Create</button>

        </form>
    </div>
    
@endsection
