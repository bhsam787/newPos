@extends('dashboard.layout.master')

@section('section')

    <div class="d-flex flex-column-fluid">
        <div class="container">

            <div class="row">


                @foreach($sectionDetail as $value)
                    <div class="col-lg-4 mt-10">
                        <div class="card card-custom">
                            <div class="card-header">
                                <div class="card-title">

                                    <h3 class="card-label">
                                        {{ $value->course->initial }}
                                        <small>{{ $value->section->section_number }}</small>
                                        </br> <span style="font-size:12px">{{ $value->faculty->name }}</span>
                                    </h3>
                                </div>

                                <div class="card-footer d-flex justify-content-between stream-button">
                                    <a href="#" onclick="slug('<?php echo $value->course->initial; ?>')" id="meeting" data-toggle="modal" data-target="#exampleModalCenter1" class="btn btn-success font-weight-bold mr-2">Conference</a>
                                    <a href="{{ route('faculty-stream.show',$value->id) }}"
                                       class="btn btn-info font-weight-bold mr-2">stream</a>
                                </div>


                            </div>

                        <div class="card-body">

                            <div class="row">
                                <!-- <div class="col">
                                    <span class="d-block font-weight-bold mb-4 text-center">Class Time</span>
                                    <span class="btn btn-light-success btn-sm font-weight-bold btn-upper btn-text mt-2">Saturday (4:20-5:50)</span>
                                    <span class="btn btn-light-success btn-sm font-weight-bold btn-upper btn-text mt-2">Sunday (4:20-5:50)</span>
                                    <span class="btn btn-light-success btn-sm font-weight-bold btn-upper btn-text mt-2">Wednesday (4:20-5:50)</span>
                                </div> -->
                                <div class="timeline timeline-5 mt-3">
                                <?php
                                $week = array("Saturday", "Monday", "Wednesday");
                                ?>
                                @foreach($week as $key=>$value1)
                                    <!--begin::Item-->
                                        <div class="timeline-item align-items-start">
                                            <!--begin::Label-->
                                            <div
                                                class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3">{{ $value1 }}</div>
                                            <!--end::Label-->
                                            <!--begin::Badge-->
                                            <div class="timeline-badge">
                                                <i class="fa fa-genderless text-info icon-xxl"></i>
                                            </div>
                                            <!--end::Badge-->
                                            <!--begin::Desc-->
                                            <div class="timeline-content font-weight-bolder text-dark-75">

                                                <?php
                                                $start = $value->section->start;
                                                $start = explode(":", $start);
                                                $hours = $start[0];


                                                $minutes = $start[1];
                                                if ($hours > 12) {
                                                    $meridian = 'PM';
                                                    $hours = $hours - 12;
                                                } else if ($hours < 12) {
                                                    $meridian = 'AM';
                                                    if ($hours == 0) {
                                                        $hours = 12;
                                                    }
                                                } else {
                                                    $meridian = 'PM';
                                                }
                                                echo $hours . ':' . $minutes . ' ' . $meridian;

                                                $end = $value->section->end;
                                                $end = explode(":", $end);
                                                $hours = $end[0];
                                                $minutes = $end[1];
                                                if ($hours > 12) {
                                                    $meridian = 'PM';
                                                    $hours = $hours - 12;
                                                } else if ($hours < 12) {
                                                    $meridian = 'AM';
                                                    if ($hours == 0) {
                                                        $hours = 12;
                                                    }
                                                } else {
                                                    $meridian = 'PM';
                                                }
                                                echo ' - ' . $hours . ':' . $minutes . ' ' . $meridian;

                                                ?>


                                            </div>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Item-->
                                    @endforeach


                                </div>
                                {{-- <div class="col-lg-4">
                                  <p>hi</p>
                                </div>
                                <div class="col-lg-4">
                                  <p>hi</p>
                                </div> --}}
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <div class="card-toolbar">
                                <a href="#" class="btn btn-sm btn-icon btn-light-primary mr-2 " data-toggle="tooltip"
                                   title="" data-original-title="Course Discussion">
                                    <i class="far fa-comments"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-icon btn-light-warning mr-2 " data-toggle="tooltip"
                                   title="" data-original-title="Class worke">
                                    <i class="far fa-calendar-check"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-icon btn-light-info mr-2 " data-toggle="tooltip"
                                   title="" data-original-title="Course Resource">
                                    <i class="fas fa-folder"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-icon btn-light-danger mr-2 " data-toggle="tooltip"
                                   title="" data-original-title="Notifications">
                                    <i class="flaticon2-bell-2"></i>
                                </a>

                            </div>
                            <div class="symbol-group symbol-hover justify-content-between">
                                <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title=""
                                     data-original-title="Mark Stone">
                                    <img alt="Pic" src="{{asset('assets/media/users/300_25.jpg') }}">
                                </div>
                                <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title=""
                                     data-original-title="Charlie Stone">
                                    <img alt="Pic" src="{{asset('assets/media/users/300_19.jpg') }}">
                                </div>
                                <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title=""
                                     data-original-title="Luca Doncic">
                                    <img alt="Pic" src="{{asset('assets/media/users/300_22.jpg') }}">
                                </div>
                                <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title=""
                                     data-original-title="Nick Mana">
                                    <img alt="Pic" src="{{asset('assets/media/users/300_23.jpg') }}">
                                </div>
                                <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title=""
                                     data-original-title="Teresa Fox">
                                    <img alt="Pic" src="{{asset('assets/media/users/300_18.jpg') }}">
                                </div>
                                <div class="symbol symbol-30 symbol-circle symbol-light" data-toggle="tooltip" title=""
                                     data-original-title="More users">
                                    <span class="symbol-label font-weight-bold">35+</span>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            @endforeach
        </div>


    </div>

    </div>
    <!-- Meeting modal :: start-->


    <div class="modal fade" id="exampleModalCenter1" data-backdrop="static" tabindex="-1"
         role="dialog"
         aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Meeting</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">


                        <div id='jitsi-meet-conf-container'></div>
                    </div>
                </div>

            </div>


            <div class="modal-footer">

            </div>
        </div>
    </div>


    <!-- Modal add new institution: end-->



@endsection
