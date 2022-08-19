@extends('layouts.app')

@section('content')
  <div class="contact_show">
    <div class="contact_content">
      <h1>{{$contact->name}}</h1>
      <p>{{$contact->email}}</p>
      <p>$ {{$contact->content}}</p>
    </div>
    <div class="status">
      <p>{{$contact->checked}}</p>
    </div>
  </div>

  <div class="back_btn">
    <a href="/contacts">Back to index</a>
  </div>

@endsection