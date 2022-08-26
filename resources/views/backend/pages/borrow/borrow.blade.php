@extends('backend.master')

@section('backend_content')



  <table class="mx-5">
      <br>
      <th> <a href="{{route('form.borrow')}}" class="btn btn-primary">Borrow Form</a> 
    </th>
      <th><pre>                                                                                                     
        
      </pre></th>
      <th>
          <div class="hero__search__form">
              <form action="{{route('search')}}" method="get">
                  <div class="form-outline">
                      <span class="arrow_carrot-down"></span>
                  </div>
                  <input name="date" type="text" placeholder="Search for date">
                  <button type="submit" class="btn btn-primary">my search</button>
              </form>
          </div>
      </th>

  </table>

  
<div class="row mx-5 my-3" id="printTable">
<h1><b class="mx-3 my-4">Borrow List</b>  <button class="btn btn-success" onclick="printdiv()">Print</button></h1> 
      

  <table class="table table-striped table-dark">
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
