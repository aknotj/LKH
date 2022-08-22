@extends('layouts.app')

@section('content')
  <div class="contact_show">
    <h3>Message details</h3>
    <hr>
    <p>ID {{$contact->id}}</p>
    <table class="contact_content">
      <tr>
        <th>Name:</th>
        <td>{{$contact->name}}</td>
      </tr>
      <tr>
        <th>Email: </th>
        <td>{{$contact->name}}</td>
      </tr>
      <tr>
        <th>Sent on: </th>
        <td>{{$contact->created_at->format('M/d/Y h:i')}}</td>
      </tr>
      <tr>
        <th>Content: </th>
        <td>{{$contact->content}}</td>
      </tr>
    </table>
    <div class="status">
      @if ($contact->is_checked = 0)
        <p>DONE</p>
      @endif
    </div>
  </div>

  <div class="back_btn">
    <a href="/inbox">Back to index</a>
  </div>

@endsection