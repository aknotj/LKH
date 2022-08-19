@extends('layouts.app')

@section('content')
  <div class="contact_create">
    <div class="contact_form">
      @if ($errors->any())
        <div class="errors">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <form action="/contacts" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="input_form">
          <label for="name">Name</label>
          <input type="text" name="name">
        </div>
        <div class="input_form">
          <label for="email">email</label>
          <input type="email" name="email">USD
        </div>
        <div class="input_form">
          <label for="content">Content</label>
          <textarea name="content"></textarea>
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