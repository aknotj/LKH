@extends('layouts.app')

@section('content')
  <div class="cafe">
    <div class="top_img">
      <img src="{{asset('storage/'.'coffee.jpg')}}">
    </div>
    <div class="cafe_heading">
      <p>
        Stop by our cafe for a quick sip, <br>
        or a full coffee tasting experience. <br>
      </p>
    </div>
    <div class="top_img">
      <img src="{{asset('storage/'.'coffee-roasted.jpg')}}">
    </div>
    <div class="cafe_info">
      <table>
        <tr>
          <th>Opening Hours</th>
          <td>6:30 - 17:30 <span></span></td>
        </tr>
        <tr>
          <th>Address</th>
          <td>Lyserødvej 12B <br>3000 Gurre, Denmark</td>
        </tr>
        <tr>
          <th></th>
        </tr>
      </table>
    </div>
  </div>
@endsection