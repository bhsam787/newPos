<style>
    a.navi-link.py-4.active.quiz:hover {
        background: #1dabcc;
    }

    .navi .navi-item:hover .navi-link.active .navi-text {
        color: white;
    }

    .navi .navi-item:hover .navi-link.active .navi-icon i {
        color: white;
    }
</style>

@extends('dashboard.layout.master')

@section('section')
{{-- <script type="text/javascript">
  let num_Of_questions=0;
  </script> --}}

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">




    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom">
                <!--begin::Header-->
                <div class="card-header py-3">
                    <div class="card-title align-items-start flex-column">
                        <h3 class="card-label font-weight-bolder text-dark">Set Exam Question</h3>
                        <span class="text-muted font-weight-bold font-size-sm mt-1">Exam question and there information</span>
                    </div>
                    <div class="card-toolbar">



                        <!-- Button trigger modal-->
                        <!--begin::Button-->
                        <a onclick="validation()" href="#" class="btn btn-success font-weight-bolder mr-2" data-toggle="modal" data-target="#exampleModalCenter">
                            <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Design/Flatten.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"></rect>
                                        <circle fill="#000000" cx="9" cy="15" r="6"></circle>
                                        <path
                                          d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                                          fill="#000000" opacity="0.3"></path>
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>Submit</a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <a href="{{ url()->previous() }}" class="btn btn-danger font-weight-bolder mr-2" data-toggle="modal" data-target="#exampleModalCenter">
                            <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Design/Flatten.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"></rect>
                                        <circle fill="#000000" cx="9" cy="15" r="6"></circle>
                                        <path
                                          d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                                          fill="#000000" opacity="0.3"></path>
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>Back</a>
                        <!--end::Button-->










                        <!-- <button type="reset" class="btn btn-success mr-2">Save Changes</button> -->
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="">
                    <!--begin: Datatable-->

                    <div class="flex-row-fluid">
                        <!--begin::Card-->
                        <div class="card card-custom card-stretch">


                            <!--begin::Body-->
                            <div class="card-body">

                                <!-- Extra table::Start -->
                                <div class="card card-custom">

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-8" id="question-bottom">

                                                <form  >
                                                  @csrf


                                                <!--  quistions  -->
                                                <div class="" id="questions">

                                                    <!-- question is here -->
                                                    <div class="form-group">
                                                        <input id="url" type="text" class="form-control form-control-lg" value="{{ route('create-exam.store') }}" style="visibility:hidden;position:absolute;">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Question Name :</label>
                                                        <input name="name" type="text" class="form-control form-control-lg" placeholder="Write Faculty Name" id="name_quiz">
                                                    </div>

                                                    <div class="p-2 flex-fill text-center" id="b2">
                                                        <div id="error" style="color: red; margin: 10px;font-size: large"></div>
                                                    </div>


                                                </div>
                                                </form>

                                            </div>
                                            <div class="col-lg-4">
                                                <!-- start quiz Nav bar -->

                                                <div class="card card-custom card-stretch">
                                                    <!--begin::Body-->
                                                    <div class="card-body pt-4">



                                                        <!--begin::Nav-->
                                                        <div class="navi navi-bold navi-hover navi-active navi-link-rounded">
                                                            <div class="navi-item mb-2">
                                                                <a href="#" onclick="add_one_question()" class="navi-link py-4 active quiz">
                                                                    <span class="navi-icon mr-2">
                                                                        <i class="fas fa-plus"></i>

                                                                    </span>
                                                                    <span class="navi-text font-size-lg">True/False</span>
                                                                </a>
                                                            </div>
                                                            <div class="navi-item mb-2">
                                                                <a onclick="add_multi_question()" href="#" class="navi-link py-4 active quiz">
                                                                    <span class="navi-icon mr-2">
                                                                        <i class="fas fa-plus"></i>

                                                                    </span>
                                                                    <span class="navi-text font-size-lg">MCQ</span>
                                                                </a>
                                                            </div>
                                                            <div class="navi-item mb-2">
                                                                <a onclick="add_oneword_question()" href="#" class="navi-link py-4 active quiz">
                                                                    <span class="navi-icon mr-2">
                                                                        <i class="fas fa-plus"></i>

                                                                    </span>
                                                                    <span class="navi-text font-size-lg">Answer In one WOrd</span>
                                                                </a>
                                                            </div>
                                                            <div class="navi-item mb-2">
                                                                <a onclick="add_short_question()" href="#" class="navi-link py-4 active quiz">
                                                                    <span class="navi-icon mr-2">
                                                                        <i class="fas fa-plus"></i>

                                                                    </span>
                                                                    <span class="navi-text font-size-lg">Short Question</span>
                                                                </a>
                                                            </div>
                                                            <div class="navi-item mb-2">
                                                                <a onclick="add_descriptive_question()" href="#" class="navi-link py-4 active quiz">
                                                                    <span class="navi-icon mr-2">
                                                                        <i class="fas fa-plus"></i>

                                                                    </span>
                                                                    <span class="navi-text font-size-lg">Descriptive Question</span>
                                                                </a>
                                                            </div>

                                                        </div>
                                                        <!--end::Nav-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>

                                                <!-- End quiz Nav bar -->


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Extra table::End  -->





                            </div>
                            <!--end::Body-->

                        </div>

                    </div>


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
</div>
<!--end::Content-->
<script src="{{ asset('assets/js/createquiz.js') }}"></script>
@endsection
