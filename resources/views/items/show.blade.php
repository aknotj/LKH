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
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->description}}</td>
        <td>{{$item->price}}</td>
        <td>{{$item->stock}} pc</td>
      </tr>
  </table>
  <a href="/items/{{$item->id}}/edit">Edit</a>
  
  <form action="/items/{{$item->id}}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="delete">
    <input type="submit" name="" value="Delete">
  </form>
  
  <a href="/items">Back to index</a>
@endsection