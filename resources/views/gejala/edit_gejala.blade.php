@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <div class="page-content">

        <div class="row profile-body">

            <!-- middle wrapper start -->
            <div class="col-md-8 col-xl-8 middle-wrapper">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Edit Data Gejala</h6>
                            <form method="POST" action="{{ route('update.gejala')}}" class="forms-sample">
                                @csrf

                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Kode Gejala</label>
                                        <input type="text" name="kd_gejala" class="form-control @error('kd_gejala') is-invalid @enderror" value="{{$gejala->kd_gejala}}">
                                            @error('kd_gejala')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Nama  Gejala</label>
                                        <input type="text" name="nama_gejala" class="form-control @error('nama_gejala') is-invalid @enderror" value="{{$gejala->nama_gejala}}">
                                            @error('nama_gejala')
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

@endsection
