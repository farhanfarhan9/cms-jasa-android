@extends('dashboard')

@section('content')
<div class="container-fluid">
	<h1 class="mt-4">Blog</h1>
	<ol class="breadcrumb mb-4">
	    <li class="breadcrumb-item active">Dashboard / Blog</li>
	</ol>
	<div class="card">
        <div class="card-body">
            <form action="/dashboard/sliders/{{ $slider->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label for="">Nama Slider</label>
                    <input type="text" class="form-control" name="nama_slider" value="{{ $slider->nama_slider }}">
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