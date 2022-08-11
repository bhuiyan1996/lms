@extends('backend.master')
@section('backend_content')

<!DOCTYPE html>
<html>
<head>
<style>
/* body {
  background-image: url('/backend/assets/images.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
} */
</style>
</head>
<body>

<h1 > Library M System</h1>
<table>
  <td>
<img style="width:500px;" src="{{url('/backend/assets/images.jpg')}}" alt="" srcset="">
<a href="{{route('admin.add')}}" class="btn btn-primary">Admin Add</a>
</td>
</table>

</body>
</html>





@endsection

