@extends('home')
@section('title', 'Data Reservasi')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 font-weight-bold">Data Reservasi</h1>

    <div class="card shadow-lg mb-4">
        <div class="card-header bg-primary py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-white">Data Reservasi</h6>
            <a href="#" class="btn btn-success btn-sm shadow-sm">
                <i class="fas fa-plus"></i> Tambah Data
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>User ID</th>
                            <th>Reservasi ID</th>
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
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                    </thead>
                    <tbody>
                        <tr class="text-center align-middle">
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
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="#" class="btn btn-sm btn-warning me-2 w-auto">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <button class="btn btn-sm btn-danger w-auto">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="text-center align-middle">
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
                            <th>Sukses</th>
                            <td>2025-02-16 04:35:47</td>
                            <td>2025-02-16 04:35:47</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="#" class="btn btn-sm btn-warning me-2 w-auto">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <button class="btn btn-sm btn-danger w-auto">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
