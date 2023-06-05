@extends('admin.admin_dashboard')
@section('admin')

        <div class="page-content">
            <nav class="page-breadcrumb">
                <ol class="breadcrumb">
                    <div class="button  me-2">
                        <a href = "{{route('admin.add_clinicdata')}}" class="btn btn-outline-primary">
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
            <h6 class="card-title">Data Klinik</h6>
            <p class="text-muted mb-3">Data Dokter terpercaya yang telah lulus standarisasi kedokteran Indonesia.</p>
            <div class="table-responsive">
              <table id="dataTableExample" class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama Klinik</th>
                    <th>Nama Dokter</th>
                    <th>Alamat</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($clinic as $key=>$item)
                  <tr>
                    <td>{{$item -> id_klinik}}</td>
                    <td>{{$item -> tempat_praktik}}</td>
                    <td>{{$item -> doctor->nama}}</td>

                    <td>{{$item -> Alamat}}</td>
                    <td>
                        <a href = "{{route('edit.clinic', $item->id_klinik)}}" class="btn btn-primary btn-icon">
                            <i data-feather="edit"></i>
                        </a>
                        <a href = "{{route('delete.clinic', $item->id_klinik)}}" class="btn btn-danger btn-icon" id="delete">
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
