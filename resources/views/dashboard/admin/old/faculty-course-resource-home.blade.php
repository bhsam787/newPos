@extends('dashboard.layout.master')

@section('section')

    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">


        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Card-->
                <div class="card card-custom">
                    <!--begin::Header-->
                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                        <div class="card-title justify-content-between ">
                            <h3 class="card-label">Course Resource
                                <span
                                    class="d-block text-muted pt-2 font-size-sm">All Your course resource shown here</span>
                            </h3>
                        </div>
                        <div class="card-title justify-content-between ">
                            <!--begin::Button-->
                            <a href="#" class="btn btn-success font-weight-bolder mr-2" data-toggle="modal"
                               data-target="#exampleModalCenter">
							<span class="svg-icon svg-icon-md">
								<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Design/Flatten.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24"></rect>
										<circle fill="#000000" cx="9" cy="15" r="6"></circle>
										<path
                                            d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                                            fill="#000000" opacity="0.3"></path>
									</g>
								</svg>
                                <!--end::Svg Icon-->
							</span>Upload Resource</a>
                            <!--end::Button-->
                        </div>
                    </div>
                    <!--end::Header-->

                    <!-- Modal 1 add new modal:: start-->
                    <div class="modal fade" id="exampleModalCenter" data-backdrop="static" tabindex="-1" role="dialog"
                         aria-labelledby="staticBackdrop" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add New Resource</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <i aria-hidden="true" class="ki ki-close"></i>
                                    </button>
                                </div>
                                <form class="" action="{{ route('resource.store') }}" method="post"
                                      enctype="multipart/form-data">
                                    <div class="modal-body">
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                @foreach ($errors->all() as $error)
                                                    <strong>{{ $error }} </br></strong>
                                                @endforeach
                                            </div>
                                        @endif


                                        @csrf
                                        <div class="form-group" style="visibility: hidden;position: absolute;">
                                            {{--                                        <input name="course_id" type="number" class="form-control form-control-lg" value="{{ $course->id }}" >--}}
                                        </div>


                                        <div class="form-group">
                                            <label>Choose Course</label>
                                            <select id="course" class="form-control form-control-lg dynamic"
                                                    name="course_id" data-dependent="section"
                                                    data-fid="{{ $facultyId }}">
                                                <option value="">Select Course</option>
                                                @foreach ($sectionDetail as $key=>$value)
                                                    <option
                                                        value="{{ $value->course->id }}">{{ $value->course->name }} ({{ $value->course->initial }})</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Choose Section</label>
                                            <select id="section" class="form-control form-control-lg "
                                                    name="section_id">
                                                <option value="">Select Section</option>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Make it Public</label>
                                            <select class="form-control form-control-lg "
                                                    name="is_public">
                                                <option value="">Select Section</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Upload File</label>
                                            <input type="file" id="myFile" name="file_name">
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light-danger font-weight-bold"
                                                data-dismiss="modal">Cancel
                                        </button>
                                        <button type="submit" class="btn btn-success font-weight-bold">Add New</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Modal 1 add new modal: end-->


                    <!--begin::Body-->
                    <!-- Content::stard  -->
                    <div class="card-body">


                        <div class="d-flex flex-column flex-grow-1">
                            <!--begin::Row-->
                            <div class="row">
                            @foreach($sectionDetail as $value)
                                <!--begin::Col-->
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                    <!--begin::Card-->
                                    <div class="card card-custom gutter-b">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h3 class="card-label">
                                                    {{ $value->course->initial }}
                                                    <small>{{ $value->section->section_number }}</small>

                                                </h3>
                                            </div>
                                            <div class="d-flex justify-content-between stream-button">
                                                <a href="{{ route('resource.show',$value->section->id) }}"
                                                   class="btn btn-light-success font-weight-bold">Open</a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            {{ $value->course->name }}
                                        </div>

                                    </div>
                                    <!--end:: Card-->
                                </div>
                                <!--end::Col-->
                                    @endforeach


                            </div>
                            <!--end::Row-->
                        </div>
                    </div>
                    <!-- Content::stard  -->

                    <!--begin::Header-->
                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                        <div class="card-title justify-content-between ">
                            <h3 class="card-label">Magic Course Resource
                                <span
                                    class="d-block text-muted pt-2 font-size-sm">Publicly shared all resource are here</span>
                            </h3>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!-- Content::stard  -->
                    <div class="card-body">


                        <div class="d-flex flex-column flex-grow-1">
                            <!--begin::Row-->
                            <div class="row">
                            @foreach($sectionDetail as $value)
                                <!--begin::Col-->
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                    <!--begin::Card-->
                                    <div class="card card-custom gutter-b">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h3 class="card-label">
                                                    {{ $value->course->initial }}
                                                    <small>{{ $value->section->section_number }}</small>

                                                </h3>
                                            </div>
                                            <div class="d-flex justify-content-between stream-button">
                                                <a href="{{ route('resource.show',$value->section->id) }}"
                                                   class="btn btn-light-success font-weight-bold">Open</a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            {{ $value->course->name }}
                                        </div>

                                    </div>
                                    <!--end:: Card-->
                                </div>
                                <!--end::Col-->
                                @endforeach



                            </div>
                            <!--end::Row-->
                        </div>
                    </div>
                    <!-- Content::stard  -->


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

    <script>
        $(document).ready(function () {

            $('.dynamic').change(function () {
                if ($(this).val() != '') {
                    var select = $(this).attr("id");
                    var value = $(this).val();
                    var dependent = $(this).data('dependent');
                    var fid = $(this).data('fid');
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url: "{{ route('data.fetch') }}",
                        method: "POST",
                        data: {select: select, value: value, _token: _token, dependent: dependent, fid: fid},
                        success: function (result) {
                            $('#' + dependent).html(result);
                        }

                    })
                }
            });

            $('#course').change(function () {
                $('#section').val('');
            });


        });
    </script>

@endsection
