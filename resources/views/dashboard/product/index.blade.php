@extends('dashboard')

@section('content')

<div class="container-fluid">
	<h1 class="mt-4">Produk</h1>
	<ol class="breadcrumb mb-4">
	<li class="breadcrumb-item active">Dashboard / Produk</li>
	</ol>
			<a href="{{route('products.create')}}" class="btn btn-primary">Buat Produk Baru</a><br><br>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama Produk</th>
                        <th>Deskripsi</th>
                        <th>Foto</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no=1 @endphp
                	@foreach($products as $product)
                    <tr>

                    	<td> <?= $no ?></td>
                    	<td>{{ $product->nama_produk }}</td>
                        <td>{{ $product->deskripsi }}</td>
                        <td class="text-center"><img src="{{asset('storage/'.$product->foto)}}" width="110px" alt=""></td>
                    	<td class="text-center">
                    		<a href="/dashboard/products/{{ $product->id }}/edit" class="btn btn-sm btn-success">Edit</a>
                    		<form method="POST" action="/dashboard/products/{{ $product->id }}" >
								@csrf
								@method('DELETE')
								<div class="control">
									<button type="submit" class="btn btn-sm btn-danger" onClick="return confirm('Yakin ingin menghapus item?')">Delete</button>
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