@extends('home')
@section('title', 'Dashboard')

@section('content')
  {{-- 1. Tambahkan style override di sini --}}
  <style>
    body {
      background: #f4f6fa;
    }
    /* bikin kartu summary lebih “ringan” */
    .card-dashboard {
      border: none;
      border-radius: .75rem;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }
    /* wrapper untuk tabel */
    .table-custom {
      border: none;
      border-radius: .5rem;
      overflow: hidden;
      box-shadow: 0 2px 8px rgba(0,0,0,0.03);
      margin-bottom: 1.5rem;
    }
    .table-custom thead {
      background: #eef2f7;
    }
  </style>

  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
      <a href="#" class="btn btn-danger shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i>
        Generate Report
      </a>
    </div>

    <!-- Summary Cards -->
    <div class="row mb-5 gx-4">
      <div class="col-md-6 col-lg-3 mb-4">
        <div class="card card-dashboard h-100">
          <div class="card-body d-flex align-items-center justify-content-between">
            <div>
              <small class="text-uppercase text-muted">Data Customer</small>
              <h3 class="mb-0">215</h3>
            </div>
            <i class="fas fa-users fa-2x text-secondary"></i>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 mb-4">
        <div class="card card-dashboard h-100">
          <div class="card-body d-flex align-items-center justify-content-between">
            <div>
              <small class="text-uppercase text-muted">Data Reservasi</small>
              <h3 class="mb-0">15</h3>
            </div>
            <i class="fas fa-dollar-sign fa-2x text-secondary"></i>
          </div>
        </div>
      </div>
    </div>

    <!-- Data Customer Table -->
    <div class="card table-custom">
      <div class="card-header py-3 bg-white border-0">
        <h6 class="m-0 font-weight-bold text-primary">Data Customer</h6>
      </div>
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-striped table-hover mb-0">
            <thead>
              <tr>
                <th>No</th>
                <th>Id Customer</th>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>No Telepon</th>
                <th>Alamat</th>
                <th>Created at</th>
                <th>Update at</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>1</td>
                <td>Dzihan Oktaviani</td>
                <td>dzhihan@gmail.com</td>
                <td>0897646542</td>
                <td>Jl.Sarimanah blok.04</td>
                <td>2025-02-16 04:32:32</td>
                <td>2025-03-01 23:06:29</td>
                <td>
                </tr>
              <tr>
                <td>2</td>
                <td>2</td>
                <td>Septiane</td>
                <td>septiane@gmail.com</td>
                <td>0896785251</td>
                <td>Jl.Sariasih Blok.02</td>
                <td>2025-02-16 04:32:32</td>
                <td>2025-03-01 23:06:29</td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Data Reservasi Table -->
    <div class="card table-custom">
      <div class="card-header py-3 bg-white border-0">
        <h6 class="m-0 font-weight-bold text-success">Data Reservasi</h6>
      </div>
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-striped table-hover mb-0">
            <thead>
              <tr>
                <th>No</th>
                <th>User ID</th>
                <th>ID Reservasi</th>
                <th>Jumlah Kursi</th>
                <th>Kode Reservasi</th>
                <th>Tanggal Reservasi</th>
                <th>Durasi Reservasi</th>
                <th>Tanggal Bayar</th>
                <th>Bayar</th>
                <th>Metode Pembayaran</th>
                <th>Status Pembayaran</th>
                <th>Created at</th>
                <th>Update at</th>
              </tr>
            </thead>
            <tbody>
             <tr>
                <td>1</td>
                <td>2</td>
                <td>101</td>
                <td>50</td>
                <td>YRES12345</td>
                <td>2025-03-02 06:06:29</td>
                <td>2025-02-14 00:00:00</td>
                <td>2025-02-14 00:00:00</td>
                <td>4300000</td>
                <td>BCA</td>
                <td>Sukses</td>
                <td>2025-02-16 04:32:32</td>
                <td>2025-03-01 23:06:29</td>
             </tr>
             <tr>
             <td>2</td>
             <td>3</td>
             <td>102</td>
             <td>30</td>
             <td>YRES12346</td>
             <td>2025-03-02 06:06:29</td>
             <td>2025-02-14 00:00:00</td>
             <td>2025-02-14 00:00:00</td>
             <td>4300000</td>
             <td>BCA</td>
             <td>Sukses</td>
             <td>2025-02-16 04:35:47</td>
             <td>2025-02-16 04:35:47</td>
             </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
@endsection
