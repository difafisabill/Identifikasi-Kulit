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
                            <h6 class="card-title">Edit Data Clinic</h6>
                            <form method="POST" action="{{ route('update.clinic')}}" class="forms-sample">
                                @csrf

                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">ID Klinik</label>
                                        <input type="text" name="id_klinik" class="form-control @error('id_klinik') is-invalid @enderror" value="{{$clinic->id_klinik}}" >
                                            @error('id_klinik')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Nama Klinik</label>
                                        <input type="text" name="tempat_praktik" class="form-control @error('tempat_praktik') is-invalid @enderror" value="{{$clinic->tempat_praktik}}">
                                            @error('tempat_praktik')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Nama Dokter</label>
                                    <select class="form-control" name="no_str" aria-label="Default select example">
                                      <option selected>ID Doctor</option>
                                      @foreach ($doctor as $item)
                                      <option value="{{$item->no_str}}" {{ $item->no_str == $clinic->no_str ? 'selected':''}}>{{$item->nama}}</option>
                                      @endforeach
                                    </select>
                                  </div>


                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Alamat</label>
                                        <textarea type="text" name="Alamat" class="form-control @error('Alamat') is-invalid @enderror">{{$clinic->Alamat}}
                                            @error('Alamat')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </textarea>
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
