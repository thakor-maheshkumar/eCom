@extends('master')
@section('content')
<div class="custom-product">
<div class="trendig-wrapper">
  <h3>Result for product</h3>
  @foreach($data as $item)
  <div class="trending-item">
    <a href='{{ url("detail/$item->id") }}'>
      <img class="trending-image" src="{{ asset('images/'.$item->gallery)}}">
        <div class="searched-item">
        <h2>{{ $item['name'] }}</h2>
        <h2>{{ $item['description'] }}</h2>
      </div>
    </a>
    </div>
    @endforeach
</div>
</div>
@endsection