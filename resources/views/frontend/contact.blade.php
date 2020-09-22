@extends('frontend')
@section('content')
<div class="w3l-index-block1">
  <div class="mt-5 pt-5">
    <div class="container">
      <div class="row justify-content-md-center align-items-center py-md-5 py-3">
        <div class="col-md-5 col-md-offset-3">
	
	<!-- <div class="row"> -->
		<div class="card">
			<div class="card-body">
				<form action="{{ route('contacts.store') }}" method="post">
					@csrf
					@if(session()->has('message'))
					    <div class="alert alert-success">
					        {{ session()->get('message') }}
					    </div>
					@endif
				  <div class="form-group">
				    <label for="exampleInputEmail1">Nama</label>
				    <input type="text" name="nama_kontak" class="form-control">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Alamat</label>
				    <input type="text" name="alamat" class="form-control">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email</label>
				    <input type="email" name="email" class="form-control">
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlTextarea1">Pesan</label>
				    <textarea name="pesan" class="form-control" rows="3"></textarea>
				  </div>
				  <button type="submit" class="btn btn-lg biru text-white">PESAN</button>
				</form>
			</div>
		</div>
		
	</div>
		</div>
	  </div>
	</div>
  </div>
</div>
@endsection