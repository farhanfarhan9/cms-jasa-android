@extends('frontend')
@section('content')
<div class="w3l-index-block1">
  <div class="mt-5 pt-5">
    <div class="container">
    	<center><h3 class="mb-4 title">Silahkan isi data diri anda.</h3></center>
      <div class="row justify-content-md-center align-items-center py-md-5 py-3">
        <div class="col-md-5 col-md-offset-3">
	
	<!-- <div class="row"> -->
		<div class="card abu">
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
		<div class="row mb-3">
			<div class="col">
				<div class="card abu">
					<div class="card-body">
					<div>
				    <h5 class="card-title">Alamat</h5>
				    <p class="card-text">Jl Mongonsidi No.6 Dilo Medan</p>
				  </div>
				</div>
				</div>
			</div>
			<div class="col">
				<div class="card abu">
					<div class="card-body">
				    <h5 class="card-title">Email</h5>
				    <p class="card-text">algoritma.tech@gmail.com</p>
				  </div>
				</div>
			</div>
			<div class="col">
				<div class="card abu">
					<div class="card-body">
				    <h5 class="card-title">HP/WA</h5>
				    <p class="card-text">+6281263630633</p>
				  </div>
				</div>
			</div>
		</div>
		<div class="row mb-3">
			<div class="col">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.0698187242583!2d98.66809271431106!3d3.571414397401008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031302fe490fe11%3A0x3372cac556f288ca!2sDILO%20MEDAN!5e0!3m2!1sid!2sid!4v1600935967210!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
		</div>
	  </div>
	</div>
  </div>
</div>
@endsection