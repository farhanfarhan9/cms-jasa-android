@extends('dashboard')

@section('content')
<div class="container-fluid">
	<h1 class="mt-4">Kategori</h1>
	<ol class="breadcrumb mb-4">
	    <li class="breadcrumb-item active">Kategori</li>
	</ol>
		<div class="card">
            <div class="card-body">
                <form action="/dashboard/categories" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Kategori</label>
                        <input type="text" class="form-control" name="nama_kategori">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>  
        </div>
</div>
@endsection