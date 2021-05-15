@extends('master')
@section('content')
<div class="container">
   <div class="row">
     <div class="col-sm-6">
       <img class="detail-img" src="{{asset('images/'.$data->gallery)}}">
     </div>
     <div class="col-sm-6">
        <a href="{{ url('/') }}">Go Back</a>
        <h2>{{ $data['name'] }}</h2>
        <h3>Price:{{ $data['price'] }}</h3>
        <h4>Detail:{{ $data['description'] }}</h4>
        <h4>Category:{{ $data['category'] }}</h5>
        <br><br>
        <form method="post" action="{{ url('addcart')}}">
            @csrf
          <input type="hidden" name="product_id" value="{{ $data->id }}">
        <button class="btn btn-success">Add To cart</button>  
        </form>
        <br><br>
        <a href="" class="btn btn-primary">Buy Now</a>
        <br><br>
        
        <br><br>
     </div>
   </div>
</div>
@endsection