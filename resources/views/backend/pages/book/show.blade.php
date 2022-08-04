@extends('backend.master')

@section('backend_content')

        <label for="">Id</label>
        <h3>{{$book->id}}</h3>

        <label for="">Book Name</label>
        <h3>{{$book->name}}</h3>


        <label for="">Book Price</label>
        <h3>{{$book-> price}}</h3>
        
        <label for="">Book Quantity</label>
        <h3>{{$book->quantity}}</h3>

        <label for="">Available</label>
        <h3>Null</h3>

            <!-- <input type="text" class="form-control" value="{{$book->name}}" readonly>
            <label for="">Book Price</label>
            <input type="number" class="form-control" value="{{$book-> category_id}}" readonly>
            <label for="">Book Qty</label>
            <input type="number" class="form-control" value="{{$book-> price}}" readonly>
            <label for="">Book Desc</label>
            <input type="text" class="form-control" value="{{$book->description}}" readonly> -->


@endsection