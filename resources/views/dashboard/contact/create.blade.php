@extends('dashboard')

@section('content')
<div class="container-fluid">
	<h1 class="mt-4">Kontak</h1>
	<ol class="breadcrumb mb-4">
	    <li class="breadcrumb-item active">Kontak</li>
	</ol>
		<div class="card">
            <div class="card-body">
                <form action="/dashboard/contacts" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Kontak</label>
                        <input type="text" class="form-control {{ $errors->has('nama_kontak')? 'border border-danger' :'' }}" name="nama_kontak" value="{{ old('nama_kontak') }}">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control {{ $errors->has('alamat')? 'border border-danger' :'' }}" name="alamat" value="{{ old('alamat') }}">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control {{ $errors->has('email')? 'border border-danger' :'' }}" name="email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label for="">Pesan</label>
                        <textarea class="form-control {{ $errors->has('pesan')? 'border border-danger' :'' }}" name="pesan">{{ old('pesan') }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    @include('errors')
                </form>
            </div>  
        </div>
</div>
@endsection