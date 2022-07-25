@extends('backend.master')

@section('backend_content')
<h1> Reader List</h1>

<a href="{{route('form.reader')}}" class="btn btn-primary">Add Reader</a>


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Id</th>
      <th scope="col">Email</th>
      <th scope="col">Phone No</th>
      <th scope="col">Address</th>
      <th scope="col">Gender</th>
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
    </tr>

    @endforeach
  </tbody>
</table>

@endsection