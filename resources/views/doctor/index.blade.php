@extends('doctor.doctor_dashboard')
@section('doctor')
<div class="page-content">

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
        </div>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
                <span class="input-group-text input-group-addon bg-transparent border-primary"
                    data-toggle><i data-feather="calendar" class="text-primary"></i></span>
                <input type="text" class="form-control bg-transparent border-primary"
                    placeholder="Select date" data-input>
            </div>
            <button type="button" class="btn btn-outline-primary btn-icon-text me-2 mb-2 mb-md-0">
                <i class="btn-icon-prepend" data-feather="printer"></i>
                Print
            </button>
            <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
                <i class="btn-icon-prepend" data-feather="download-cloud"></i>
                Download Report
            </button>
        </div>
    </div>



    <div class="row">
        <div class="col-lg-12 col-xl-12 grid-margin grid-margin-xl-0 stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">PERTANYAAN BARU</h6>
                        <div class="dropdown mb-2">
                            <a type="button" id="dropdownMenuButton6" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                        data-feather="eye" class="icon-sm me-2"></i> <span
                                        class="">View</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                        data-feather="edit-2" class="icon-sm me-2"></i> <span
                                        class="">Edit</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                        data-feather="trash" class="icon-sm me-2"></i> <span
                                        class="">Delete</span></a>
                                <a class="dropdown-item d-flex align-items-center"
                                    href="javascript:;"><i data-feather="printer"
                                        class="icon-sm me-2"></i> <span class="">Print</span></a>
                                <a class="dropdown-item d-flex align-items-center"
                                    href="javascript:;"><i data-feather="download"
                                        class="icon-sm me-2"></i> <span
                                        class="">Download</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <a href="javascript:;" class="d-flex align-items-center border-bottom pb-3">
                            <div class="me-3">
                                <img src="https://via.placeholder.com/35x35"
                                    class="rounded-circle wd-35" alt="user">
                            </div>
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="text-body mb-2">Leonardo Payne</h6>
                                    <p class="text-muted tx-12">12.30</p>
                                </div>
                                <p class="text-muted tx-13">Selamat pagi Dok, Saya mau bertanya...</p>
                            </div>
                        </a>
                        <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
                            <div class="me-3">
                                <img src="https://via.placeholder.com/35x35"
                                    class="rounded-circle wd-35" alt="user">
                            </div>
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="text-body mb-2">Carl Henson</h6>
                                    <p class="text-muted tx-12">14.14 </p>
                                </div>
                                <p class="text-muted tx-13">Dok Dari Hasil diagnosa tipe kulit saya...</p>
                            </div>
                        </a>
                        <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
                            <div class="me-3">
                                <img src="https://via.placeholder.com/35x35"
                                    class="rounded-circle wd-35" alt="user">
                            </div>
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="text-body mb-2">Jensen Combs</h6>
                                    <p class="text-muted tx-12">08.22</p>
                                </div>
                                <p class="text-muted tx-13">Dok Boleh minta rekomendasi untuk...</p>
                            </div>
                        </a>
                        <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
                            <div class="me-3">
                                <img src="https://via.placeholder.com/35x35"
                                    class="rounded-circle wd-35" alt="user">
                            </div>
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="text-body mb-2">Amiah Burton</h6>
                                    <p class="text-muted tx-12">05.15 </p>
                                </div>
                                <p class="text-muted tx-13">Dok apa produk ini cocok buat saya?..</p>
                            </div>
                        </a>
                        <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
                            <div class="me-3">
                                <img src="https://via.placeholder.com/35x35"
                                    class="rounded-circle wd-35" alt="user">
                            </div>
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="text-body mb-2">Yaretzi Mayo</h6>
                                    <p class="text-muted tx-12">11.19 </p>
                                </div>
                                <p class="text-muted tx-13">Halo Dok, saya mau bertanya untuk...</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">Daftar Pasient Terbaru</h6>
                        <div class="dropdown mb-2">
                            <a type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                            </a>

                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th class="pt-0">#</th>
                                    <th class="pt-0">Nama Pasient</th>
                                    <th class="pt-0">Tanggal Temu</th>
                                    <th class="pt-0">Jenis Kulit</th>
                                    <th class="pt-0">Email</th>
                                    <th class="pt-0">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Leonardo Payne</td>
                                    <td>08/05/2023</td>
                                    <td>Kulit Kombinasi</td>
                                    <td>leonardopayne@gmail.com</td>
                                    <td><span class="badge bg-info">active</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Carl Henson</td>
                                    <td>08/05/2023</td>
                                    <td>Kulit Berminyak</td>
                                    <td>carlhenson@gmail.com</td>
                                    <td><span class="badge bg-primary"></span></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Jensen Combs</td>
                                    <td>08/05/2023</td>
                                    <td>Kulit Kering</td>
                                    <td>jensencombs@gmail.com</td>
                                    <td><span class="badge bg-info">active</span></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

        </div>
    </div> <!-- row -->

</div>
@endsection
