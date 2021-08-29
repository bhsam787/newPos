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

                        <select class="form-control" id="exampleSelect1">
                            <option>Summer 2020</option>
                            <option>Fall 2020</option>
                            <option>SPring 2020</option>
                            <option>Fall 2019</option>
                            <option>Spring 2019</option>
                        </select>
                        <div class="d-flex justify-content-between stream-button ml-40">
                            <a href="faculty-evaluation-course-list" class="btn btn-success font-weight-bold">Check Cgpa</a>
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
