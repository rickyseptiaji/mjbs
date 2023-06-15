@extends('layouts.mainlayout')

@section('title', 'Home')

@section('judul')
    <h5>Dashboard</h5>
@endsection

@section('content')
    <h1>Sistem Informasi Manajemen Karyawan</h1>
    <h3>Admin Dashboard</h3>

    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="card text-center">
                <a href="/karyawan" class="shadow p-3 bg-body-tertiary rounded link-underline link-underline-opacity-0">
                    <img src="assets/MultipleUsers.png" alt="user" height="100" width="100">
                    <p class="text-black">Data Pegawai</p>
                </a>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card text-center">
                <a href="" class="shadow p-3 bg-body-tertiary rounded link-underline link-underline-opacity-0">
                    <img src="assets/calendar.png" alt="calendar" height="100" width="100">
                    <p class="text-black">Kalender</p>
                </a>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card text-center">
                <a href="" class="shadow p-3 bg-body-tertiary rounded link-underline link-underline-opacity-0">
                    <img src="assets/check.png" alt="check" height="100" width="100">
                    <p class="text-black">Absen</p>
                </a>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card text-center">
                <a href="/stock" class="shadow p-3 bg-body-tertiary rounded link-underline link-underline-opacity-0">
                    <img src="assets/product.png" alt="check" height="100" width="100">
                    <p class="text-black">Data Produk</p>
                </a>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        /* Custom styles for mobile devices */
        @media (max-width: 768px) {
            .card {
                margin-bottom: 10px;
            }
        }
    </style>
@endpush
