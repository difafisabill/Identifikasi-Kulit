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
                            <h6 class="card-title">Edit Data Sesi</h6>
                            <form method="POST" action="{{route('update.sesi')}}" class="forms-sample">
                                @csrf


                                <input type="hidden" name="id_sesi" value="{{$p->id_sesi}}">
                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Sesi</label>
                                        <input type="text" name="sesi" class="form-control @error('sesi') is-invalid @enderror" value="{{$p->sesi}}" >
                                            @error('sesi')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">tanggal</label>
                                        <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{$p->tanggal}}">
                                            @error('tanggal')
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
