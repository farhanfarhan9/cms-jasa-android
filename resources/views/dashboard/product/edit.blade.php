@extends('dashboard')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Produk</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard / Produk</li>
    </ol>
    <div class="card">
        <div class="card-body">
            <form action="/dashboard/products/{{ $product->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label for="">Nama Produk</label>
                    <input type="text" class="form-control" name="nama_produk" value="{{ $product->nama_produk }}">
                </div>
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi" value="{{ $product->deskripsi }}">
                </div>

                <div class="form-group">
                    <img src="{{asset('storage/'.$product->foto)}}" width="210px" alt="">
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