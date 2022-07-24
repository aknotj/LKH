@extends('layouts.app')

@section('content')
  <div class="create-products">
    <div class="form">
      <form action="/products/{{$product->id}}" method="POST">
        {{ csrf_field() }}
        <div class="input-form">
          <label for="name">Name</label>
          <input name="name" value="{{$product->name}}">
        </div>
        <div class="input-form">
          <label for="description">Description</label>
          <textarea name="description">{{$product->description}}</textarea>
        </div>
        <div class="input-form">
          <label for="price">Price</label>
          <input name="price" value="{{$product->price}}">
        </div>
        <div class="input-form">
          <label for="stock">Inventory Unit</label>
          <input name="stock" value="{{$product->stock}}">
        </div>
        <div class="input-form">
          <label for="stock">Category</label>
          <input name="category" value="{{$product->stock}}">
        </div>
        <div class="input-form">
          <input type="hidden" name="_method" value="patch">
          <input type="submit" value="Update">
        </div>
      </form>
    </div>
  </div>
@endsection