@extends('frontend')
@section('content')
<div class="container-fluid">
	<h1 class="mt-4">Dashboard</h1>
	<div class="row">
		<div class="col-md-6 offset-md-3">
	      	<div class="text-center">LOGIN</div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">First Name</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			    <small id="emailHelp" class="form-text text-muted">Email</small>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" class="form-control" id="exampleInputPassword1">
			  </div>
			  <div class="form-group form-check">
			    <input type="checkbox" class="form-check-input" id="exampleCheck1">
			    <label class="form-check-label" for="exampleCheck1">Check me out</label>
			  </div>
			  <button type="submit" class="btn btn-primary">LOGIN</button>
			</form>
	    </div>
	</div>
</div>
@endsection
<form>
				    		