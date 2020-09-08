@extends('dashboard')

@section('content')
<div class="container-fluid">
	<h1 class="mt-4">Blog</h1>
	<ol class="breadcrumb mb-4">
	    <li class="breadcrumb-item active">Dashboard / Blog</li>
	</ol>
			<a href="{{route('blogs.create')}}" class="btn btn-primary">Buat Blog Baru</a><br><br>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Jenis Kategori</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Konten</th>
                        <th>Foto</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                	@foreach($blogs as $blog)
                	<?php $no=1 ?>
                    <tr>

                    	<td> <?= $no ?></td>
                    	<td>{{ $blog->category_id }}</td>
                        <td>{{ $blog->judul_blog }}</td>
                        <td>{{ $blog->deskripsi }}</td>
                        <td>{{ $blog->konten }}</td>
                        <td>{{ $blog->foto }}</td>
                    	<td class="text-center">
                    		<a href="/dashboard/blogs/{{ $blog->id }}/edit" class="btn btn-sm btn-success">Edit</a>
                    		<form method="POST" action="/dashboard/blogs/{{ $blog->id }}" >
								@csrf
								@method('DELETE')
								<div class="control">
									<button type="submit" class="btn btn-sm btn-danger">Delete</button>
								</div>
							</form>
                    	</td>
                    </tr>
                    <?php $no++; ?>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>
@endsection