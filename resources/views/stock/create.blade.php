@extends('layouts.mainlayout')
@section('title', 'Create Stock')
@section('judul')
    <h5>Tambahkan Data Produk</h5>
@endsection
@section('content')
<form action="{{ url('stock') }}" method="post">
  @csrf
    <div class="mb-3">
      <label for="nama" class="form-label">Nama Produk</label>
      <input type="text" class="form-control" id="produk" value="{{Session::get('produk')}}" name="produk">
    </div>
    <div class="mb-3">
      <label for="nama" class="form-label">Kode Produk</label>
      <input type="text" class="form-control" id="kode" value="{{Session::get('kode')}}" name="kode">
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Kondisi</label>
      <select id="kondisi" name="kondisi" class="form-select">  
        <option value="Baru" {{ old('kondisi') == 'Baru' ? 'selected' : '' }}>Baru</option>
        <option value="Bekas" {{ old('kondisi') == 'Bekas' ? 'selected' : '' }}>Bekas</option>
      </select>
    </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Qty</label>
        <input type="text" class="form-control" id="qty" value="{{Session::get('qty')}}" name="qty">
      </div>
      <div class="mb-3">
        <label for="disabledSelect" class="form-label">Satuan</label>
        <select id="satuan" name="satuan" class="form-select">  
          <option value="L" {{ old('satuan') == 'L' ? 'selected' : '' }}>Liter (L)</option>
          <option value="G" {{ old('satuan') == 'G' ? 'selected' : '' }}>Gram (G)</option>
          <option value="Kg" {{ old('satuan') == 'Kg' ? 'selected' : '' }}>Kilogram (Kg)</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Jumlah</label>
        <input type="text" class="form-control" id="jumlah" value="{{Session::get('jumlah')}}" name="jumlah">
      </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{url('stock')}}" class="btn btn-danger">Batal</a>
  </form>
@endsection