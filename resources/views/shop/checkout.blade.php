@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')
  <div class="row">
   	<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
       <h1>Checkout</h1>
       <h4>Your Total: ${{ $total }}</h4>
       
        <div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : '' }}">{{ Session::get('error') }}</div>
       <form action="{{ route('checkout') }}" method="post" id="checkout-form"> 

        <div class="row">
          <div class="col-xs-12">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text"  class="form-control" id="name" name="name" type="text" required>
            </div>
          </div>
          <div class="col-xs-12">
            <div class="form-group">
              <label for="address">Address</label>
              <input type="text"  class="form-control" id="address" name="address" type="text" required>
            </div>
          </div>          
        </div>
          <div class="col-xs-12">
            <div class="form-group">
              <label for="card-name">Card Holder Name</label>
              <input type="text"  class="form-control" id="card-name"  required>
            </div>
          </di
          <div class="col-xs-12">
            <div class="form-group">
              <label for="card-number">Card Holder Number</label>
              <input class="form-control" id="card-number" type="tel" size="20" data-stripe="number" placeholder="4242 4242 4242 4242" required>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class="form-group">
              <label for="card-expiry-month">Exp Month</label>
              <input type="text"  class="form-control" id="card-expiry-month"  required>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class="form-group">
              <label for="card-expiry-year">Exp Year</label>
              <input type="text"  class="form-control" id="card-expiry-year"  required>
            </div>
          </div>
          <div class="col-md-6 col-sm-3 col-xs-4">
            <div class="form-group pull-right">
              <label for="card-cvc">CVC</label>
              <input type="text" class="form-control" id="card-cvc" required>
            </div>
          </div>
          {{ csrf_field() }}
          <button type="submit" class="btn btn-success  form-control">Buy now</button>
       </form>
    </div>
   </div>
@endsection

@section('scripts')

<script src="https://js.stripe.com/v2/"></script>
<script src="https://js.stripe.com/v3/"></script>

<script src="{{ asset('js/checkout.js') }}"></script>
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>

  @endsection






