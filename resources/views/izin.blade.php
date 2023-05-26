@extends('layouts.mainlayout')
@section('title', 'Izin')
@section('judul')
    <h5>Data Karyawan</h5>
@endsection
@section('content')
<a href="/">Ubah Status</a>
<table class="table">
    <thead>
<tr>
    <th scope="col">No</th>
    <th scope="col">Nama</th>
    <th scope="col">Izin</th>
    <th scope="col">Tanggal</th>
    <th scope="col">Jam</th>
    <th scope="col">Keterangan</th>
    <th scope="col">Status</th>
</tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <th scope="row">Ricky</th>
            <th scope="row">Pulang Lebih Awal</th>
            <th scope="row">2023-05-10</th>
            <th scope="row">10:35:00</th>
            <th scope="row">Sakit</th>
            <th scope="row">Menunggu Konfirmasi</th>
        </tr>
        <tr>
            <th scope="row">2</th>
            <th scope="row">Rocky</th>
            <th scope="row">Datang Terlambat</th>
            <th scope="row">2023-03-09</th>
            <th scope="row">11:35:00</th>
            <th scope="row">Batuk</th>
            <th scope="row">Menunggu Konfirmasi</th>
        </tr>
        <tr>
            <th scope="row">3</th>
            <th scope="row">Riko</th>
            <th scope="row">Pulang Lebih Awal</th>
            <th scope="row">2023-05-10</th>
            <th scope="row">09:35:00</th>
            <th scope="row">Sakit</th>
            <th scope="row">Disetujui</th>
        </tr>
    </tbody>
</table>
@endsection