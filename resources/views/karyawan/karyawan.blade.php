@extends('layouts.mainlayout')
@section('title', 'Karyawan')
@section('judul')
    <h5>Data Karyawan</h5>
@endsection
@section('content')
<div>
    <a href="{{ url('karyawan/create') }}" class="btn btn-primary">Tambah Data</a>
</div>
    <table class="table">
        <thead>
    <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Email</th>
        <th scope="col">No HP</th>
        <th scope="col">Jabatan</th>
        <th scope="col">Divisi</th>
        <th scope="col">Aksi</th>
    </tr>
        </thead>
        <tbody>
            @php
                $increment = 1;
            @endphp
            @foreach ($data as $item)
            <tr>
                <th>{{$increment++}}</th>
                <th>{{$item->nama}}</th>
                <th>{{$item->jeniskelamin}}</th>
                <th>{{$item->email}}</th>
                <th>{{$item->nohp}}</th>
                <th>{{$item->jabatan}}</th>
                <th>{{$item->divisi}}</th>
                <th>
                    <a href="{{url('karyawan/'.$item->id.'/edit')}}" class="btn btn-primary">Ubah</a>
                    <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action="{{ url('karyawan/'.$item->id) }}" method="post">
                        @csrf 
                        @method('DELETE')
                        <button type="submit" name="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->withQueryString()->links() }}
@endsection