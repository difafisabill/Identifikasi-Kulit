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
                            <h6 class="card-title">Tambah Data Sesi</h6>
                            <form method="POST" action="{{ route('store.data_sesi')}}" class="forms-sample">
                                @csrf



                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Sesi</label>
                                        <input type="text" name="sesi" class="form-control @error('sesi') is-invalid @enderror" >
                                            @error('sesi')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Tanggal</label>
                                        <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" >
                                            @error('tanggal')
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
