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
                            <h6 class="card-title">Edit Data Dokter</h6>
                            <form method="POST" action="{{ route('update.doctor')}}" class="forms-sample">
                                @csrf



                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">No STR</label>
                                        <input type="text" name="no_str" class="form-control @error('no_str') is-invalid @enderror" value="{{$doctor->no_str}}" >
                                            @error('no_str')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Nama</label>
                                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{$doctor->nama}}">
                                            @error('nama')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                </div>


                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Phone</label>
                                        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{$doctor->phone}}">
                                            @error('phone')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Email</label>
                                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{$doctor->email}}">
                                            @error('email')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Tempat Praktik</label>
                                        <input type="text" name="tempat_praktik" class="form-control @error('tempat_praktik') is-invalid @enderror" value="{{$doctor->tempat_praktik}}" >
                                            @error('tempat_praktik')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Alamat</label>
                                        <input type="text" name="Alamat" class="form-control @error('Alamat') is-invalid @enderror" value="{{$doctor->Alamat}}">
                                            @error('Alamat')
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
