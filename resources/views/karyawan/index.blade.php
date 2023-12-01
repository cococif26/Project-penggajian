@extends('layout.main')
@section('content')

<div class="div ps-5">
    <h1>Data Karyawan</h1>
    <a href="/karyawan/create" class="btn mb-3 btn-info btn-primary">Tambah Data</a>
</div>
<div class="col-12 ps-1">
    <table class="table table-bordered border-dark">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Nama Karyawan</th>
                <th scope="col">Alamat</th>
                <th scope="col">No. Handphone</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Status</th>
                <th scope="col">Jumlah Anak</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>01</td>
                <td>Kepala Devisi IT</td>
                <td>Eko</td>
                <td>Bogor</td>
                <td>08xxxxx</td>
                <td>Bogor</td>
                <td>20 Agustus 1987</td>
                <td>Laki-Laki</td>
                <td>Menikah</td>
                <td>2</td>
                <td class="d-flex justify-content-between">
                    <a href="/karyawan/edit" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm" onclick="return confirm('Sure?')">Delete</a>
                </td>
        </tbody>
    </table>
</div>
@endsection
