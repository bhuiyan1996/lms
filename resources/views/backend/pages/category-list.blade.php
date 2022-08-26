@extends('backend.master')

@section('backend_content')

<div class="mx-5 my-5">
<a href="{{route('category.create')}}" class="btn btn-primary">Create Category</a>
</div>

<div class="row mx-5 my-3">
<h1>Category List</h1>
<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col">SL</th>
            <th scope="col">Category Name</th>
            <th scope="col">Category Details</th>
            <th scope="col">Action</th>

        </tr>
    </thead>
    <tbody>


    @foreach($category_data as $key=>$cat)
        <tr>
          <td>{{$key+1}}</td>
          <td>{{$cat->name}}</td>
          <td>{{$cat->description}}</td>
            <td>
                <a class="btn btn-primary" href="{{route('category.edit',$cat->id)}}">Edit</a>
                <!-- <a class="btn btn-success" href="">View</a> -->
                <!-- <a  class="btn btn-danger" href="">Delete</a> -->
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
{{$category_data->links()}}

@endsection
