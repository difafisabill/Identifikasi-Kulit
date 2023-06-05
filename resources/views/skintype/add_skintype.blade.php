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
                            <h6 class="card-title">Tambah Data Jenis Kulit</h6>
                            <form method="POST" action="{{ route('store.data_skintype')}}" class="forms-sample">
                                @csrf

                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">ID Jenis Kulit</label>
                                        <input type="text" name="id_JK" class="form-control @error('id_JK') is-invalid @enderror" >
                                            @error('id_JK')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Jenis Kulit</label>
                                        <input type="text" name="jenis_kulit" class="form-control @error('jenis_kulit') is-invalid @enderror" >
                                            @error('jenis_kulit')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                </div>


                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Penyebab</label>
                                        <input type="text" name="penyebab" class="form-control @error('penyebab') is-invalid @enderror" >
                                            @error('penyebab')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Solusi</label>
                                        <input type="text" name="solusi" class="form-control @error('solusi') is-invalid @enderror" >
                                            @error('solusi')
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
