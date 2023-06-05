@extends('admin.admin_dashboard')
@section('admin')

        <div class="page-content">
                <nav class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <div class="button me-2">
                            <a href = "{{route('admin.add_sesi')}}" class="btn btn-outline-primary">
                                <i class="btn-icon-prepend" data-feather="plus"></i>
                                Tambah Data
                            </a>
                        </div>
                        <div class="button">
                            <a href = "{{route('export.sesi')}}" class="btn btn-primary btn-icon-text me-2 mb-2 mb-md-0">
                                <i class="btn-icon-prepend" data-feather="printer"></i>
                                Cetak
                            </a>
                        </div>

                    </ol>
                </nav>

            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Data Sesi Dokter</h6>
            <div class="table-responsive">
              <table id="dataTableExample" class="table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Sesi</th>
                    <th>Tanggal</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($p as $key=>$item)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$item ->sesi}}</td>
                    <td>{{$item ->tanggal}}</td>
                    <td>
                        <a href = "{{route('edit.sesi',$item->id_sesi)}}" class="btn btn-primary btn-icon">
                            <i data-feather="edit"></i>
                        </a>

                        <a href = "{{route('delete.sesi',$item->id_sesi)}}" class="btn btn-danger btn-icon" id="delete">
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
