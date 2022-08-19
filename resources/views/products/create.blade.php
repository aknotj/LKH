@extends('layouts.app')

@section('content')
  <div class="products_create">
    <div class="heading">
      <h2>Create Product</h2>
    </div>
    <div class="product_form">
      @if ($errors->any())
        <div class="errors">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <form action="/products" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="input_form">
          <label for="name">Name</label>
          <input type="text" name="name">
        </div>
        <div class="input_form">
          <label for="description">Description</label>
          <textarea name="description"></textarea>
        </div>
        <div class="input_form">
          <label for="price">Price</label>
          <input type="text" name="price">USD
        </div>
        <div class="input_form">
          <label for="stock">Inventory Unit</label>
          <input type="text" name="stock">Units
        </div>
        <div class="input_form">
          <label for="stock">Category</label>
          <input type="text" name="category">
        </div>
        <div class="input_form">
          <label for="img">Image</label>
          <input type="file" name="img_path">
        </div>
        <div class="actions">
          <div class="update">
            <input type="hidden" name="_method" value="post">
            <input type="submit" value="Submit">
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection