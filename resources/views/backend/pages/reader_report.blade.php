@extends('backend.master')

@section('backend_content')

<div class="mx-5 my-5">
<a href="{{route('form.reader')}}" class="btn btn-primary">Add Reader</a>
<button class="btn btn-success" onclick="printdiv()">Print</button></h1> 
</div>
<div class="row mx-5 my-3 " id="printTable">
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

     
      
    </tr>

    @endforeach
  </tbody>
</table>



</div>
<script>
    function printdiv() {
        let printContents = document.getElementById('printTable').innerHTML;
        let originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }

</script>

@endsection