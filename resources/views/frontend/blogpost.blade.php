@extends('frontendblogpost')
@section('meta')
  <meta name="keywords" content="{{ $blog->judul_blog }}">
  <meta name="description" content="{{ $blog->deskripsi}}">
@endsection
@section('content')
<br>
<br>
<br>
<div class="container">
 <div class="row">

      <!-- Post Content Column -->

      <div class="col-lg-12">

        <!-- Title -->
        <h1 class="mt-4">{{ $blog->judul_blog }}</h1>

        <!-- Author -->
        

        <hr>

        <!-- Date/Time -->
        <p>{{ $blog->created_at->toDateString() }}</p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded text-center" src="{{asset('storage/'.$blog->foto)}}" width="900" alt="{{ $blog->judul_blog }}">

        <hr>

        <!-- Post Content -->
        <p>{!! $blog->konten !!}</p>
        <br>
        <small class="text-muted">Kategori : {{$blog->category->nama_kategori}}</small>
        <hr>

            </div>
           
          </div>
        </div>

      </div>
   </div>
</div>
@endsection