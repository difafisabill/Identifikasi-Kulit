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
            <h6 class="card-title">Data Diagnosa</h6>

            <div class="table-responsive">
              <table id="dataTableExample" class="table">
                <thead>
                  <tr>

                    <th>Nama Pasient</th>
                    <th>Jenis Kulit</th>
                    <th>Gejala</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($hasil as $key=>$item)
                  <tr>
                    <td>{{$item -> user->name}}</td>
                    <td>{{$item -> jeniskulit->jenis_kulit}}</td>
                    <td>
                        @foreach ($item->gejala as $show)
                            <ul>
                                <li>
                                    {{$show->nama_gejala}}
                                </li>
                            </ul>
                        @endforeach
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
