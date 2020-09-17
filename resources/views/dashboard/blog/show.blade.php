@extends('dashboard')

@section('content')
<div class="container-fluid">
	<h1 class="mt-4">Blog</h1>
	<ol class="breadcrumb mb-4">
	    <li class="breadcrumb-item active">Dashboard / Blog</li>
	</ol>
	<h3>{{ $blog->judul_blog }}</h3>
	<h3><img src="{{asset('storage/'.$blog->foto)}}"></h3>

	<p>{{ $blog->deskripsi }}</p>
	<p>{!! $blog->konten !!}</p>
	<p>Kategori : {{ $blog->category->nama_kategori }}</p>

</div>

@endsection