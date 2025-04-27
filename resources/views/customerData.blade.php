@extends('home')
@section('title', 'Data Customer')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 font-weight-bold">Data Customer</h1>

    <div class="card shadow-lg mb-4">
        <div class="card-header bg-primary py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-white">Data Customer</h6>
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
                            <th>Id Customer</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>No Telepon</th>
                            <th>Alamat</th>
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
                            <td>1</td>
                            <td>Dzihan Oktaviani</td>
                            <td>dzhihan@gmail.com</td>
                            <td>0897646542</td>
                            <td>Jl.Sarimanah blok.04</td>
                            <td>2025-02-16 04:32:32</td>
                            <td>2025-03-01 23:06:29</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <button class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i> Hapus
                                </button>
                            </td>
                        </tr>
                        <tr class="text-center align-middle">
                            <td>2</td>
                            <td>2</td>
                            <td>Septiane</td>
                            <td>septiane@gmail.com</td>
                            <td>0896785251</td>
                            <td>Jl.Sariasih Blok.02</td>
                            <td>2025-02-16 04:32:32</td>
                            <td>2025-03-01 23:06:29</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <button class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i> Hapus
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
