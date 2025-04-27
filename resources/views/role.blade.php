@extends('home')
@section('title', 'Role')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 font-weight-bold">Role Management</h1>

    <div class="card shadow-lg mb-4">
        <div class="card-header bg-primary py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-white">Data Role</h6>
            <a href="#" class="btn btn-success btn-sm shadow-sm">
                <i class="fas fa-plus"></i> Tambah Role
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody> 
                        <tr class="text-center align-middle">
                            <td>1</td>
                            <td>Admin</td>
                            <td>2025/03/11</td>
                            <td>2025/03/11</td>
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
                            <td>Customer</td>
                            <td>2025/03/11</td>
                            <td>2025/03/11</td>
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
