@extends('master')
@section('content')
<h1>Login Page</h1>
<div class="container custom-login">
<div class="row">
	<div class="col-sm-4 col-sm-offset-4">
		<form method="post" action="login">
			@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

	</div>
</div>
</div>
<button class="btn btn-primary">Click on me</button>
@endsection