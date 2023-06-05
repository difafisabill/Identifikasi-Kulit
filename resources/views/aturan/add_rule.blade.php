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
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script

    <div class="page-content">

        <div class="row profile-body">

            <!-- middle wrapper start -->
            <div class="col-md-8 col-xl-8 middle-wrapper">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Tambah Data Aturan</h6>
                            <form method="POST" action="{{ route('store.data_rules') }}" class="forms-sample">
                                @csrf

                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">ID Aturan</label>

                                    <input type="text" name="kd_aturan"
                                        class="form-control @error('kd_aturan') is-invalid @enderror">
                                    @error('kd_aturan')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                                @stack('style')
                                <div class="container mt-5">
                                    <select class="js-example-basic-single" multiple name="Framework[]"
                                        data-live-search="true">
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        <option value="4">Four</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Jenis Kulit</label>
                                    <select class="form-control" name="kd_JK" aria-label="Default select example">
                                        <option selected>Gejala</option>
                                        @foreach ($skintype as $item)
                                            <option value="{{ $item->id_JK }}">{{ $item->jenis_kulit }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary me-2">Save</button>

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
