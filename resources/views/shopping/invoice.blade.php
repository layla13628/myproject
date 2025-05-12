@extends('layouts.app')
@section('content')
<div class="card">
  <div class="card-body mx-4">
    <div class="container">
      <p class="my-5 mx-5" style="font-size: 30px;">شكرآ لك على الشراء</p>
      <div class="row">
        <ul class="list-unstyled">
          <li class="text-black">layla</li>
          <li class="text-muted mt-1"><span class="text-black">Invoice</span> #12345</li>
          <li class="text-black mt-1">May 12 2025</li>
        </ul>
        <hr>
        <div class="col-xl-10">
          <p>بكس ميكب</p>
        </div>
        <div class="col-xl-2">
          <p class="float-end">SAR199.00
          </p>
        </div>
        <hr>
      </div>
      <div class="row">
        <div class="col-xl-10">
          <p>فونديشن</p>
        </div>
        <div class="col-xl-2">
          <p class="float-end">SAR100.00
          </p>
        </div>
        <hr>
      </div>
      <div class="row">
        <div class="col-xl-10">
          <p>مسكرة</p>
        </div>
        <div class="col-xl-2">
          <p class="float-end">SAR10.00
          </p>
        </div>
        <hr style="border: 2px solid black;">
      </div>
      <div class="row text-black">

        <div class="col-xl-12">
          <p class="float-end fw-bold">Total: SAR309.00
          </p>
        </div>
        <hr style="border: 2px solid black;">
      </div>
      <div class="text-center" style="margin-top: 90px;">
        <a><u class="text-info">http://127.0.0.1:8000/shopping/pay%7D</u></a>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
      </div>

    </div>
  </div>
</div>
@endsection