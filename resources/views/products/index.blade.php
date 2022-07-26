@extends('layouts.app')

@section('content')
  <div class="heading">
    <h2>Products</h2>
  </div>
  <div class="products_index">
    @foreach($products as $product)
      <a href="/products/{{$product->id}}">
        <div class="product_card">
          <div class="product_card_heading">
            <img src="{{asset('storage/'.$product->img_path)}}">
          </div>
          <div class="product_info">
            <h5>{{$product->name}}</h5>
            <p>{{$product->description}}</p>
            <p>$ {{$product->price}}</p>
          </div>
        </div>
      </a>
    @endforeach
  </div>
@endsection