@extends('dashboard')

@section('content')
<div class="container-fluid">
	<h1 class="mt-4">Blog</h1>
	<ol class="breadcrumb mb-4">
	    <li class="breadcrumb-item active">Dashboard / Blog</li>
	</ol>
	<div class="card">
        <div class="card-body">
            <form action="/dashboard/blogs" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Nama Kategori</label>
                    <select name="id_kategori" id="" class="form-control">
                        <option>-Pilih kategori-</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">
                                {{ $category->nama_kategori }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control border border-primary" name="judul">
                </div>
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi">
                </div>
                <div class="form-group">
                    <label for="">Konten</label>
                    <textarea id="my-editor" name="konten" class="form-control"></textarea>
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