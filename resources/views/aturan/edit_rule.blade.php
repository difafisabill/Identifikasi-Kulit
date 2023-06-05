@extends('admin.admin_dashboard')

@section('admin')
@push('style')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
        <style>
            .dropdown-toggle {
                height: 40px;
                width: 400px !important;
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    @endpush
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <div class="page-content">

        <div class="row profile-body">

            <!-- middle wrapper start -->
            <div class="col-md-8 col-xl-8 middle-wrapper">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Edit Data Aturan</h6>
                            <form method="POST" action="{{ route('update.rules')}}" class="forms-sample">
                                @csrf
                                <input type="hidden" name="id_JK" value="{{$skintype->id_JK}}">


                                @stack('style')
                                <div class="container mt-5">
                                    <label for="exampleInputUsername1" class="form-label">Gejala</label>
                                    <select class="js-example-basic-single" multiple name="gejala[]"
                                        data-live-search="true">
                                        @foreach ($gejala as $item)
                                        <option value="{{$item->kd_gejala}}">{{$item->nama_gejala}}</option>
                                        @endforeach

                                    </select>
                                </div>



                                  <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Jenis Kulit</label>
                                    <input type="text" name="kd_JK" class="form-control @error('kd_JK') is-invalid @enderror" value="{{$skintype->jenis_kulit}}">
                                    @error('kd_JK')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror

                                  </div>



                                <button type="submit" class="btn btn-primary me-2">Save Changes</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <script>
        $('select').selectpicker();
    </script>
@endsection
