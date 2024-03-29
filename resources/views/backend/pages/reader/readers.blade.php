@extends('backend.master')

@section('backend_content')

<div class="mx-5 my-5">
<a href="{{route('form.reader')}}" class="btn btn-primary">Add Reader</a>
</div>
<div class="row mx-5 my-3">
<h1> Reader List</h1>
<table class="table table-striped table-dark" >
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Name</th>
      <th scope="col">Id</th>
      <th scope="col">Email</th>
      <th scope="col">Phone No</th>
      <th scope="col">Address</th>
      <th scope="col">Gender</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <tr>

    @foreach($readers as $key=>$data)
    <!-- migration column name => form name  -->
      <td scope="col">{{$key+1}}</th>
      <td scope="col">{{$data->name}}</th>
      <td scope="col">{{$data->id}}</th>
      <td scope="col">{{$data->email}}</th>
      <td scope="col">{{$data->phone}}</th>
      <td scope="col">{{$data->address}}</th>
      <td scope="col">{{$data->gender}}</th>
      <td scope="col">{{$data->status}}</th>

      <td>
                <a class="btn btn-primary" href="{{route('view.reader', $data->id)}}">View</a>
                <a class="btn btn-success" href="{{route('edit.reader', $data->id)}}">Update</a>
                <!-- <a  class="btn btn-danger" href="{{route('delete.reader', $data->id)}}">Delete</a> -->
      </td>
      
    </tr>

    @endforeach
  </tbody>
</table>
</div>

@endsection