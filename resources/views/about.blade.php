@extends('layout.header-layout')
@section('title','Conatct')
@section('index-page')
<!------------------->
<section class="navbar  bg-black">
    <div class="container-fluid">
      <h1 class="navbar-brand text-white fs-4 px-5">Welcome To About Us</h1>
    </div>
</section>
<!------------------>
<div class="container marketing">
<hr class="featurette-divider">
<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading fw-normal lh-1 text-white">Dream Software Solutions.</h2>
    <p class="text-white p1">We are a leading company in Bengaluru in providing multiple web related as well as enterprise services        including Website, Application systems, CRM & ERP solutions and digital marketing.

        Our website designs are visually attractive with good typefaces, easy navigation, fully accessible, best legibility, best graphics, fully cross platform compatible, type style consistency, clean with easy-to-use and powerful web interface designs. Our designed website's web page elements are fully optimized for quick downloading and superior performance that will work very well on dial-up connection. Search Engine Optimization (Seo) is also an important part of our web design projects. Because we know that an effective website is accessible to search engines if that is designed and optimized well, It also help visually impaired and even the blind.</p>
  </div>
  <div class="col-md-5">
    <img src="images/3.jpg" class="d-block w-100 rounded float-start" alt="..." height="400" width="500">
  </div>
</div>
</div>
@include('layout.footer-layout')
@endsection
