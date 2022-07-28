@extends('layouts.app')

@section('content')
  <div class="products_create">
    <div class="heading">
      <h2>Edit Product</h2>
    </div>
    <div class="product_form">
      <form action="/products/{{$product->id}}" method="POST">
        {{ csrf_field() }}
        <div class="input_form">
          <label for="name">Name</label>
          <input type="text" name="name" value="{{$product->name}}">
        </div>
        <div class="input_form">
          <label for="description">Description</label>
          <textarea name="description">{{$product->description}}</textarea>
        </div>
        <div class="input_form">
          <label for="price">Price</label>
          <input type="text" name="price" value="{{$product->price}}">USD
        </div>
        <div class="input_form">
          <label for="stock">Inventory Unit</label>
          <input type="text" name="stock" value="{{$product->stock}}">Units
        </div>
        <div class="input_form">
          <label for="stock">Category</label>
          <input type="text" name="category" value="{{$product->stock}}">
        </div>
        <div class="actions">
          <div class="update">
            <input type="hidden" name="_method" value="patch">
            <input type="submit" value="Update">
          </div>
          <div class="delete">
            <form action="/products/{{$product->id}}" method="POST">
              {{ csrf_field() }}
              <input type="hidden" name="_method" value="delete">
              <input type="submit" name="" value="Delete" class="delete-btn">
            </form>
          </div>
        </div>
      </form>
    </div>
  </div>

@endsection