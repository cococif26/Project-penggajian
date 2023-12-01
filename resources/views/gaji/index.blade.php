@extends('layout.main')

@section('content')
<div class="div ps-5">
    <h1>Data Gaji</h1>
    <a href="/gaji/create" class="btn btn-info btn-md p-2 mb-3 btn-primary">Tambah Data</a>
</div>
<div class="col-12 ps-1">
    <table class="table table-bordered border-dark">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Bulan</th>
                <th scope="col">Karyawan</th>
                <th scope="col">Total Tunjungan</th>
                <th scope="col">Gaji Kotor</th>
                <th scope="col">Gaji Bersih</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">01</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a href="/gaji/edit" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm" onclick="return confirm('Sure?')">Delete</a>
                </td>
        </tbody>
    </table>
</div>
@endsection
