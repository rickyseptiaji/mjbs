@extends('layouts.mainlayout')
@section('title', 'Absensi')
@section('judul')
    <h5>Daftar Hadir Karyawan</h5>
@endsection
@section('content')
<table class="table">
    <thead>
<tr>
    <th scope="col">#</th>
    <th scope="col">Nama Karyawan</th>
    <th scope="col">Tanggal</th>
    <th scope="col">Lokasi Absen</th>
    <th scope="col">Jam Masuk</th>
    <th scope="col">Jam Keluar</th>
    <th scope="col">Aksi</th>
</tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <th scope="row">Ricky</th>
            <th scope="row">2023-05-10</th>
            <th scope="row">Unpam Viktor</th>
            <th scope="row">16:21:14</th>
            <th scope="row">18:15:14</th>
            <th scope="row">
                <button>Edit</button>
                <button>Hapus</button>
            </th>
        </tr>
        <tr>
            <th scope="row">2</th>
            <th scope="row">Rocky</th>
            <th scope="row">2022-03-10</th>
            <th scope="row">Unpam Pusat</th>
            <th scope="row">10:21:14</th>
            <th scope="row">17:15:14</th>
            <th scope="row">
                <button>Edit</button>
                <button>Hapus</button>
            </th>
        </tr>
        <tr>
            <th scope="row">1</th>
            <th scope="row">Riko</th>
            <th scope="row">2021-02-09</th>
            <th scope="row">Kampus Kimia</th>
            <th scope="row">09:21:14</th>
            <th scope="row">10:15:14</th>
            <th scope="row">
                <button>Edit</button>
                <button>Hapus</button>
            </th>
        </tr>
    </tbody>
</table>
@endsection