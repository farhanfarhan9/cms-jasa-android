@extends('dashboard')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Testimoni</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard / Testimoni</li>
    </ol>
            <a href="{{route('testimonies.create')}}" class="btn btn-primary">Buat Testimoni Baru</a><br><br>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Testimoni</th>
                        <th>foto</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($testimonies as $testimony)
                    <?php $no=1 ?>
                    <tr>

                        <td> <?= $no ?></td>
                        <td>{{ $testimony->nama_testimoni }}</td>
                        <td>{{ $testimony->jabatan }}</td>
                        <td>{{ $testimony->testimoni }}</td>
                        <td class="text-center"><img src="{{asset('storage/'.$testimony->foto)}}" width="110px" alt=""></td>
                        <td class="text-center">
                            <a href="/dashboard/testimonies/{{ $testimony->id }}/edit" class="btn btn-sm btn-success">Edit</a>
                            <form method="POST" action="/dashboard/testimonies/{{ $testimony->id }}" >
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