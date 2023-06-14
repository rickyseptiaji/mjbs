@extends('layouts.mainlayout')

@section('title', 'Stock')

@section('judul')
    <h5>Stock Barang</h5>
@endsection

@section('content')
    <div class="d-flex flex-wrap">
        <div class="p-2 flex-fill">
            <a href="{{url('stock/create')}}" class="btn btn-primary">Tambah Produk</a>
            <a href="{{ route('excel.export', ['start_date' => Request::get('start_date'), 'end_date' => Request::get('end_date'), 'katakunci' => Request::get('katakunci')]) }}" class="btn btn-secondary">Export</a>
        </div>
        <div class="p-2 flex-fill">
            <form class="d-flex" role="search" action="{{url('stock')}}">
                <input class="form-control me-2" type="search" placeholder="Search" name="katakunci" value="{{ $katakunci ?? '' }}" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
        <div class="p-2 flex-fill">
            <form class="d-flex" role="search" action="{{url('stock')}}">
                <div class="input-group">
                    <span class="input-group-text">Tanggal:</span>
                    <input type="date" name="start_date" class="form-control" value="{{Request::get('start_date')}}">
                    <span class="input-group-text">-</span>
                    <input type="date" name="end_date" class="form-control" value="{{Request::get('end_date')}}">
                    <button class="btn btn-outline-success" type="submit">Filter</button>
                </div>
            </form>
        </div>
    </div>
    <div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Produk</th>
                <th scope="col">Kode</th>
                <th scope="col">Kondisi</th>
                <th scope="col">Qty</th>
                <th scope="col">Satuan</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Tanggal & Jam</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
            $increment = ($data2->currentPage() - 1) * $data2->perPage() + 1;
            @endphp
            @foreach ($data2 as $item)
            <tr>
                <th>{{$increment++}}</th>
                <th>{{$item->produk}}</th>
                <th>{{$item->kode}}</th>
                <th>{{$item->kondisi}}</th>
                <th>{{$item->qty}}</th>
                <th>{{$item->satuan}}</th>
                <th>{{$item->jumlah}}</th>
                <th>{{$item->updated_at}}</th>
                <th>
                    <a href="{{url('stock/'.$item->id.'/edit')}}" class="btn btn-primary">Ubah</a>
                    <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action="{{ url('stock/'.$item->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" name="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    {{ $data2->withQueryString()->links() }}
@endsection

@push('styles')
    <style>
        /* Custom styles for mobile devices */
        @media (max-width: 576px) {
            .flex-fill {
                flex-basis: 100%;
            }
        }

        @media (max-width: 767px) {
            table {
                overflow-x: auto;
            }
        }
    </style>
@endpush
