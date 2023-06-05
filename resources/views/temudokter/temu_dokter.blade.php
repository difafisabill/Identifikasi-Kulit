@extends('admin.admin_dashboard')
@section('admin')

        <div class="page-content">
            <nav class="page-breadcrumb">
                <ol class="breadcrumb">
                    <div class="button me-2">
                        <a href = "{{route('admin.add_temu')}}" class="btn btn-outline-primary">
                            <i class="btn-icon-prepend" data-feather="plus"></i>
                            Tambah Data
                        </a>
                    </div>

                </ol>
            </nav>

            <nav class="page-breadcrumb">
                <ol class="breadcrumb">

                </ol>
            </nav>

            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Data Temu Dokter</h6>

            <div class="table-responsive">
              <table id="dataTableExample" class="table">
                <thead>
                  <tr>
                    <th>Nama Pasient</th>
                    <th>Nama Dokter</th>
                    <th>Tempat Klinik</th>
                    <th>Sesi</th>
                    <th>Jam</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($temu as $key=>$item)
                  <tr>
                    <td>{{$item -> nama_pasient}}</td>
                    <td>{{$item -> doctor->nama}}</td>
                    <td>{{$item -> clinic->tempat_praktik}}</td>
                    <td>{{$item -> sesi->sesi}}</td>
                    <td>{{$item -> sesi->tanggal}}</td>
                    <td>
                        <a href = "{{route('edit.temu', $item->id_pasient)}}" class="btn btn-primary btn-icon">
                            <i data-feather="edit"></i>
                        </a>
                        <a href = "" class="btn btn-danger btn-icon" id="delete">
                            <i data-feather="trash"></i>
                        </a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
                </div>
            </div>

        </div>


@endsection
