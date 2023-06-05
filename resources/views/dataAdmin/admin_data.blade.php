@extends('admin.admin_dashboard')
@section('admin')

        <div class="page-content">
            <nav class="page-breadcrumb">
                <ol class="breadcrumb">
                    <a href = "{{route('admin.add_admin')}}" class="btn btn-outline-primary">
                        <i class="btn-icon-prepend" data-feather="plus"></i>
                        Tambah Data
                    </a>
                </ol>
            </nav>

            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Data Admin</h6>
            <div class="table-responsive">
              <table id="dataTableExample" class="table">
                <thead>
                  <tr>

                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Phone</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ($admin as $key=>$item)
                    <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->phone}}</td>

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
