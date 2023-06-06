@extends('layouts.mainlayout')
@section('title', 'Edit Stock')
@section('judul')
    <h5>Edit Data Stock</h5>
@endsection
@section('content')
<form action="{{ url('stock/'.$data2->id) }}" method="post">
  @csrf
  @method('PUT')
    <div class="mb-3">
      <label for="nama" class="form-label">Nama Produk</label>
      <input type="text" class="form-control" id="produk" value="{{$data2->produk}}" name="produk">
    </div>
    <div class="mb-3">
      <label for="nama" class="form-label">Kode Produk</label>
      <input type="text" class="form-control" id="kode" value="{{$data2->kode}}" name="kode">
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Kondisi</label>
      <select id="kondisi" name="kondisi" class="form-select">  
        <option>{{$data2->kondisi}}</option>
        <option>{{$data2->kondisi}}</option>
      </select>
    </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Qty</label>
        <input type="text" class="form-control" id="qty" value="{{$data2->qty}}" name="qty">
      </div>
      <div class="mb-3">
        <label for="disabledSelect" class="form-label">Satuan</label>
        <select id="satuan" name="satuan" class="form-select">  
          <option >{{$data2->satuan}}</option>
          <option >{{$data2->satuan}}</option>
          <option >{{$data2->satuan}}</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Jumlah</label>
        <input type="text" class="form-control" id="jumlah" value="{{$data2->jumlah}}" name="jumlah">
      </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{url('stock')}}" class="btn btn-danger">Batal</a>
  </form>
@endsection