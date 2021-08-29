@extends('dashboard.layout.master')

@section('section')

<!--begin::Content-->



<!--begin::Entry-->

<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Card-->
        <div class="card card-custom">
            <!--begin::Header-->
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                <div class="card-title justify-content-between ">
                <h3 class="card-label">Advising
                    <span class="d-block text-muted pt-2 font-size-sm">You can do advising here</span>
                </h3>
                <div class="d-flex align-items-center ml-18">
                    <!--begin::Pic-->
                
                        <!--end::Pic-->
            </div>
        </div>
                                
                <div class="card-title justify-content-between ">
                  <button type="button" class="btn btn-lg  btn-success">Save</button>
                  <button type="button" class="btn btn-lg  btn-danger ml-2">Cancel</button>

                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body">
                <!--begin: Datatable-->
                <!--advising start -->
                <div class="row">
                    <div class="col-xl-8 col-lg-6 col-md-6 col-sm-6">
                        <div class="card card-custom gutter-b">
                            <div class="advising-calender datatable-bordered datatable-head-custom pre-advising">
                                <table border="1px " class="advising-table">
                                    <tbody id="tableBody" class="table table-bordered text-center">
                                        <tr>
                                            <td>Time/Day</td>
                                            <td>Saturday</td>
                                            <td>Sunday</td>
                                            <td>Monday</td>
                                            <td>Tuesday</td>
                                            <td>Wednesday</td>
                                            <td>Thursday</td>
                                            <td>Friday</td>
                                        </tr>

                                        <tr>
                                            <td>08:00am-09:30am</td>
                                            <td id="sat08" value="" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                            <td id="sun08" value="" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                            <td id="mon08" value="" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                            <td id="tue08" value="" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                            <td id="wed08" value="" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                            <td id="thu08" value="" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                            <td id="fri08" value="" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                        </tr>
                                        <tr>
                                            <td>09:40am-11:10am</td>
                                            <td id="sat09" value="fgfg" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                            <td id="sun09" value="fg" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                            <td id="mon09" value="fg" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                            <td id="tue09" value="fg" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                            <td id="wed09" value="fg" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                            <td id="thu09" value="fg" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                            <td id="fri09" value="fgfg" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                        </tr>
                                        <tr>
                                            <td>11:20am-12:50pm</td>
                                            <td id="sat11" value="s" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                            <td id="sun11" value="s" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                            <td id="mon11" value="s" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                            <td id="tue11" value="s" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                            <td id="wed11" value="s" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                            <td id="thu11" value="s" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                            <td id="fri11" value="s" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                        </tr>
                                        <tr>
                                            <td>01:00pm-02:30pm</td>
                                            <td id="sat01" value="" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                            <td id="sun01" value="" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                            <td id="mon01" value="" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                            <td id="tue01" value="" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                            <td id="wed01" value="" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                            <td id="thu01" value="" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                            <td id="fri01" value="" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                        </tr>
                                        <tr>
                                            <td>02:40pm-04:10pm</td>
                                            <td id="sat02" value="" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                            <td id="sun02" value="" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                            <td id="mon02" value="" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                            <td id="tue02" value="" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                            <td id="wed02" value="" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                            <td id="thu02" value="" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                            <td id="fri02" value="" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                        </tr>
                                        <tr>
                                            <td>04:20pm-05:50pm</td>
                                            <td id="sat04" value="" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                            <td id="sun04" value="" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                            <td id="mon04" value="" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                            <td id="tue04" value="" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                            <td id="wed04" value="" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                            <td id="thu04" value="" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                            <td id="fri04" value="" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>    
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <!-- advising course list start  -->
                        <div class="card card-custom gutter-b">
                            <div class="advising-course">

                                <div class="input-group input-group-solid course-search">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <span class="svg-icon svg-icon-lg">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                          d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                          fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                        <path
                                                          d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                          fill="#000000" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                    </div>
                                    <form class="" action="index.html" method="post">
                                        <input class="form-control py-4 h-auto" type="text" id="myInput" onkeyup="myFunction()" name="" placeholder="Search.."></form>
                                </div>


                                <!-- <div class="search">
                                    <form class="" action="index.html" method="post">
                                        <input type="text" id="myInput" onkeyup="myFunction()" name="" placeholder="Search.."></form>
                                </div> -->
                                <div class="search-title">

                                        <h3 class="card-label search-title-text">
                                          Drag the Course from here If you don't need the course then drop it here again.                                        </h3>
                                    </div>
                                </div>
                                <div class="all-course">
                                    <ul id="myUL" value="" ondrop="drop(event)" ondragover="allowDrop(event)">
                                        <li id="cse115" draggable="true" ondragstart="drag(event)">CSE115</li>
                                        <li id="cse173" draggable="true" ondragstart="drag(event)">CSE173</li>
                                        <li id="cse215" draggable="true" ondragstart="drag(event)">CSE215</li>
                                        <li id="cse225" draggable="true" ondragstart="drag(event)">CSE225</li>
                                        <li id="cse231" draggable="true" ondragstart="drag(event)">CSE231</li>
                                        <li id="cse299" draggable="true" ondragstart="drag(event)">CSE299</li>
                                        <li id="cse311" draggable="true" ondragstart="drag(event)">CSE311</li>
                                        <li id="cse321" draggable="true" ondragstart="drag(event)">CSE327</li>
                                        <li id="cse332" draggable="true" ondragstart="drag(event)">CSE332</li>
                                        <li id="cse323" draggable="true" ondragstart="drag(event)">CSE323</li>
                                        <li id="cse373" draggable="true" ondragstart="drag(event)">CSE373</li>
                                        <li id="cse373" draggable="true" ondragstart="drag(event)">CSE375</li>
                                        <li id="cse425" draggable="true" ondragstart="drag(event)">CSE425</li>
                                        <li id="cse332" draggable="true" ondragstart="drag(event)">CSE332</li>
                                        <li id="cse323" draggable="true" ondragstart="drag(event)">CSE323</li>
                                        <li id="cse373" draggable="true" ondragstart="drag(event)">CSE373</li>
                                        <li id="mat361" draggable="true" ondragstart="drag(event)">MAT361</li>
                                        <li id="his103" draggable="true" ondragstart="drag(event)">HIS103</li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--Full advising work close    -->
                </div>
            </div>
            <!-- advising calender close -->


            <!--end: Datatable-->

            <!--end::Body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->

@endsection
