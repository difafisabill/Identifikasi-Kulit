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
                            <h6 class="card-title">Tambah Data Transaksi</h6>
                            <form method="POST" action="{{ route('store.data_transaksi')}}" class="forms-sample">
                                @csrf

                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Nama Pasient</label>
                                    <select class="form-control" name="id_pasient" aria-label="Default select example">
                                      <option selected>Pasient</option>
                                      @foreach ($temu as $item)
                                      <option value="{{$item->id_pasient}}">{{$item->nama_pasient}}</option>
                                      @endforeach
                                    </select>
                                  </div>


                                  <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Jenis Perawatan</label>
                                    <select class="form-control" name="id_perwatan" aria-label="Default select example">
                                      <option selected>Perawatan</option>
                                      @foreach ($perawatan as $item)
                                      <option value="{{$item->id_perwatan}}">{{$item->jenis_perawatan}}</option>
                                      @endforeach
                                    </select>
                                  </div>

                                  <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Biaya</label>
                                    <select class="form-control" name="id_perwatan" aria-label="Default select example">
                                      <option selected>Biaya</option>
                                      @foreach ($perawatan as $item)
                                      <option value="{{$item->id_prawatan}}">{{$item->Biaya}}</option>
                                      @endforeach
                                    </select>
                                  </div>

                                  <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Klinik</label>
                                    <select class="form-control" name="id_klinik" aria-label="Default select example">
                                      <option selected>Klinik</option>
                                      @foreach ($clinic as $item)
                                      <option value="{{$item->id_klinik}}">{{$item->tempat_praktik}}</option>
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

@endsection
