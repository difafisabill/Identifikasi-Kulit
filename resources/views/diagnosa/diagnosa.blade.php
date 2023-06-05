@extends('admin.admin_dashboard')
@section('admin')

        <div class="page-content">
            <nav class="page-breadcrumb">
                <ol class="breadcrumb">


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
            <form action="{{route('diagnosa.cek')}}" method="POST">
                @csrf

                <div class="form-check">
                    <ul class="list-group list-group-flush" >
                        @foreach ($diagnosa as $item)

                        <li class="list-group-item ">
                            <input name ="nama_gejala[]" class="form-check-input" type="checkbox" value="{{$item->kd_gejala}}" id="flexCheckChecked" >
                            <label class="form-check-label" for="flexCheckChecked">
                                {{$item->nama_gejala}}
                            </label>
                        </li>


                        @endforeach
                    </ul>
                    <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="btn-icon-prepend" data-feather="book-open"></i>
                        Diagnosa
                    </button>
                    </div>
                </div>
            </form>
          </div>
        </div>
                </div>
            </div>

        </div>


@endsection
