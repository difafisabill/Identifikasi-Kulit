@extends('admin.admin_dashboard')
@section('admin')

        <div class="page-content">
            <nav class="page-breadcrumb">
                <ol class="breadcrumb">
                    <div class="button me-2">
                        <a href = "{{route('admin.add_transaksi')}}" class="btn btn-outline-primary">
                            <i class="btn-icon-prepend" data-feather="plus"></i>
                            Tambah Data
                        </a>
                    </div>
                    <div class="button">
                        <a href = "{{route('export.clinic')}}" class="btn btn-primary btn-icon-text me-2 mb-2 mb-md-0">
                            <i class="btn-icon-prepend" data-feather="printer"></i>
                            Cetak
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
            <h6 class="card-title">Data Transaksi</h6>

            <div class="table-responsive">
              <table id="dataTableExample" class="table">
                <thead>
                  <tr>
                    <th>Nama Pasient</th>
                    <th>Jenis Perawatan</th>
                    <th>Biaya</th>
                    <th>Klinik</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($transaksi as $key=>$item)
                  <tr>
                    <td>{{$item -> pasient->nama_pasient}}</td>
                    <td>{{$item -> perawatan->jenis_perawatan}}</td>
                    <td>{{$item -> perawatan->biaya}}</td>
                    <td>{{$item -> clinic->tempat_praktik}}</td>
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
