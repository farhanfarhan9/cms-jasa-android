@extends('dashboard')

@section('content')
<div class="container-fluid">
	<h1 class="mt-4">Kategori</h1>
	<ol class="breadcrumb mb-4">
	    <li class="breadcrumb-item active">Dashboard / Kategori</li>
	</ol>
			<a href="{{route('categories.create')}}" class="btn btn-primary">Buat Kategori Baru</a><br><br>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Kategori</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no=1 @endphp
                	@foreach($categories as $category)
                	
                    <tr>

                    	<td> <?= $no ?></td>
                    	<td>{{ $category->nama_kategori }}</td>
                    	<td class="text-center">
                    		<a href="/dashboard/categories/{{ $category->id }}/edit" class="btn btn-sm btn-success">Edit</a>
                    		<form method="POST" action="/dashboard/categories/{{ $category->id }}" >
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