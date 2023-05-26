@extends('layouts.mainlayout')
@section('title', 'Lembur')
@section('judul')
    <h5>Data Lembur</h5>
@endsection
@section('content')
<a href="/">Ubah Status</a>
<table class="table">
    <thead>
<tr>
    <th scope="col">No</th>
    <th scope="col">Nama</th>
    <th scope="col">Tanggal</th>
    <th scope="col">Jam Lembur Mulai | Berakhir</th>
    <th scope="col">Keperluan Lembur</th>
    <th scope="col">Status</th>
</tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <th scope="row">Ricky</th>
            <th scope="row">2023-03-09</th>
            <th scope="row">10:32:23 | 11:11:10</th>
            <th scope="row">Lembur</th>
            <th scope="row">Menunggu Konfirmasi</th>
        </tr>
        <tr>
            <th scope="row">2</th>
            <th scope="row">Rocky</th>
            <th scope="row">2023-03-09</th>
            <th scope="row">10:32:23 | 11:11:10</th>
            <th scope="row">Lembur</th>
            <th scope="row">Menunggu Konfirmasi</th>
        </tr>
        <tr>
            <th scope="row">3</th>
            <th scope="row">Riko</th>
            <th scope="row">2023-03-09</th>
            <th scope="row">10:32:23 | 11:11:10</th>
            <th scope="row">Lembur</th>
            <th scope="row">Menunggu Konfirmasi</th>
        </tr>
    </tbody>
</table>
@endsection