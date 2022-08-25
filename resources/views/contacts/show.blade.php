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
      <form action="/inbox/{{$contact->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <p>Status:
          @if ($contact->is_checked == 0)
            Pending
          @else
            Closed
          @endif
        </p>
        <select name="is_checked">
          <option value="0">Pending</option>
          <option value="1">Close</option>
        </select>
        <input type="submit" value="update">
      </form>

    </div>
  </div>

  <div class="back_btn">
    <a href="/inbox">Back to index</a>
  </div>

@endsection