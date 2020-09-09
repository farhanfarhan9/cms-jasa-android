@extends('dashboard')

@section('content')
<div class="container-fluid">
	<h1 class="mt-4">Kontak</h1>
	<ol class="breadcrumb mb-4">
	    <li class="breadcrumb-item active">Kontak</li>
	</ol>
		<div class="card">
            <div class="card-body">
                <form action="/dashboard/contacts/{{ $contact->id }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="">Nama Kontak</label>
                        <input type="text" class="form-control" name="nama_kontak" value="{{ $contact->nama_kontak }}">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="{{ $contact->alamat }}">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" value="{{ $contact->email }}">
                    </div>
                    <div class="form-group">
                        <label for="">Pesan</label>
                        <textarea class="form-control" name="pesan">{{ $contact->pesan }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>  
        </div>
</div>
@endsection