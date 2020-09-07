@extends('dashboard')

@section('content')
<div class="container-fluid">
	<h1 class="mt-4">Kategori</h1>
	<ol class="breadcrumb mb-4">
	    <li class="breadcrumb-item active">Kategori</li>
	</ol>
			<a href="{{route('categories.create')}}" class="btn btn-primary">Buat Kategori Baru</a><br><br>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Kategori</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    	<td>1</td>
                    	<td>Brita</td>
                    	<td class="text-center">
                    		<a href="#" class="btn btn-sm btn-success">Edit</a>
                    		<a href="#" class="btn btn-sm btn-danger">Hapus</a>
                    	</td>
                    </tr>
                </tbody>
            </table>
        </div>
</div>
@endsection