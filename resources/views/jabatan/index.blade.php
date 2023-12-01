@extends('layout.main')

@section('content')
<div class="div ps-5">
    <h1>Data Jabatan</h1>
    <a href="/jabatan/create" class="btn btn-info btn-md p-2 mb-3 btn-primary">Tambah Data</a>
</div>
<div class="col-12 ps-1">
    <table class="table table-bordered border-dark">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Jabatan</th>
                <th scope="col">Gaji Pokok</th>
                <th scope="col">Upah Lembur</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jabatan as $jabatan)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $jabatan->nama_jabatan }}</td>
                <td>{{ $jabatan->jumlah_gaji_pokok }}</td>
                <td>{{ $jabatan->upah_lembur }}</td>
                <td>
                    <a href="/jabatan/edit/{{ $jabatan->id }}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/jabatan/destroy/{{ $jabatan->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Sure?')">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
