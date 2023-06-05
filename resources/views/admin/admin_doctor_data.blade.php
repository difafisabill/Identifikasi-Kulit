@extends('admin.admin_dashboard')
@section('admin')

        <div class="page-content">
            <nav class="page-breadcrumb">
                <ol class="breadcrumb">
                    <a href = "{{route('admin.add_doctordata')}}" class="btn btn-outline-primary">
                        <i class="btn-icon-prepend" data-feather="plus"></i>
                        Tambah Data
                    </a>
                </ol>
            </nav>

            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Data Dokter</h6>
            <p class="text-muted mb-3">Data Dokter terpercaya yang telah lulus standarisasi.</p>
            <div class="table-responsive">
              <table id="dataTableExample" class="table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>No STR</th>
                    <th>Nama</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Tempat Praktik</th>
                    <th>Alamat</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($doctor as $key=>$item)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$item -> no_str}}</td>
                    <td>{{$item -> nama}}</td>
                    <td>{{$item -> phone}}</td>
                    <td>{{$item -> email}}</td>
                    <td>{{$item-> tempat_praktik}}</td>
                    <td>{{$item-> Alamat}}</td>
                    <td>
                        <a href = "{{route('edit.doctor', $item->no_str)}}" class="btn btn-primary btn-icon">
                            <i data-feather="edit"></i>
                        </a>

                        <a href = "{{route('delete.doctor', $item->no_str)}}" class="btn btn-danger btn-icon" id="delete">
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
