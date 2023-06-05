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
                            <h6 class="card-title">Edit Data Temu</h6>
                            <form method="POST" action="" class="forms-sample">
                                @csrf
                                <input type="hidden" name="id_pasient" value="{{$temu->id_pasient}}">
                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Nama Pasient</label>
                                        <input type="text" name="nama_pasient" class="form-control @error('nama_pasient') is-invalid @enderror" value="{{$temu->nama_pasient}}" >
                                            @error('nama_pasient')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Nama Dokter</label>
                                    <select class="form-control" name="no_str" aria-label="Default select example">
                                      <option selected>Dokter</option>
                                      @foreach ($doctor as $item)
                                      <option value="{{$item->no_str}}" {{ $item->no_str == $doctor->no_str ? 'selected':''}}>{{$item->nama}}</option>
                                      @endforeach
                                    </select>
                                  </div>

                                  <div class="mb-3">
                                      <label for="exampleInputUsername1" class="form-label">Klinik</label>
                                      <select class="form-control" name="id_klinik" aria-label="Default select example">
                                        <option selected>Klinik</option>
                                        @foreach ($clinic as $item)
                                        <option value="{{$item->id_klinik}}" {{ $item->id_klinik == $clinic->id_klinik ? 'selected':''}}>{{$item->tempat_praktik}}</option>
                                        @endforeach
                                      </select>
                                    </div>


                                    <div class="mb-3">
                                        <label for="exampleInputUsername1" class="form-label">Sesi</label>
                                        <select class="form-control" name="id_sesi" aria-label="Default select example">
                                          <option selected>Sesi</option>
                                          @foreach ($p as $item)
                                          <option value="{{$item->id_sesi}}" {{ $item->id_sesi == $p->id_sesi ? 'selected':''}}>{{$item->tanggal}} Pukul : {{$item->sesi}}</option>
                                          @endforeach
                                        </select>
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
