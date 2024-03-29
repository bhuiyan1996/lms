@extends('backend.master')
@section('backend_content')
    <h1>Update Book Info</h1>
    <div>
        <form action="{{route('book.update',$book->id)}}" method="POST">
            @csrf
            
            <label for="">Book Name</label>
            <input type="text" class="form-control" name="name" value="{{$book->name}}" required>
            <label for="">Book Price</label>
            <input type="number" class="form-control" name="book_price" value="{{$book->price}}" required>
            <label for="">Book Qty</label>
            <input type="number" class="form-control" name="book_qt"  value="" required>
            <!-- <label for="">Available</label> -->
            <!-- <input type="number" class="form-control" name="book_qty"  value=""> -->

            <!-- <label for="">Book Desc</label>
            <input type="text" class="form-control" name="book_desc" value="{{$book->description}}"> -->

            

            <button type="submit" class="btn btn-success">Create</button>

        </form>
    </div>
    
@endsection
