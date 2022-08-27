@extends('backend.master')
@section('backend_content')

<!DOCTYPE html>
<html>

<head>
<style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
</style>
</head>

<body>

    <h1><b> Library Managment System </b></h1>
    
  <img class="center" style="width:200px;" src="{{url('/backend/assets/images.jpg')}}" alt="" srcset=""> 

    <table class="table  ">
  <thead>
    <tr>
      
      <th  scope="col"> <div class="col-md-4 col-lg-4 col-sm-6 ">
                    <div class="card-body bg-warning">
                        <h5 class="card-title text-white bg-dark">Category</h5>
                        <p class="mb-4">
                            <span class="fw-bold">{{\App\Models\Category::count()}}</span>
                        </p>
                    </div>
                </div></th>

      <th scope="col"><div class="col-md-4 col-lg-4 col-sm-6 ">
                    <div class="card-body bg-primary">
                        <h5 class="card-title text-white text-light bg-dark">Book</h5>
                        <p class="mb-4">
                            <span class="fw-bold">{{\App\Models\Book::count()}}</span>
                        </p>
                    </div>
                </div> </th>

                
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><div class="col-md-4 col-lg-4 col-sm-6 ">
                    <div class="card-body bg-info">
                        <h5 class="card-title text-light bg-dark">Reader</h5>
                        <p class="mb-4">
                            <span class="fw-bold">{{\App\Models\Reader::count()}}</span>
                        </p>
                    </div>
                </div></th>
                
      <td><div class="col-md-4 col-lg-4 col-sm-6 ">
                    <div class="card-body bg-danger">
                        <h5 class="card-title text-light bg-dark">Borrow</h5>
                        <p class="mb-4">
                            <span class="fw-bold">{{\App\Models\Borrow::count()}}</span>
                        </p>
                    </div>
                </div</td>

    </tr>

  </tbody>
</table>
</body>

</html>





@endsection
