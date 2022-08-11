@extends('backend.master')

@section('backend_content')


<h1> Book List</h1>

<a href="{{route('form.book')}}" class="btn btn-primary">Create book</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>

            <th scope="col">Name</th>
            <th scope="col">Category</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            
            <th scope="col">Available</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>

        </tr>
    </thead>
    <tbody>
@foreach($books as $data)
        <tr>
            <td scope="col">{{$data->id}}</td>
            <td scope="col">{{$data->name}}</td>
            <td scope="col">{{optional($data->getCategory)->name}}</td>
            <td scope="col">{{$data->price}}</td>
            <td scope="col">{{$data->quantity}}</td>
            <td scope="col">{{$data->total}}</td>
            
            <td scope="col">
                <img style="width:60px;" src="{{url('/uploads/book/'.$data->image)}}" alt="" srcset="">
             </td>
            
            <td>
                <!-- <a class="btn btn-primary" href="{{route('delete.book', $data->id)}}">Delete</a> -->
                <a class="btn btn-success" href="{{route('view.book', $data->id)}}">View</a>
                <a  class="btn btn-danger" href="{{route('book.edit', $data->id)}}">Edit</a>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
{{$books->links()}}
@endsection
