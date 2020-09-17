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
                        <th>Foto</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no=1 @endphp
                	@foreach($blogs as $blog)
                    <tr>

                    	<td> <?= $no ?></td>
                    	<td>{{ $blog->category->nama_kategori }}</td>
                        <td>{{ $blog->judul_blog }}</td>
                        <td>{{ $blog->deskripsi }}</td>
                        <td class="text-center"><img src="{{asset('storage/'.$blog->foto)}}" width="110px" alt=""></td>
                    	<td class="text-center">
                    		<a href="/dashboard/blogs/{{ $blog->id }}" class="btn btn-sm btn-primary mb-1">Lihat</a>
                            <a href="/dashboard/blogs/{{ $blog->id }}/edit" class="btn btn-sm btn-success mb-1">Edit</a><br>
                    		<form method="POST" action="/dashboard/blogs/{{ $blog->id }}" >
								@csrf
								@method('DELETE')
								<div class="control">
									<button type="submit" class="btn btn-sm btn-danger" onClick="return confirm('Yakin ingin menghapus?')">Delete</button>
								</div>
							</form>
                    	</td>
                    @php $no++; @endphp
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>
@endsection