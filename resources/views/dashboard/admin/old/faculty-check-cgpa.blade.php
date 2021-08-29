@extends('dashboard.layout.master')

@section('section')

<!--begin::Content-->



<!--begin::Entry-->

<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Card-->
        <div class="card card-custom">
            <!--begin::Header-->
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                <div class="card-title justify-content-between ">
                    <h3 class="card-label">Search Student
                        <span class="d-block text-muted pt-2 font-size-sm">Give Student Id for viewing result</span>
                    </h3>
                </div>
                <!-- <div class="card-title justify-content-between "> <h3
                class="card-label">Course Duration <span class="d-block text-muted pt-2
                font-size-sm">10.11.2020- 10.11.2021</span></h3> </div> -->
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <!-- Content::stard -->
            <div class="card-body">
                <div class="d-flex flex-column flex-grow-1">
                    <div class="input-group input-group-solid col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <span class="svg-icon svg-icon-lg">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px"
                                        height="24px"
                                        viewBox="0 0 24 24"
                                        version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <path
                                                d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                fill="#000000"
                                                fill-rule="nonzero"
                                                opacity="0.3"></path>
                                            <path
                                                d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                fill="#000000"
                                                fill-rule="nonzero"></path>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                        </div>
                        <input type="text" class="form-control py-4 h-auto" placeholder="Student Id"></div>
                        <div class="d-flex justify-content-between stream-button ml-40">
                            <a href="#" class="btn btn-success font-weight-bold">Check Cgpa</a>
                        </div>
                    </div>
                </div>
                <!-- Content::stard -->

                <!-- Content::stard -->

                <!-- content::end -->

            </div>

            <!--end::Body-->
            

        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->
</div>
<!--end::Content-->

@endsection
