@extends('main')
@section('title', 'Reservasi')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Reservasi</h1>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataReservation</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>User ID</th>
                            <th>Id Schedule</th>
                            <th>Number of Seat</th>
                            <th>Reservation Code</th>
                            <th>Reservation Date</th>
                            <th>Reservation Duration</th>
                            <th>Payment Date</th>
                            <th>Payment</th>
                            <th>Payment Status</th>
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