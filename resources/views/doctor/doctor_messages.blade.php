@extends('doctor.doctor_dashboard')
@section('doctor')
    <div class="page-content">

        <div class="row inbox-wrapper">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="d-flex align-items-center justify-content-between p-3 border-bottom tx-16">
                                    <div class="d-flex align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-star text-primary icon-lg me-2">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg>
                                        <span>New Question</span>
                                    </div>
                                    <div>
                                        <a class="me-2" type="button" data-bs-toggle="tooltip"
                                            data-bs-title="Forward"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-share text-muted icon-lg">
                                                <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                                                <polyline points="16 6 12 2 8 6"></polyline>
                                                <line x1="12" y1="2" x2="12" y2="15">
                                                </line>
                                            </svg></a>
                                        <a class="me-2" type="button" data-bs-toggle="tooltip" data-bs-title="Print"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-printer text-muted icon-lg">
                                                <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                                <path
                                                    d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2">
                                                </path>
                                                <rect x="6" y="14" width="12" height="8">
                                                </rect>
                                            </svg></a>
                                        <a type="button" data-bs-toggle="tooltip" data-bs-title="Delete"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash text-muted icon-lg">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                            </svg></a>
                                    </div>
                                </div>
                                <div
                                    class="d-flex align-items-center justify-content-between flex-wrap px-3 py-2 border-bottom">
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <img src="https://via.placeholder.com/36x36" alt="Avatar"
                                                class="rounded-circle img-xs">
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="text-body">John Doe</a>
                                            <span class="mx-2 text-muted">to</span>
                                            <a href="#" class="text-body me-2">me</a>


                                        </div>
                                        <div class="tx-13 text-muted mt-2 mt-sm-0">Nov 20, 11:20</div>
                                    </div>
                                    <div class="p-4 border-bottom">
                                        <p>Hello,</p>
                                        <br>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque
                                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                            quasi
                                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                            voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores
                                            eos
                                            qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
                                            ipsum
                                            quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                                            tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                        <br>
                                        <p>Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur
                                            ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus
                                            eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque
                                            sed
                                            ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
                                            Maecenas
                                            nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis
                                            faucibus.
                                            Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo.
                                            Sed
                                            fringilla mauris sit amet nibh. Donec sodales sagittis magna.</p>
                                        <br>
                                        <p><strong>Regards</strong>,<br> John Doe</p>

                                    </div>
                                    <br>

                                    <button class="btn btn-primary me-1 mb-1"
                                        type="submit"> Jawab</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    @endsection
