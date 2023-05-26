@extends('layouts.mainlayout')
@section('title', 'Home')
@section('judul')
    <h5>Dashboard</h5>
@endsection
@section('content')
    <h1>Sistem Informasi Manajemen Karyawan</h1>
    <h3>Admin Dashboard</h3>
    <div class="row gap-2">
        <div class="col shadow p-3 bg-body-tertiary rounded">
            <img src="assets/MultipleUsers.png" alt="user" height="100" width="100">
          Data Pegawai
        </div>
        <div class="col shadow p-3 bg-body-tertiary rounded">
            <img src="assets/calendar.png" alt="user" height="100" width="100">
          Absensi Hari Ini
        </div>
        <div class="col shadow p-3 bg-body-tertiary rounded">
            <img src="assets/check.png" alt="user" height="100" width="100">
          Izin
        </div>
        <div class="col shadow p-3 bg-body-tertiary rounded">
            <img src="assets/check.png" alt="user" height="100" width="100">
            Lembur
          </div>
      </div>
@endsection