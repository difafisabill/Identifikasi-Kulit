@extends('admin.admin_dashboard')
@section('admin')



        <div class="page-content">
            <nav class="page-breadcrumb">
                <ol class="breadcrumb">
                    <div class="button  me-2">
                        <a href = "{{route('admin.add_perawatan')}}" class="btn btn-outline-primary">
                            <i class="btn-icon-prepend" data-feather="plus"></i>
                            Tambah Data
                        </a>
                    </div>
                    <div class="button">
                        <a href = "{{route('export.perawatan')}}" class="btn btn-primary btn-icon-text me-2 mb-2 mb-md-0">
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
            <h6 class="card-title">Data Perawatan</h6>
            <div class="table-responsive">
              <table id="dataTableExample" class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Jenis Perawatan</th>
                    <th>Biaya</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($perawatan as $key=>$item)
                  <tr>
                    {{-- <td>{{$key+1}}</td> --}}
                    <td>{{$item -> id_perwatan}}</td>
                    <td>{{$item -> jenis_perawatan}}</td>
                    <td>{{$item -> Biaya}}</td>
                    <td>
                        <a href = "{{route('edit.perawatan',$item->id_perwatan)}}" class="btn btn-primary btn-icon">
                            <i data-feather="edit"></i>
                        </a>

                        <a href = "{{route('delete.perawatan',$item->id_perwatan)}}" class="btn btn-danger btn-icon" id="delete">
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
