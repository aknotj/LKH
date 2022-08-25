@extends('layouts.app')

@section('content')
  <div class="contacts_index">
    <div class="heading">
      <h2>Inbox</h2>
    </div>
    <div class="messages">
      <ul>
        @foreach($contacts as $contact)
          <li class="message">
            <a href="/inbox/{{$contact->id}}">
              <p class="status">
                @if ($contact->is_checked == 0)
                  NEW!
                @endif
              </p>
              <h4>{{$contact->name}}</h4>
              <p class="message_content">{{$contact->content}}</p>
            </a>
          </li>
        @endforeach
      </ul>
    </div>
    <div class="pagination">
      {{$contacts->links()}}
    </div>
  </div>
@endsection