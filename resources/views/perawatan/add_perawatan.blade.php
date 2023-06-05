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
                            <h6 class="card-title">Tambah Data Dokter</h6>
                            <form method="POST" action="{{ route('store.data_perawatan')}}" class="forms-sample">
                                @csrf



                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Jenis Perawatan</label>
                                        <input type="text" name="jenis_perawatan" class="form-control @error('jenis_perawatan') is-invalid @enderror" >
                                            @error('jenis_perawatan')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Biaya</label>
                                        <input type="text" name="Biaya" class="form-control @error('Biaya') is-invalid @enderror" >
                                            @error('Biaya')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Save</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
