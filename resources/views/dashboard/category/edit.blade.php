@extends('dashboard')

@section('content')
<div class="container-fluid">
	<h1 class="mt-4">Kategori</h1>
	<ol class="breadcrumb mb-4">
	    <li class="breadcrumb-item active">Kategori</li>
	</ol>
		<div class="card">
            <div class="card-body">
                <form action="/dashboard/categories/{{ $category->id }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="">Nama Kategori</label>
                        <input type="text" class="form-control" name="nama_kategori" value="{{ $category->nama_kategori }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>  
        </div>
</div>
@endsection