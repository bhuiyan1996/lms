@extends('backend.master')

@section('backend_content')

<table class="table">
  <thead>
  <h1>Borrow List</h1>

  <a href="{{route('form.borrow')}}" class="btn btn-success">Borrow Form</a>

    <tr>
      <th scope="col">Reader Id</th>
      <th scope="col">Reader Name</th>
      <th scope="col">Book Name</th>
      <th scope="col">Return Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach($borrows as $data)
      <tr>
          <td>{{optional($data->getreader)->id}}</td>
          <td>{{optional($data->getreader)->name}}</td>
          <td>{{optional($data->getBook)->name}}</td>
          <td>{{$data->date}}</td>
          
          <td>
                <a class="btn btn-danger" href="{{route('delete.borrow',$data->id)}}">Delete</a>
                
            </td>
      </tr>
    @endforeach
  </tbody>
</table> 


@endsection