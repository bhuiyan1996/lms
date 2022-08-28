<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{route('dashboard')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>

               
                <a class="nav-link" href="{{route('category.list')}}">Categories</a>
                <a class="nav-link" href="{{route('book.list')}}">Books</a>
                <a class="nav-link" href="{{route('reader.list')}}">Readers</a>
                <!-- <a class="nav-link" href="{{route('reader.report')}}">Reader report</a> -->
                <a class="nav-link" href="{{route('borrow.list')}}">Borrow</a>
                <!-- <a class="nav-link" href="{{route('borrow.report')}}">Borrow Report</a> -->


<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
  background-color: black;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</head>
<body>

<div class="dropdown">
  <button class="dropbtn">Report</button>
  <div class="dropdown-content">
    <a href="{{route('book.report')}}">Book Report</a>
    <a href="{{route('reader.report')}}">Reader Report</a>
    <a href="{{route('borrow.report')}}">Borrow Report</a>
    

  </div>
</div>

</body>
</html>





            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">IUBAT LMS</div>
           
    </nav>
</div>
