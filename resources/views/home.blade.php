@extends('layouts.mainlayout')
@section('title', 'Home')
@section('judul')
    <h5>Dashboard</h5>
@endsection
@section('content')
    <h1>Sistem Informasi Manajemen Karyawan</h1>
    <h3>Admin Dashboard</h3>
    <div class="col gap-2 d-flex">
      <div class="card w-25 p-3 text-center">
        <a href="/karyawan" class="shadow p-3 bg-body-tertiary rounded link-underline link-underline-opacity-0">
          <img src="assets/MultipleUsers.png" alt="user" height="100" width="100">
          <p class="text-black">Data Pegawai</p>
        </a>
      </div>
      <div class="card w-25 p-3 text-center">
        <a href="" class="shadow p-3 bg-body-tertiary rounded link-underline link-underline-opacity-0">
          <img src="assets/calendar.png" alt="calendar" height="100" width="100">
          <p class="text-black">Kalender</p>
        </a>
      </div>
      <div class="card w-25 p-3 text-center">
        <a href="" class="shadow p-3 bg-body-tertiary rounded link-underline link-underline-opacity-0">
          <img src="assets/check.png" alt="check" height="100" width="100">
          <p class="text-black">Absen</p>
        </a>
      </div>
      <div class="card w-25 p-3 text-center">
        <a href="" class="shadow p-3 bg-body-tertiary rounded link-underline link-underline-opacity-0">
          <img src="assets/check.png" alt="check" height="100" width="100">
          <p class="text-black">Izin</p>
        </a>
      </div>
      </div>
@endsection