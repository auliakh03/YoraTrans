@extends('home')
@section('title', 'Tipe Bus')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 font-weight-bold">Data Tipe Bus</h1>

    <div class="card shadow-lg mb-4">
        <div class="card-header bg-primary py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-white">Data Tipe Bus</h6>
            <a href="#" class="btn btn-success btn-sm shadow-sm">
                <i class="fas fa-plus"></i> Tambah Data
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                        <tr class="text-center">
                            <th>No</th>
                            <th>Tipe Bus</th>
                            <th>Harga</th>
                            <th>Fasilitas</th>
                            <th>Kapasitas</th>
                            <th>Aksi</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach($data as $value)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $value->type }}</td>
                            <td>{{ $value->price }}</td>
                            <td>{{ $value->facility }}</td>
                            <td>{{ $value->seat_capacity }}</td>
                            <td class="align-middle">
                                <button type="button" class="btn btn-primary btn-icon btn-sm p-1" style="width: 30px; height: 30px;" title="Edit Guru">
                                  <a href="javascript:;" class="text-white font-weight-bold text-xs">
                                    <i class="fa fa-edit pt-1" aria-hidden="true"></i>
                                  </a>
                                </button>
                                <button type="button" class="btn btn-danger btn-icon btn-sm p-1" style="width: 30px; height: 30px;" title="Hapus Guru">
                                  <a href="javascript:;" class="text-white font-weight-bold text-xs">
                                    <i class="fa fa-trash pt-1" aria-hidden="true"></i>
                                  </a>
                                </button>
                              </td>
                        </tr>
                        @endforeach
                        

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
