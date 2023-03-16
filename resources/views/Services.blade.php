@extends('layout.header-layout')
@section('title','Conatct')
@section('index-page')
<!------------------->
<section class="navbar  bg-black">
    <div class="container-fluid">
      <h1 class="navbar-brand text-white fs-4 px-5">Welcome To Our Services</h1>
    </div>
</section>
<!------------------>
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
@include('layout.footer-layout')
@endsection