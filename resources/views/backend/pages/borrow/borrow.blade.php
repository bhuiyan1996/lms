@extends('backend.master')

@section('backend_content')

<table>
<h1><b>Borrow List</b></h1>
<tr>
<th> <a href="{{route('form.borrow')}}" class="btn btn-success">Borrow Form</a> </th>

<th> <div class="hero__search__form">
                        <form action="{{route('search')}}" method="get">
                            <div class="form-outline">
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input name="date" type="text" placeholder="What do yo u need?">
                            <button type="submit" class="btn btn-primary">my search</button>
                        </form></div>
</th>
  
</table>

<table class="table table-sm table-dark"> 
<thead>
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