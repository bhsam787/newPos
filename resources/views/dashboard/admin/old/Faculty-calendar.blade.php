@extends('dashboard.layout.master')

@section('section')

<!--begin::Content-->

<!--begin::Entry-->

<!--begin::Container-->

<div class="container">
    <!--begin::Card-->
    <div class="card card-custom">
        <!--begin::Header-->
        <!-- <div class="card-header flex-wrap border-0 pt-6 pb-0">
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
        </div> -->
        <!--end::Header-->
        <!--begin::Body-->
        <!-- <div class="card-body"> -->
            <!--begin: Datatable-->
            <!--begin: Calender-->

            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">Basic Calendar</h3>
                    </div>
                    <div class="card-toolbar">
                        <a href="#" class="btn btn-light-primary font-weight-bold">
                            <i class="ki ki-plus icon-md mr-2"></i>Add Event</a>
                    </div>
                </div>
                <div class="card-body">
                    <div id="kt_calendar"></div>
                </div>
            </div>
            <!--end::Card-->


            <!--end: Calender-->
            <!--end: Datatable-->

            <!--end::Body-->
        <!-- </div> -->
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->
</div>
<!--end::Content-->

@endsection