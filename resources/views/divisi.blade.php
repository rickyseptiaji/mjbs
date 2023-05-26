@extends('layouts.mainlayout')
@section('title', 'Divisi')
@section('judul')
    <h5>Data Divisi</h5>
@endsection
@section('content')
<a href="/">Tambahkan Data Divisi</a>
<table class="table">
    <thead>
<tr>
    <th scope="col">No</th>
    <th scope="col">Kode Divisi</th>
    <th scope="col">Nama Divisi</th>
    <th scope="col">Aksi</th>
</tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <th scope="row">DIV001</th>
            <th scope="row">QA</th>
            <th scope="row">
                <button>Edit</button>
                <button>Hapus</button>
            </th>
        </tr>
        <tr>
            <th scope="row">2</th>
            <th scope="row">DIV002</th>
            <th scope="row">QC</th>
            <th scope="row">
                <button>Edit</button>
                <button>Hapus</button>
            </th>
        </tr>
        <tr>
            <th scope="row">3</th>
            <th scope="row">DIV001</th>
            <th scope="row">OFFICE</th>
            <th scope="row">
                <button>Edit</button>
                <button>Hapus</button>
            </th>
        </tr>
    </tbody>
</table>
@endsection