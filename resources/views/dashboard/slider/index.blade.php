@extends('dashboard')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Slider</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard / Slider</li>
    </ol>
            <a href="{{route('categories.create')}}" class="btn btn-primary">Buat Slider Baru</a><br><br>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama</th>
                        <th>Foto</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sliders as $slider)
                    <?php $no=1 ?>
                    <tr>

                        <td> <?= $no ?></td>
                        <td>{{ $slider->nama_slider }}</td>
                        <td>{{ $slider->foto }}</td>
                        <td class="text-center">
                            <a href="/dashboard/categories/{{ $slider->id }}/edit" class="btn btn-sm btn-success">Edit</a>
                            <form method="POST" action="/dashboard/categories/{{ $slider->id }}" >
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