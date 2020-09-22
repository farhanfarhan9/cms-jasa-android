@extends('dashboard')

@section('content')
<div class="container-fluid">
	<h1 class="mt-4">Kontak</h1>
	<ol class="breadcrumb mb-4">
	    <li class="breadcrumb-item active">Dashboard / Kontak</li>
	</ol>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Nama Kontak</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Pesan</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php $no=1 @endphp
            	@foreach($contacts as $contact)
                <tr>

                	<td> <?= $no ?></td>
                	<td>{{ $contact->nama_kontak }}</td>
                	<td>{{ $contact->alamat }}</td>
                	<td>{{ $contact->email }}</td>
                	<td>{{ $contact->pesan }}</td>
                	<td class="text-center">
                		<a href="/dashboard/contacts/{{ $contact->id }}/edit" class="btn btn-sm btn-success">Edit</a>
                		<form method="POST" action="/dashboard/contacts/{{ $contact->id }}" >
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