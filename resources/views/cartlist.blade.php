@extends('master')
@section('content')
<div class=" custom-product">
  <div class="col-sm-10">
    <div class="trending-wrapper">
      <h3>Searched Result</h3>
      <a class="btn btn-success" href="ordernow">Order Now</a>
      @foreach ($products as $item)
      <div class="row searched-item cart-list-devider">
        <div class="col-sm-3">
          <a href="detail/{{$item->id}} ">

            <img class="trending-image" src="{{$item->gallery}}">

          </a>
        </div>
        <div class="row searched-item">
          <div class="col-sm-4">
            <div class="">
              <h3>{{$item->name}}</h3>
              <h5>{{$item->description}}</h5>
            </div>
          </div>
          <div class="col-sm-3">
            <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from cart</a>
          </div>
        </div>

        @endforeach
      </div><br><br>
      <a class="btn btn-success" href="ordernow">Order Now</a>
    </div>
  </div>
  @endsection