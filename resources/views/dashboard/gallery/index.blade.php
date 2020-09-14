@extends('dashboard')

@section('content')
<div class="container-fluid">
	<h1 class="mt-4">Gallery</h1>
	<ol class="breadcrumb mb-4">
	    <li class="breadcrumb-item active">Dashboard / Gallery</li>
	</ol>
			<a href="{{route('galleries.create')}}" class="btn btn-primary">Buat Gallery Baru</a><br><br>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama Galleri</th>
                        <th>Deskripsi</th>
                        <th>foto</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no=1 @endphp
                	@foreach($galleries as $gallery)
                    <tr>

                    	<td> <?= $no ?></td>
                    	<td>{{ $gallery->nama_gallery }}</td>
                        <td>{{ $gallery->deskripsi }}</td>
                        <td class="text-center"><img src="{{asset('storage/'.$gallery->foto)}}" width="110px" alt=""></td>
                    	<td class="text-center">
                    		<a href="/dashboard/galleries/{{ $gallery->id }}/edit" class="btn btn-sm btn-success">Edit</a>
                    		<form method="POST" action="/dashboard/galleries/{{ $gallery->id }}" >
								@csrf
								@method('DELETE')
								<div class="control">
									<button type="submit" class="btn btn-sm btn-danger">Delete</button>
								</div>
							</form>
                    	</td>
                    </tr>
                    @php $no++; @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
</div>
@endsection