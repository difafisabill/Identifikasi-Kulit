@extends('admin.admin_dashboard')
@section('admin')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Bordered table</h6>
                <p class="text-muted mb-3"> <code></code></p>
                <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Pasien</th>
                                <th>Nama</th>
                                <th>Biaya</th>
                                <th>Status Pembayaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>P0001</td>
                                <td class="py-1">
                                    <img src="https://via.placeholder.com/36x36" alt="image">
                                </td>
                                <td>Susi</td>
                                <td>Rp. 500.000</td>
                                <td>Belum dibayar</td>
                            </tr>
                            <tr>
                                <td>-</td>
                                <td class="py-1">
                                    <img src="https://via.placeholder.com/36x36" alt="image">
                                </td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
