@extends('backend.master')
@section('backend_content')
    <h1>Create New Book</h1>
    <div>
        <form action="{{route('store.book')}}" method="POST">
            @csrf
            <label for="">Book Name</label>
            <input type="text" class="form-control" name="book_name">
            <label for="">Book Price</label>
            <input type="number" class="form-control" name="book_price">
            <label for="">Book Qty</label>
            <input type="number" class="form-control" name="book_qty">
            <!-- <label for="">Book Desc</label>
            <input type="text" class="form-control" name="book_desc"> -->

            <select class="form-select" aria-label="Default select example" name="category">
                <option selected>Select Category</option>
                @foreach($categories as $data)
                <option value="{{$data->id}}">{{$data->name}}</option>
                @endforeach

            </select>

            <button type="submit" class="btn btn-success">Create</button>

        </form>
    </div>
    
@endsection
