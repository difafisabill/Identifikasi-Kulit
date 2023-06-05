@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <div class="page-content">

        <div class="row profile-body">
            <!-- left wrapper start -->
            <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
                <div class="card rounded">
                    <div class="card-body">
                        <div>
                            <img class="wd-70 rounded-circle" src="{{ (!empty($profileData->photo))? url('upload/admin_image/'.$profileData->photo): url('upload/no_image.png')}}" alt="profile">
                             <span class="h4 ms-3 text-dark">{{$profileData->username}}</span>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Name:</label>
                            <p class="text-muted">{{$profileData->name}}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                            <p class="text-muted">{{$profileData->email}}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone:</label>
                            <p class="text-muted">{{$profileData->phone}}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Address:</label>
                            <p class="text-muted">{{$profileData->address}}</p>
                        </div>

                    </div>
                </div>
            </div>
            <!-- left wrapper end -->
            <!-- middle wrapper start -->
            <div class="col-md-8 col-xl-8 middle-wrapper">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Update Admin Profile</h6>
                            <form method="POST" action="{{ route('admin.profile.store')}}" class="forms-sample" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Username</label>
                                        <input type="text" name="username" class="form-control" id="exampleInputUsername1"
                                        placeholder="Username" autocomplete="off" value="{{$profileData->username}}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" id="exampleInputUsername1"
                                            placeholder="Name" autocomplete="off" value="{{$profileData->name}}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Email</label>
                                        <input type="text" name="email" class="form-control" id="exampleInputUsername1"
                                            placeholder="Email" autocomplete="off" value="{{$profileData->email}}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Mobile</label>
                                        <input type="text" name="phone" class="form-control" id="exampleInputUsername1"
                                            placeholder="Name" autocomplete="off" value="{{$profileData->phone}}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Address</label>
                                        <input type="text" name="address" class="form-control" id="exampleInputUsername1"
                                            placeholder="Address" autocomplete="off" value="{{$profileData->address}}">
                                </div>


                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">Photo</label>
                                        <input type="file" name="photo" class="form-control" id="image">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputUsername1" class="form-label">  </label>
                                    <img id="showImage"class="wd-70 rounded-circle" src="{{ (!empty($profileData->photo))? url('upload/admin_image/'.$profileData->photo): url('upload/no_image.png')}}" alt="profile">
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Save Changes</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
    </script>
@endsection
