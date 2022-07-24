@extends('layouts.app')

@section('content')
  <table>
    <tr>
      <th>Item Id</th>
      <th>Name</th>
      <th>Description</th>
      <th>Price</th>
      <td>Units in stock</td>
      <td></td>
    </tr>
    @foreach($products as $product)
      <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->description}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->stock}} pc</td>
        <td><a href="/products/{{$product->id}}">Details</a></td>
      </tr>
    @endforeach
  </table>
@endsection