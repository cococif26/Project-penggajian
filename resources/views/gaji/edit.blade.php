@extends('layout.main')

@section('content')
<div class="col-12 ps-4">
    <h3>>> Edit Data Jabatan</h3>
    <a href="/jabatan/index" class="btn btn-info btn-md p-2 mb-3">Kembali</a>
</div>
<div class="col-12 ps-4">
    <div class="col-12 bg-light p-2 rounded-3 shadow-sm">
        <form class="col-12 ps-4" method="POST">
            @csrf
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nama Karyawan</label>
                <div class="col-sm-10">
                    <select class="form-control">
                        <option>Januari</option>
                        <option>Februari</option>
                        <option>Maret</option>
                        <option>April</option>
                        <option>Mei</option>
                        <option>Juni</option>
                        <option>Juli</option>
                        <option>Agustus</option>
                        <option>September</option>
                        <option>Oktober</option>
                        <option>November</option>
                        <option>Desember</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Karyawan</label>
                <div class="col-sm-10">
                    <select class="form-control">
                        <option>Karyawan</option>
                        <option></option>
                        <option></option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Total Tunjangan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="upah_lembur"/>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Gaji Kotor</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="upah_lembur"/>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Total Bersih</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="upah_lembur"/>
                </div>
            </div>
            <div class="d-grid text-end">
                <div class="col-sm-12">
                    <button class="btn btn-primary btn-sm" type="submit">UPDATE</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
