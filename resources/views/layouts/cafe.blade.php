@extends('layouts.app')

@section('content')
  <div class="cafe">
    <div class="top_img">
      <img src="{{asset('storage/'.'coffee.jpg')}}">
    </div>
    <div class="cafe_info">
      <table>
        <tr>
          <th>Opening Hours</th>
          <td>7:30 - 18:00 <span>(Last order at 17:30)</span></td>
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