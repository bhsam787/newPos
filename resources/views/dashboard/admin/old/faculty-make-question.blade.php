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
                    <h3 class="card-label">Assigned Course
                        <span class="d-block text-muted pt-2 font-size-sm">This semeseter all course shown here</span>
                    </h3>
                </div>
                <div class="card-title justify-content-between ">
                    <h3 class="card-label">Course Duration
                        <span class="d-block text-muted pt-2 font-size-sm">10.11.2020- 10.11.2021</span>
                    </h3>
                </div>

            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body">
                <!--begin: Datatable-->
                <!-- began:: make question -->

                <!-- end::make question -->
                <!--end: Datatable-->

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
