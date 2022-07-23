@extends('layouts.app')

@section('content')
  <div class="create-items">
    <div class="form">
      <form action="/items/{{$item->id}}" method="POST">
        {{ csrf_field() }}
        <div class="input-form">
          <label for="name">Name</label>
          <input name="name" value="{{$item->name}}">
        </div>
        <div class="input-form">
          <label for="description">Description</label>
          <textarea name="description">{{$item->description}}</textarea>
        </div>
        <div class="input-form">
          <label for="price">Price</label>
          <input name="price" value="{{$item->price}}">
        </div>
        <div class="input-form">
          <label for="stock">Inventory Unit</label>
          <input name="stock" value="{{$item->stock}}">
        </div>
        <div class="input-form">
          <input type="hidden" name="_method" value="patch">
          <input type="submit" value="Update">
        </div>
      </form>
    </div>
  </div>
@endsection