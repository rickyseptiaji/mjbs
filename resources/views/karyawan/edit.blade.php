@extends('layouts.mainlayout')
@section('title', 'Edit')
@section('judul')
    <h5>Tambahkan Data Karyawan</h5>
@endsection
@section('content')
<form action="{{ url('karyawan/'.$data->id) }}" method="post">
  @csrf
  @method('PUT')
    <div class="mb-3">
      <label for="nama" class="form-label">Nama Lengkap</label>
      <input type="text" class="form-control" id="nama" value="{{$data->nama}}" aria-describedby="emailHelp" name="nama">
    </div>
    <div class="mb-3">
        <label for="disabledSelect" class="form-label">Jenis Kelamin</label>
        <select id="jeniskelamin" name="jeniskelamin" class="form-select">
          <option value="Laki-Laki" {{old('jeniskelamin', $data->jeniskelamin) == 'Laki-Laki' ? 'selected' : ''}}>Laki-Laki</option> 
          <option value="Perempuan" {{old('jeniskelamin', $data->jeniskelamin) == 'Perempuan' ? 'selected' : ''}}>Perempuan</option> 
        </select>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" value="{{$data->email}}" name="email">
      </div>
      <div class="mb-3">
        <label for="nohp" class="form-label">No HP</label>
        <input type="text" class="form-control" id="nohp" value="{{$data->nohp}}" name="nohp">
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" id="alamat" rows="3" name="alamat">{{$data->alamat }}</textarea>
      </div>
      <div class="mb-3">
        <label for="jabatan" class="form-label">Jabatan</label>
        <input type="text" class="form-control" id="jabatan" value="{{$data->jabatan}}" name="jabatan">
      </div>
      <div class="mb-3">
        <label for="divisi" class="form-label">Divisi</label>
        <input type="text" class="form-control" id="divisi" value="{{$data->divisi}}" name="divisi">
      </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{url('karyawan')}}" class="btn btn-danger">Batal</a>
  </form>
@endsection