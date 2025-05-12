<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Almarai' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        a{
            color:#ffffff
        }
        *{
            font-family: Almarai;
        }
       
         .cart-icon {
            position: relative;
            display: inline-block;
        }
        .cart-count {
            position: absolute;
            top: -10px;
            right: -10px;
            background-color: red;
            color: white;
            border-radius: 50%;
            padding: 2px 6px;
            font-size: 12px;
        }
  
    </style>
</head>
<body dir="rtl">
  <header>
<nav class="navbar" style="background-color: rgb(57, 197, 207);">
      <div class="container">
        <ul class="list-inline">
            <li class="list-inline-item p-1"><a href="{{route('index')}}">الرئيسية</a></li>
            <li class="list-inline-item p-1"><a href="{{route('callus')}}">اتصل بنا </a> </li>
            <li class="list-inline-item p-1"><a href="{{route('AboutUs')}}">حولنا</a></li>
            <li class="list-inline-item p-1"><a href="{{route('myprod')}}">منتجاتنا</a></li>
        </ul>
      
        <div>
         <div class="ms-auto">
                <a href="#" class="cart-icon">
                    <i class="bi bi-cart4 fs-3"></i>
                    <span class="cart-count">{{ session('count') }}</span>
                </a>
            </div>
        </div> 
        </div>
      
    </nav>
  </header>


<main class="mt-4">
  @yield('content')
</main>

<!-- Footer -->
<footer class="bg-body-tertiary text-center">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
              <input type="email" id="form5Example24" class="form-control" />
              <label class="form-label" for="form5Example24">Email address</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button data-mdb-ripple-init type="submit" class="btn btn-outline mb-4">
              Subscribe
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    

   
    <div class="copyright md-3">
        <p>© 2025 ecommerce . جميع الحقوق محفوظة</p>
    </div>
</footer>


