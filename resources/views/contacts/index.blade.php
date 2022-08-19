@extends('layouts.app')

@section('content')
  <div class="contacts_index">
    <div class="heading">
      <h2>Messages</h2>
    </div>
    <div class="messages">
      <ul>
        @foreach($contacts as $contact)
          <li>
            <a href="/contacts/{{$contact->id}}">
              <h4>{{$contact->name}}</h4>
              <p>{{$contact->email}}</p>
              <p>{{$contact->content}}</p>
            </a>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
@endsection