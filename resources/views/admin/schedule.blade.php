@extends('home')
@section('title', 'Jadwal Bus')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Schedule</h1>
   
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataSchedule</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Pol</th>
                            <th>Bus Code</th>
                            <th>Bus Id Type</th>
                            <th>Initial Route</th>
                            <th>Destination Route</th>
                            <th>Departure Time</th>
                            <th>Arrival Time</th>
                            <th>Seat Total</th>
                            <th>Seat Available</th>
                            <th>Created at</th>
                            <th>Update at</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>B 7077 PGA</td>
                            <td>YR001</td>
                            <td>2</td>
                            <td>Bandung</td>
                            <td>Malang</td>
                            <td>00:35:07</td>
                            <td>00:00:09</td>
                            <td>50</td>
                            <td>30</td>
                            <td>2025-02-14 23:44:11</td>
                            <td>2025-03-01 23:38:06</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>B 7077 PGA</td>
                            <td>YR002</td>
                            <td>Bandung</td>
                            <td>Bali</td>
                            <td>00:25:19</td>
                            <td>00:00:07</td>
                            <td>50</td>
                            <td>50</td>
                            <td>50</td>
                            <td>2025-02-14 23:45:36</td>
                            <td>2025-02-16 07:45:05</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection