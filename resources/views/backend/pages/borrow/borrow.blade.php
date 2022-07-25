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
    
  </tbody>
</table> 


@endsection