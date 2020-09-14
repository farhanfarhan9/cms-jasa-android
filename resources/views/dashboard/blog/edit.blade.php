@extends('dashboard')

@section('content')
<div class="container-fluid">
	<h1 class="mt-4">Blog</h1>
	<ol class="breadcrumb mb-4">
	    <li class="breadcrumb-item active">Dashboard / Blog</li>
	</ol>
	<div class="card">
        <div class="card-body">
            <form action="{{ route('blogs.update', $blog->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label for="">Nama Kategori</label>
                    <select name="id_kategori" id="" class="form-control">
                        <option>-Pilih kategori-</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" @if($category->id===$blog->category_id) selected @endif >
                                {{ $category->nama_kategori }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="judul" value="{{ $blog->judul_blog }}">
                </div>
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi" value="{{ $blog->deskripsi }}">
                </div>
                <div class="form-group">
                    <label for="">Konten</label>
                    <textarea class="form-control" name="konten">{{ $blog->konten }}</textarea>
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