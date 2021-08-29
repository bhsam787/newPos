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
                            <a href="{{ url()->previous() }}" class="btn btn-danger font-weight-bolder mr-2" data-toggle="modal"
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
							</span>Back</a>
                            <!--end::Button-->
                        </div>
                    </div>
                    <!--end::Header-->


                    <!--begin::Body-->
                    <div class="card-body">

                        <div class="d-flex flex-column flex-grow-1">
                            <!--begin::Row-->
                            <div class="row">



                            @foreach($resource as $value)


                                <!--begin::Col-->
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                        <!--begin::Card-->
                                        <div class="card card-custom gutter-b card-stretch">
                                            <div class="card-header border-0">
                                                <h3 class="card-title"></h3>
                                                <div class="card-toolbar">
                                                    <div class="dropdown dropdown-inline" data-toggle="tooltip" title=""
                                                         data-placement="left" data-original-title="Quick actions">
                                                        <a href="#"
                                                           class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                                           data-toggle="dropdown" aria-haspopup="true"
                                                           aria-expanded="false">
                                                            <i class="ki ki-bold-more-hor"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                                            <!--begin::Navigation-->
                                                            <ul class="navi navi-hover py-5">
                                                                <li class="navi-item">
                                                                    <a href="{{ asset('upload/resource') }}/{{ $value->file_name }}" id="copy" onclick="copy()" class="navi-link">
																					<span class="navi-icon">
																						<i class="far fa-eye"></i>
																					</span>
                                                                        <span class="navi-text">Copy Link</span>
                                                                    </a>
                                                                </li>
                                                                <li class="navi-item">
                                                                    <a href="{{ asset('upload/resource') }}/{{ $value->file_name }}" class="navi-link">
																					<span class="navi-icon">
																						<i class="fas fa-cloud-download-alt"></i>
																					</span>
                                                                        <span class="navi-text">Download</span>
                                                                    </a>
                                                                </li>
                                                                <li class="navi-item">
                                                                    <form method="post" action="{{ route('resource.destroy',$value->id) }}">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <a  class="navi-link">

																					<span class="navi-icon">
																						<i class="flaticon-delete"></i>
																					</span>
                                                                            <span class="navi-text"></span>
                                                                            <input style="margin-right: 128px;" type="submit" value="Delete">
                                                                        </a>

                                                                    </form>

                                                                </li>
                                                            </ul>
                                                            <!--end::Navigation-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex flex-column align-items-center">
                                                    <!--begin: Icon-->
                                                    <?php
                                                    if($value->extension=="pdf"){
                                                        ?>
                                                    <img alt="" class="max-h-65px" src="{{ asset('assets/media/svg/files/pdf.svg') }}">
                                                    <?php
                                                    }
                                                        elseif($value->extension=="docx") {
                                                        ?>
                                                    <img alt="" class="max-h-65px" src="{{ asset('assets/media/svg/files/doc.svg') }}">

                                                <?php
                                                        }
                                                    elseif($value->extension=="jpg") {
                                                        ?>
                                                    <img alt="" class="max-h-65px" src="{{ asset('assets/media/svg/files/jpg.svg') }}">

                                                <?php
                                                        }
                                                    elseif($value->extension=="pptx") {
                                                        ?>
                                                    <img alt="" class="max-h-65px" src="{{ asset('assets/media/svg/files/pptx.png') }}">

                                                <?php
                                                        }
                                                    elseif($value->extension=="zip") {
                                                        ?>
                                                    <img alt="" class="max-h-65px" src="{{ asset('assets/media/svg/files/zip.svg') }}">

                                                <?php
                                                        }
                                                    elseif($value->extension=="mp4") {
                                                        ?>
                                                    <img alt="" class="max-h-65px" src="{{ asset('assets/media/svg/files/mp4.svg') }}">

                                                <?php
                                                        }
                                                    else{
                                                        ?>
                                                    <img alt="" class="max-h-65px" src="{{ asset('assets/media/svg/files/file.png') }}">

                                                <?php
                                                        }
                                                    ?>
                                                    <!--end: Icon-->
                                                    <!--begin: Tite-->
                                                    <a href="{{ asset('upload/resource') }}/{{ $value->file_name }}"
                                                       class="text-dark-75 font-weight-bold mt-15 font-size-lg">
                                                        {{ $value->original_file_name }}
                                                    </a>
                                                    <!--end: Tite-->
                                                </div>
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

                    <!-- content::end  -->


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
        function copy() {
            var copyText = document.getElementById("copy");
            copyText.select();
            copyText.setSelectionRange(0, 99999)
            document.execCommand("copy");
            alert("Copied the text: " + copyText.value);
        }
    </script>

@endsection
