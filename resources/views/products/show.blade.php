@extends('layouts.app')

@section('content')
  <table>
    <tr>
      <th>Item Id</th>
      <th>Name</th>
      <th>Description</th>
      <th>Price</th>
      <td>Units in stock</td>
    </tr>
      <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->description}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->stock}} pc</td>
        <td>{{$product->category}}</td>
      </tr>
  </table>
  <img src="{{asset('storage/'.$product->img_path)}}">

  <a href="/products/{{$product->id}}/edit">Edit</a>

  <form action="/products/{{$product->id}}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="delete">
    <input type="submit" name="" value="Delete">
  </form>

  <a href="/products">Back to index</a>
@endsection