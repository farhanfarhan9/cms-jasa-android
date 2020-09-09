@extends('dashboard')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Gallery</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard / Gallery</li>
    </ol>
    <div class="card">
        <div class="card-body">
            <form action="/dashboard/galleries/{{ $gallery->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label for="">Nama Gallery</label>
                    <input type="text" class="form-control" name="nama_gallery" value="{{ $gallery->nama_gallery }}">
                </div>
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi" value="{{ $gallery->deskripsi }}">
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