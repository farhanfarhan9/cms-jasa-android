@extends('dashboard')

@section('content')
<div class="container-fluid">
	<h1 class="mt-4">Testimoni</h1>
	<ol class="breadcrumb mb-4">
	    <li class="breadcrumb-item active">Dashboard / Testimoni</li>
	</ol>
	<div class="card">
        <div class="card-body">
            <form action="/dashboard/testimonies" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Nama Testimoni</label>
                    <input type="text" class="form-control" name="nama_testimoni">
                </div>
                <div class="form-group">
                    <label for="">Jabatan</label>
                    <input type="text" class="form-control" name="jabatan">
                </div>
                <div class="form-group">
                    <label for="">Testimoni</label>
                    <textarea class="form-control" name="testimoni"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Foto</label>
                    <input type="file" class="form-control" name="foto">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div> 
    </div>
</div>
@endsection