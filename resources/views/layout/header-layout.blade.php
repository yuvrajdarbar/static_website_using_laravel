<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <title>@yield('title')</title>
  <style>
  body {
    background-image: url('images/full-image.jpg');
  }
  .p1 {
    font-size: 20px;
    word-spacing: 1px; 
    line-height: 1.6;
  font-family: "Times New Roman", Times, serif;
}

  </style>
</head>
<body>
<!----------------------------------------------    NavBar started -------------------------------->
  <nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="{{route('index')}}">Dream Software</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="{{route('index')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('about')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('services')}}">Services</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Blog
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Computer Programming </a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Software Development</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Website Development</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('contact')}}">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <!----------------------------------------------    NavBar Ended -------------------------------->

  <!----------------------------------------------    carousel slide Started -------------------------------->

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/1.jpg" class="d-block w-100"  alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Welcome To Computer Programming </h5>
          <button class="btn btn-success">Computer Programming</button>
          <button class="btn btn-info">Software Development</button>
          <button class="btn btn-danger">Website Development</button>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Welcome To Software Development</h5>
          <button class="btn btn-success">Computer Programming</button>
          <button class="btn btn-info">Software Development</button>
          <button class="btn btn-danger">Website Development</button>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Welcome To Website Development</h5>
          <button class="btn btn-success">Computer Programming</button>
          <button class="btn btn-info">Software Development</button>
          <button class="btn btn-danger">Website Development</button>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
   <!----------------------------------------------    carousel slide ended -------------------------------->
   @yield('index-page')
</body>
</html>