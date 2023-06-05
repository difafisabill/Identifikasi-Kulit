@extends('admin.admin_dashboard')
@section('admin')

        <div class="page-content">

            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Surat Janji Temu Pasient</h6>
            <div class="table-responsive">
              <table id="dataTableExample" class="table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Pasient</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($temu as $key=>$item)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$item ->nama_pasient}}</td>
                    <td>
                        <a href = "{{route('export.surat')}}" class="btn btn-primary btn-icon">
                            <i data-feather="printer"></i>
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
