@extends('layouts.app')
@section('content')

<div class="container">
      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
             <div>
                <h6 class="my-0">Product name</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">SAR12</span>
            </li>
            
              <span>Total (SAR)</span>
              <strong>SAR20</strong>
            </li>
          </ul>
 
 
          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Promo code">
              <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Redeem</button>
 
                </div>
         </div>
          </form>
</div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Billing address</h4>
          <form class="needs-validation" action="{{route('shopping.pay')}}" method="POST">
            @csrf
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text"class="form-control" id="name" name="name" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
                  </div>

              <div class="col-md-6 mb-3">
            <div class="mb-3">
              <label for="phone">phone<span class="text-muted"></span></label>
              <input type="phone" name="phone"class="form-control" id="phone">
              <div class="invalid-feedback">
                Please enter a valid phone for shipping updates.
              </div>
              </div>
             </div>
            
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-dark" type="submit">Continue to checkout</button>
          </form>
        </div>
      </div>
    
</div>
@endsection