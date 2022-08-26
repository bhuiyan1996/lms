@extends('backend.master')
@section('backend_content')

<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style >
.gradient-custom {
/* fallback for old browsers */
background: #6a11cb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
}
</style>

</head>
<body>

<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Add Reader</p>

                <div>
      
<form action="{{route('store.reader')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="formGroupExampleInput">Reader Name: </label>
        <input name="reader_name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Reader Name">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">Id: </label>
        <input name="reader_id" type="Number" class="form-control" id="formGroupExampleInput" placeholder="Enter Reader Numbert">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">Phone No: </label>
        <input name="reader_phn" type="Number" class="form-control" id="formGroupExampleInput" placeholder="Enter Reader Id">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">Emile: </label>
        <input name="reader_email" type="email" class="form-control" id="formGroupExampleInput" placeholder="Enter Reader email">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">Address: </label>
        <input name="reader_address" type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Reader Address">
    </div>

    <div class="form-group">
        <label for="gender">Gender: </label>
        <select name="gender" id="gender">
            <option selected disable>Select your Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success" >Submit</button>
</form>
    </div>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>

    @endsection