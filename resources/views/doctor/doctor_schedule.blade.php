@extends('doctor.doctor_dashboard')
@section('doctor')
    <div class="page-content">



        <div class="row">
            <div class="col-lg-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Jadwal Shiff</h4>
                        <p class="text-muted mb-3">

                        </p>
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Hari</th>
                                        <th>Tanggal</th>
                                        <th>Jam</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-info text-dark">
                                        <td>Senin</td>
                                        <td>8 Mei 2023</td>
                                        <td>19.00-22.00</td>

                                    </tr>
                                    <tr class="table-warning text-dark">
                                        <td>Kamis</td>
                                        <td>11 Mei 2023</td>
                                        <td>09.00-11.00</td>
                                    </tr>
                                    <tr class="table-danger text-dark">
                                        <td>Selasa</td>
                                        <td>16 Mei 2023</td>
                                        <td>15.00-17.00</td>
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
