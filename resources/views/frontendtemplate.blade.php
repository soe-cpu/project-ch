<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend_asset/style.css')}}">
    <link href="{{asset('backend_asset/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    {{-- owl carousel --}}
    <link rel="stylesheet" href="{{ asset('frontend_asset/owlcarousel/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend_asset/owlcarousel/dist/assets/owl.theme.default.min.css')}}">

    <title>ဓမ္မဗီဒီယိုများ</title>
  </head>
  <body>
    <div class="container">
      <div class="d-flex justify-content-between logo">
        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/c/c8/Bluestar_%28bus_company%29_logo.svg/1280px-Bluestar_%28bus_company%29_logo.svg.png" alt="Company Logo" width="100" height="100">
        <h5 class="px-auto d-none d-sm-block">ဓမ္မသီချင်းများ</h5>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

      </div>
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success nav-bg py-2">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="container">        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link hover-link" href="{{route('mainpage')}}">မူလစာမျက်နှာ <span class="sr-only">(current)</span></a>
            </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li> -->
              {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  သခင်ပြန်ကြွလာခြင်း၏ ဧ၀ံ‌ဂေလိတရား
                </a>
                <div class="dropdown-menu dropdown-content" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">ဓမ္မသီချင်းများ</a>
                  <a class="dropdown-item" href="#">ဓမ္မသီချင်းများ</a>
                  <a class="dropdown-item" href="#">ဓမ္မသီချင်းများ</a>
                </div>
              </li> --}}
              {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  ဘုရားနှုတ်ကပတ်တော်
                </a>
                <div class="dropdown-menu dropdown-content" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">ဓမ္မသီချင်းများ</a>
                  <a class="dropdown-item" href="#">ဓမ္မသီချင်းများ</a>
                  <a class="dropdown-item" href="#">ဓမ္မသီချင်းများ</a>
                </div>
              </li> --}}
              <li class="nav-item">
                <a class="nav-link hover-link" href="{{route('videopage')}}">ဓမ္မသီချင်းများ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link hover-link" href="{{route('videopage')}}">ဓမ္မဗီဒီယိုများ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link hover-link" href="{{route('videopage')}}">အကြောင်းအရာများ</a>
              </li>
            </ul>
            <!-- <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form> -->
        </div>
      </div>
    </nav>

    @yield('content')
    
    <footer class="footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">
            <h2 class="float-left text-light">ဓမ္မသီချင်းများ</h2>

          </div>
          <div class="col-md-4">
            <nav class="nav flex-column">
              <a class="nav-link hover-link active" href="#">မူလစာမျက်နှာ</a>
              <a class="nav-link hover-link" href="#">ဓမ္မသီချင်းများ</a>
              <a class="nav-link hover-link" href="#">ဓမ္မသီချင်းများ</a>
              <a class="nav-link hover-link" href="#">ဓမ္မသီချင်းများ</a>
            </nav>
          </div>         
          <div class="col-md-4">
            {{-- <img src="image/s11.jpg"> --}}
          </div>
        </div>
        
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend_asset/owlcarousel/dist/owl.carousel.min.js')}}"></script>
    @yield('script')
  </body>

</html>