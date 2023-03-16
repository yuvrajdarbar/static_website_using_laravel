@extends('layout.header-layout')
@section('title','Home')
@section('index-page')
<!------------------->
<section class="navbar  bg-black">
    <div class="container-fluid">
      <h1 class="navbar-brand text-white fs-4 px-5">About Us</h1>
    </div>
</section>
<!------------------>
<!-- START THE ABOUT -->
<div class="container marketing">
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1 text-white">Welcome To Dream Software Solutions.</h2>
        <p class="text-white p1">We are a leading company in Bardoli in providing multiple web related as well as enterprise services including Website, Application systems, CRM & ERP solutions and digital marketing.

            Our website designs are visually attractive with good typefaces, easy navigation, fully accessible, best legibility, best graphics, fully cross platform compatible, type style consistency, clean with easy-to-use and powerful web interface designs. Our designed website's web page elements are fully optimized for quick downloading and superior performance that will work very well on dial-up connection. Search Engine Optimization (Seo) is also an important part of our web design projects. Because we know that an effective website is accessible to search engines if that is designed and optimized well, It also help visually impaired and even the blind.</p>
      </div>
      <div class="col-md-5">
        <img src="images/3.jpg" class="d-block w-100 rounded float-start" alt="..." height="400" width="500">
      </div>
    </div>
  </div>
  <!-- End THE ABOUT -->
<!------------------------------------------->
<section class="navbar  bg-black mt-4">
    <div class="container-fluid">
      <h1 class="navbar-brand text-white fs-4 px-5">Our Services</h1>
    </div>
</section>
<!------------------------------------------->
<!-- START THE Services -->

<div class="container marketing">
<div class="row mt-3">
<div class="col-lg-4">
  <img src="images/s1.png" class="rounded-circle" alt="..." width="150" height="150">
  <h2 class="fw-normal text-white">Android App Development</h2>
  <p class="text-white">At Dream World InfoSoft, we feel proud to offer numerous native mobile application development services having Android app development too.</p>
  <p><a class="btn btn-success" href="#">View details »</a></p>
</div>
<div class="col-lg-4">
    <img src="images/s2.png" class="bd-placeholder-img rounded-circle" alt="..." width="150" height="150">
  <h2 class="fw-normal text-white">IOS App Development</h2>
  <p class="text-white">From past few years, our experienced team has made its own standard and placed a benchmark in the field of iOS app development services.</p>
  <p><a class="btn btn-warning" href="#">View details »</a></p>
</div>
<div class="col-lg-4">
    <img src="images/s3.png" class="bd-placeholder-img rounded-circle" alt="..." width="150" height="150">
  <h2 class="fw-normal text-white">Web Development</h2>
  <p class="text-white">PHP in today's world is synonymous with functionality, customizable and interactive web applications.It is also an open source technology</p>
  <p><a class="btn btn-danger" href="#">View details »</a></p>
</div>
</div>
</div>
<!-- End THE Services -->

<!------------------->
<section class="navbar  bg-black">
    <div class="container-fluid">
      <h1 class="navbar-brand text-white fs-4 px-5">Countact Us</h1>
    </div>
</section>
<!------------------>

<div class="container marketing">

    <!-- START THE Contact -->

<div class="row featurette mt-3">
  <div class="col-md-6">
    <form>
        <div class="mb-3">
          <label for="name" class="form-label text-white">Name</label>
          <input type="name" class="form-control" id="name">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label text-white">Email</label>
          <input type="email" class="form-control" id="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label text-white">Password</label>
            <input type="password" class="form-control" id="password">
          </div>
          <div class="mb-3">
            <label for="Phone" class="form-label text-white">Phone</label>
            <input type="number" class="form-control" id="phone">
          </div>
        <button type="submit" class="btn btn-primary text-white">Submit</button>
      </form>
  </div>
  <div class="col-md-6 px-5">
    <div class="modal-body p-1">
        <h2 class="fw-bold mb-0 text-white">Office Address</h2>

        <ul class="d-grid gap-4 my-5 list-unstyled">
          <li class="d-flex gap-4">
            <img src="images/address.jpg" class="bd-placeholder-img rounded-circle" alt="..." width="48" height="48">
            <div>
              <h5 class="mb-0 text-white">Address</h5>
              <span class="text-white">Baben, Bardoli</span>
            </div>
          </li>
          <li class="d-flex gap-4">
            <img src="images/phone.png" class="bd-placeholder-img rounded-circle" alt="..." width="48" height="48">
            <div>
              <h5 class="mb-0 text-white">Phone</h5>
              <span class="text-white">+91 8849608640</span>
            </div>
          </li>
          <li class="d-flex gap-4">
            <img src="images/email.png" class="bd-placeholder-img rounded-circle" alt="..." width="48" height="48">
            <div>
              <h5 class="mb-0 text-white">Email</h5>
              <span class="text-white">yuvrajdarbar2@gmail.com</span>
            </div>
          </li>
        </ul>
        <button type="button" class="btn btn-lg btn-primary mt-1 w-100" data-bs-dismiss="modal" fdprocessedid="5cwdm">Great, thanks!</button>
      </div>
  </div>
</div>
</div>
<!-- End THE Contact -->
@include('layout.footer-layout')
@endsection