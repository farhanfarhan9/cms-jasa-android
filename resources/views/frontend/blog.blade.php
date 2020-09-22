@extends('frontend')
@section('content')
<div class="container">
  <div class="container-fluid">
  	<br><br>

  	<div class="container py-md-5">
      <div class="banner-wrapper text-center">
        <h3 class="mb-4 title">Blog</h3>
      </div>
    </div>

    <!-- Page Content -->
    <div class="container">

      <div class="row">
        <!-- Blog Entries Column -->
        @foreach($blogs as $blog)
        <div class="col-md-6">
          <!-- Blog Post -->
          <div class="card mb-4">
            <img class="card-img-top" src="{{url('storage/'.$blog->foto)}}" width="508" height="203" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title">{{$blog->judul_blog}}</h2>
              <p class="card-text">{{$blog->deskripsi}}</p>
              <a href="{{ url('blog', $blog->slug) }}" class="btn biru btn-lg text-white">Read More &rarr;</a>
              <!-- <a href="../news2" class="btn biru btn-lg text-white">Read More &rarr;</a> -->
              <br>
              <small class="text-muted">Kategori : {{$blog->category->nama_kategori}}</small>
            </div>
            <div class="card-footer text-muted">
              {{$blog->created_at->toDateString()}} 
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <ul class="pagination justify-content-center mb-4">
        <li class="page-item">
          <a class="page-link" href="#">&larr; Older</a>
        </li>
        <li class="page-item disabled">
          <a class="page-link" href="#">Newer &rarr;</a>
        </li>
      </ul>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </div>
</div>
@endsection