@extends('backend.master')

@section('backend_content')

<table class="mx-5">

<tr> 
<th> <a href="{{route('form.book')}}" class="btn btn-primary">Add book</a> </th>
<th><pre>                                                                                                     
        
      </pre></th>
<th> <div class="hero__search__form">
                        <form action="{{route('search.book')}}" method="get">
                            <div class="hero__search__categories">
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input name="name" type="text" placeholder="What do yo u need?">
                            <button type="submit" class="btn btn-primary">my search</button>
                        </form></div>
        </th>
</tr>
 

</table>

<div class="row mx-5 my-3" id="printTable">
<h1><b>Book List</b>  <button class="btn btn-success" onclick="printdiv()">Print</button> </h1>
<table class="table table-striped table-dark"  >
    <thead>
        <tr>
            <th scope="col">ID</th>

            <th scope="col">Name</th>
            <th scope="col">Category</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            
            <th scope="col">Available</th>
            <th scope="col">Image</th>
    

        </tr>
    </thead>
    <tbody>
@foreach($books as $data)
        <tr>
            <td scope="col">{{$data->id}}</td>
            <td scope="col">{{$data->name}}</td>
            <td scope="col">{{optional($data->getCategory)->name}}</td>
            <td scope="col">{{$data->price}}</td>
            <td scope="col">{{$data->quantity}}</td>
            <td scope="col">{{$data->total}}</td>
            
            <td scope="col">
                <img style="width:60px;" src="{{url('/uploads/book/'.$data->image)}}" alt="" srcset="">
             </td>
            
            

        </tr>
        @endforeach
    </tbody>
</table>
</div>

{{$books->links()}}

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
