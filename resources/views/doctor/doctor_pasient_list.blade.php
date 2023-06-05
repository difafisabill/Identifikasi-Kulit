@extends('doctor.doctor_dashboard')
@section('doctor')
<div class="page-content">


    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Bordered table</h6>
                    <p class="text-muted mb-3">Add class <code>.table-bordered</code></p>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tanggal</th>
                                    <th>Hari</th>
                                    <th>Email</th>
                                    <th>Pasient</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>8 Mei 2023</td>
                                    <td>Senin</td>


                                        <td class="py-1">
                                            <img src="https://via.placeholder.com/36x36" alt="image"> &nbsp;susi@gmail.com
                                        </td>

                                    <td>Susi</td>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>





</div>
@endsection
