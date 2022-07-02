@extends('backend.master')

@section('backend_content')
<h1> Book List</h1>
{{-- @dd($book); --}}
<a href="{{route('form.book')}}" class="btn btn-primary">Create book</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Category</th>
            <th scope="col">Price</th>
            <th scope="col">Qty</th>
            <th scope="col">Action</th>

        </tr>
    </thead>
    <tbody>
@foreach($books as $data)
        <tr>
            <td scope="col">1</td>
            <td scope="col">{{$data->name}}</td>
            <td scope="col">{{$data->category_id}}</td>
            <td scope="col">{{$data->price}}</td>
            <td scope="col">{{$data->quantity}}</td>
            <td scope="col">
                <a href="">View</a>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection
