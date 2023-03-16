@extends('layout.header-layout')
@section('title','Conatct')
@section('index-page')
<!------------------->
<section class="navbar  bg-black">
    <div class="container-fluid">
      <h1 class="navbar-brand text-white fs-4 px-5">Welcome To Contact Us</h1>
    </div>
</section>
<!------------------>
<div class="container marketing">
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
@include('layout.footer-layout')
@endsection