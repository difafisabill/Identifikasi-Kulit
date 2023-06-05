@extends('admin.admin_dashboard')
@section('admin')

        <div class="page-content">

            <nav class="page-breadcrumb">
                <ol class="breadcrumb">

                </ol>
            </nav>

            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Data Aturan</h6>

            <div class="table-responsive">
              <table id="dataTableExample" class="table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>ID Jenis Kulit</th>
                    <th>Nama Jenis Kulit</th>
                    <th>Gejala</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($rule as $key=>$item)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$item -> id_JK}}</td>
                    <td>{{$item -> jenis_kulit}}</td>
                    <td>
                        @foreach ($item->gejala as $show)
                            <ul>
                                <li>
                                    {{$show->nama_gejala}}
                                </li>
                            </ul>
                        @endforeach
                    </td>

                    <td>
                        <a href = "{{route('aturan.edit', $item->id_JK)}}" class="btn btn-primary btn-icon">
                            <i data-feather="edit"></i>
                        </a>
                        <a href = "{{route('delete.rules', $item->id_JK)}}" class="btn btn-danger btn-icon" id="delete">
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
