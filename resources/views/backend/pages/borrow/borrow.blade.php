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
    </tr>
  </thead>
  <tbody>

    @foreach($borrows as $data)
      <tr>
          <td>{{$data->reader_id}}</td>
          <td>{{$data->reader_name}}</td>
          <td>{{optional($data->getBook)->name}}</td>
          <td>{{$data->date}}</td>
      </tr>
    @endforeach
  </tbody>
</table> 


@endsection