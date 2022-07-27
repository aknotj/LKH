@extends('layouts.app')

@section('content')
  <div class="product_show">
    <div class="product_wrapper">
      <div class="product_details">
        <div class="product_image">
          <img src="{{asset('storage/'.$product->img_path)}}">
        </div>
        <div class="product_description">
                <h1>{{$product->name}}</h1>
          <p>{{$product->description}}</p>
          <p>$ {{$product->price}}</p>
        </div>
      </div>
    </div>
  </div>

  <div class="back_btn">
    <a href="/products">Back to index</a>
  </div>

  <div class="admin_area">
    <a href="/products/{{$product->id}}/edit">Edit</a>
  </div>

@endsection