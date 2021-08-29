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
                <!-- began:: todo -->
                <div class="col-xl-12">
                    <!--begin::Card-->
                    <div class="card card-custom card-stretch" id="kt_todo_list">
                        <!--begin::Header-->
                        <div class="card-header align-items-center flex-wrap py-6 border-0 h-auto">
                            <!--begin::Toolbar-->
                            <div class="d-flex flex-wrap align-items-center">
                                <div class="d-flex align-items-center mr-1 my-2">
                                    <label
                                        data-inbox="group-select"
                                        class="checkbox checkbox-single checkbox-primary mr-3">
                                        <input type="checkbox">
                                            <span class="symbol-label"></span>
                                        </label>
                                        <div class="btn-group">
                                            <span
                                                class="btn btn-clean btn-icon btn-sm mr-1"
                                                data-toggle="dropdown"
                                                role="button"
                                                aria-expanded="false">
                                                <i class="ki ki-bold-arrow-down icon-sm"></i>
                                            </span>
                                            <div class="dropdown-menu dropdown-menu-left p-0 m-0 dropdown-menu-sm" style="">
                                                <ul class="navi py-3">
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-text">All</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-text">Read</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-text">Unread</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-text">Starred</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-text">Unstarred</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <span
                                            class="btn btn-clean btn-icon btn-sm mr-2"
                                            data-toggle="tooltip"
                                            title=""
                                            data-original-title="Reload list">
                                            <i class="ki ki-refresh icon-1x"></i>
                                        </span>
                                    </div>
                                    
                                </div>
                                <!--end::Toolbar-->
                                <!--begin::Actions-->
                                <div class="d-flex align-items-center my-2">
                                    <div
                                        class="dropdown mr-2"
                                        data-toggle="tooltip"
                                        title=""
                                        data-original-title="Sort">
                                        <span class="btn btn-default btn-icon btn-sm" data-toggle="dropdown">
                                            <i class="flaticon2-console icon-1x"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right p-0 m-0 dropdown-menu-sm">
                                            <ul class="navi py-3">
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link active">
                                                        <span class="navi-text">Newest</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
                                                        <span class="navi-text">Olders</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
                                                        <span class="navi-text">Unread</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>                                    
                                    <span
                                        class="btn btn-light-success btn-sm text-uppercase font-weight-bolder"
                                        data-toggle="tooltip"
                                        title=""
                                        data-original-title="Previose page">New Task</span>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body p-0">
                                <!--begin::Responsive container-->
                                <div class="table-responsive">
                                    <!--begin::Items-->
                                    <div class="list list-hover min-w-500px" data-inbox="list">
                                        <!--begin::Item-->
                                        <div
                                            class="d-flex align-items-start list-item card-spacer-x py-4"
                                            data-inbox="message">
                                            <!--begin::Toolbar-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Actions-->
                                                <div class="d-flex align-items-center mr-3" data-inbox="actions">
                                                    <!--begin::Checkbox-->
                                                    <label class="checkbox checkbox-single checkbox-primary flex-shrink-0 mr-3">
                                                        <input type="checkbox">
                                                            <span></span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Buttons-->
                                                        <a
                                                            href="#"
                                                            class="btn btn-icon btn-xs btn-hover-text-warning active"
                                                            data-toggle="tooltip"
                                                            data-placement="right"
                                                            title=""
                                                            data-original-title="Star">
                                                            <i class="flaticon-star text-muted"></i>
                                                        </a>
                                                        <a
                                                            href="#"
                                                            class="btn btn-icon btn-xs text-hover-warning"
                                                            data-toggle="tooltip"
                                                            data-placement="right"
                                                            title=""
                                                            data-original-title="Mark as important">
                                                            <i class="flaticon-add-label-button text-muted"></i>
                                                        </a>
                                                        <!--end::Buttons-->
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Toolbar-->
                                                <!--begin::Info-->
                                                <div class="flex-grow-1 mt-1 mr-2" data-toggle="view">
                                                    <!--begin::Title-->
                                                    <div class="font-weight-bolder mr-2">Digital PPV Customer Confirmation</div>
                                                    <!--end::Title-->
                                                    <!--begin::Labels-->
                                                    <!-- <div class="mt-2">
                                                        <span class="label label-light-primary font-weight-bold label-inline">inbox</span>
                                                    </div> -->
                                                    <!--end::Labels-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Details-->
                                                <div
                                                    class="d-flex align-items-center justify-content-end flex-wrap"
                                                    data-toggle="view">
                                                    <!--begin::Datetime-->
                                                    <div class="font-weight-bolder" data-toggle="view">8:30 PM</div>
                                                    <!--end::Datetime-->                                                   
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div
                                                class="d-flex align-items-start list-item card-spacer-x py-4"
                                                data-inbox="message">
                                                <!--begin::Toolbar-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Actions-->
                                                    <div class="d-flex align-items-center mr-3" data-inbox="actions">
                                                        <!--begin::Checkbox-->
                                                        <label class="checkbox checkbox-single checkbox-primary flex-shrink-0 mr-3">
                                                            <input type="checkbox">
                                                                <span></span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                            <!--begin::Buttons-->
                                                            <a
                                                                href="#"
                                                                class="btn btn-icon btn-xs text-hover-warning"
                                                                data-toggle="tooltip"
                                                                data-placement="right"
                                                                title=""
                                                                data-original-title="Star">
                                                                <i class="flaticon-star text-muted"></i>
                                                            </a>
                                                            <a
                                                                href="#"
                                                                class="btn btn-icon btn-xs text-hover-warning"
                                                                data-toggle="tooltip"
                                                                data-placement="right"
                                                                title=""
                                                                data-original-title="Mark as important">
                                                                <i class="flaticon-add-label-button text-muted"></i>
                                                            </a>
                                                            <!--end::Buttons-->
                                                        </div>
                                                        <!--end::Actions-->
                                                    </div>
                                                    <!--end::Toolbar-->
                                                    <!--begin::Info-->
                                                    <div class="flex-grow-1 mt-1 mr-2" data-toggle="view">
                                                        <!--begin::Title-->
                                                        <div class="font-weight-bolder mr-2">Your iBuy.com grocery shopping confirmation</div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Details-->
                                                    <div
                                                        class="d-flex align-items-center justify-content-end flex-wrap"
                                                        data-toggle="view">
                                                        <!--begin::Datetime-->
                                                        <div class="font-weight-bolder" data-toggle="view">day ago</div>
                                                        <!--end::Datetime-->                                                       
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div
                                                    class="d-flex align-items-start list-item card-spacer-x py-4"
                                                    data-inbox="message">
                                                    <!--begin::Toolbar-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Actions-->
                                                        <div class="d-flex align-items-center mr-3" data-inbox="actions">
                                                            <!--begin::Checkbox-->
                                                            <label class="checkbox checkbox-single checkbox-primary flex-shrink-0 mr-3">
                                                                <input type="checkbox">
                                                                    <span></span>
                                                                </label>
                                                                <!--end::Checkbox-->
                                                                <!--begin::Buttons-->
                                                                <a
                                                                    href="#"
                                                                    class="btn btn-icon btn-xs text-hover-warning"
                                                                    data-toggle="tooltip"
                                                                    data-placement="right"
                                                                    title=""
                                                                    data-original-title="Star">
                                                                    <i class="flaticon-star text-muted"></i>
                                                                </a>
                                                                <a
                                                                    href="#"
                                                                    class="btn btn-icon btn-xs text-hover-warning"
                                                                    data-toggle="tooltip"
                                                                    data-placement="right"
                                                                    title=""
                                                                    data-original-title="Mark as important">
                                                                    <i class="flaticon-add-label-button text-muted"></i>
                                                                </a>
                                                                <!--end::Buttons-->
                                                            </div>
                                                            <!--end::Actions-->
                                                        </div>
                                                        <!--end::Toolbar-->
                                                        <!--begin::Info-->
                                                        <div class="flex-grow-1 mt-1 mr-2" data-toggle="view">
                                                            <!--begin::Title-->
                                                            <div class="font-weight-bolder mr-2">Your Order #224820998666029 has been Confirmed</div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Info-->
                                                        <!--begin::Details-->
                                                        <div
                                                            class="d-flex align-items-center justify-content-end flex-wrap"
                                                            data-toggle="view">
                                                            <!--begin::Datetime-->
                                                            <div class="font-weight-bold text-muted" data-toggle="view">11:20PM</div>
                                                            <!--end::Datetime-->                                                           
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div
                                                        class="d-flex align-items-start list-item card-spacer-x py-4"
                                                        data-inbox="message">
                                                        <!--begin::Toolbar-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Actions-->
                                                            <div class="d-flex align-items-center mr-3" data-inbox="actions">
                                                                <!--begin::Checkbox-->
                                                                <label class="checkbox checkbox-single checkbox-primary flex-shrink-0 mr-3">
                                                                    <input type="checkbox">
                                                                        <span></span>
                                                                    </label>
                                                                    <!--end::Checkbox-->
                                                                    <!--begin::Buttons-->
                                                                    <a
                                                                        href="#"
                                                                        class="btn btn-icon btn-xs btn-hover-text-warning active"
                                                                        data-toggle="tooltip"
                                                                        data-placement="right"
                                                                        title=""
                                                                        data-original-title="Star">
                                                                        <i class="flaticon-star text-muted"></i>
                                                                    </a>
                                                                    <a
                                                                        href="#"
                                                                        class="btn btn-icon btn-xs btn-hover-text-warning active"
                                                                        data-toggle="tooltip"
                                                                        data-placement="right"
                                                                        title=""
                                                                        data-original-title="Mark as important">
                                                                        <i class="flaticon-add-label-button text-muted"></i>
                                                                    </a>
                                                                    <!--end::Buttons-->
                                                                </div>
                                                                <!--end::Actions-->
                                                            </div>
                                                            <!--end::Toolbar-->
                                                            <!--begin::Info-->
                                                            <div class="flex-grow-1 mt-1 mr-2" data-toggle="view">
                                                                <!--begin::Title-->
                                                                <div class="font-weight-bolder mr-2">Payment Notification DLOP2329KD</div>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Info-->
                                                            <!--begin::Details-->
                                                            <div
                                                                class="d-flex align-items-center justify-content-end flex-wrap"
                                                                data-toggle="view">
                                                                <!--begin::Datetime-->
                                                                <div class="font-weight-bolder" data-toggle="view">2 days ago</div>
                                                                <!--end::Datetime-->                                                                
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div
                                                            class="d-flex align-items-start list-item card-spacer-x py-4"
                                                            data-inbox="message">
                                                            <!--begin::Toolbar-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Actions-->
                                                                <div class="d-flex align-items-center mr-3" data-inbox="actions">
                                                                    <!--begin::Checkbox-->
                                                                    <label class="checkbox checkbox-single checkbox-primary flex-shrink-0 mr-3">
                                                                        <input type="checkbox">
                                                                            <span></span>
                                                                        </label>
                                                                        <!--end::Checkbox-->
                                                                        <!--begin::Buttons-->
                                                                        <a
                                                                            href="#"
                                                                            class="btn btn-icon btn-xs text-hover-warning"
                                                                            data-toggle="tooltip"
                                                                            data-placement="right"
                                                                            title=""
                                                                            data-original-title="Star">
                                                                            <i class="flaticon-star text-muted"></i>
                                                                        </a>
                                                                        <a
                                                                            href="#"
                                                                            class="btn btn-icon btn-xs text-hover-warning"
                                                                            data-toggle="tooltip"
                                                                            data-placement="right"
                                                                            title=""
                                                                            data-original-title="Mark as important">
                                                                            <i class="flaticon-add-label-button text-muted"></i>
                                                                        </a>
                                                                        <!--end::Buttons-->
                                                                    </div>
                                                                    <!--end::Actions-->
                                                                </div>
                                                                <!--end::Toolbar-->
                                                                <!--begin::Info-->
                                                                <div class="flex-grow-1 mt-1 mr-2" data-toggle="view">
                                                                    <!--begin::Title-->
                                                                    <div class="font-weight-bolder mr-2">Congratulations on your iRun Coach subscription</div>
                                                                    <!--end::Title-->
                                                                </div>
                                                                <!--end::Info-->
                                                                <!--begin::Details-->
                                                                <div
                                                                    class="d-flex align-items-center justify-content-end flex-wrap"
                                                                    data-toggle="view">
                                                                    <!--begin::Datetime-->
                                                                    <div class="font-weight-bold text-muted" data-toggle="view">Jul 25</div>
                                                                    <!--end::Datetime-->                                                                   
                                                                </div>
                                                                <!--end::Details-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div
                                                                class="d-flex align-items-start list-item card-spacer-x py-4"
                                                                data-inbox="message">
                                                                <!--begin::Toolbar-->
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Actions-->
                                                                    <div class="d-flex align-items-center mr-3" data-inbox="actions">
                                                                        <!--begin::Checkbox-->
                                                                        <label class="checkbox checkbox-single checkbox-primary flex-shrink-0 mr-3">
                                                                            <input type="checkbox">
                                                                                <span></span>
                                                                            </label>
                                                                            <!--end::Checkbox-->
                                                                            <!--begin::Buttons-->
                                                                            <a
                                                                                href="#"
                                                                                class="btn btn-icon btn-xs text-hover-warning"
                                                                                data-toggle="tooltip"
                                                                                data-placement="right"
                                                                                title=""
                                                                                data-original-title="Star">
                                                                                <i class="flaticon-star text-muted"></i>
                                                                            </a>
                                                                            <a
                                                                                href="#"
                                                                                class="btn btn-icon btn-xs text-hover-warning"
                                                                                data-toggle="tooltip"
                                                                                data-placement="right"
                                                                                title=""
                                                                                data-original-title="Mark as important">
                                                                                <i class="flaticon-add-label-button text-muted"></i>
                                                                            </a>
                                                                            <!--end::Buttons-->
                                                                        </div>
                                                                        <!--end::Actions-->
                                                                    </div>
                                                                    <!--end::Toolbar-->
                                                                    <!--begin::Info-->
                                                                    <div class="flex-grow-1 mt-1 mr-2" data-toggle="view">
                                                                        <!--begin::Title-->
                                                                        <div class="font-weight-bolder mr-2">Pay bills &amp; win up to 600$ Cashback!</div>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Info-->
                                                                    <!--begin::Details-->
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-end flex-wrap"
                                                                        data-toggle="view">
                                                                        <!--begin::Datetime-->
                                                                        <div class="font-weight-bold text-muted" data-toggle="view">July 24</div>
                                                                        <!--end::Datetime-->                                                                        
                                                                    </div>
                                                                    <!--end::Details-->
                                                                </div>
                                                                <!--end::Item-->
                                                                <!--begin::Item-->
                                                                <div
                                                                    class="d-flex align-items-start list-item card-spacer-x py-4"
                                                                    data-inbox="message">
                                                                    <!--begin::Toolbar-->
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin::Actions-->
                                                                        <div class="d-flex align-items-center mr-3" data-inbox="actions">
                                                                            <!--begin::Checkbox-->
                                                                            <label class="checkbox checkbox-single checkbox-primary flex-shrink-0 mr-3">
                                                                                <input type="checkbox">
                                                                                    <span></span>
                                                                                </label>
                                                                                <!--end::Checkbox-->
                                                                                <!--begin::Buttons-->
                                                                                <a
                                                                                    href="#"
                                                                                    class="btn btn-icon btn-xs btn-hover-text-warning active"
                                                                                    data-toggle="tooltip"
                                                                                    data-placement="right"
                                                                                    title=""
                                                                                    data-original-title="Star">
                                                                                    <i class="flaticon-star text-muted"></i>
                                                                                </a>
                                                                                <a
                                                                                    href="#"
                                                                                    class="btn btn-icon btn-xs text-hover-warning"
                                                                                    data-toggle="tooltip"
                                                                                    data-placement="right"
                                                                                    title=""
                                                                                    data-original-title="Mark as important">
                                                                                    <i class="flaticon-add-label-button text-muted"></i>
                                                                                </a>
                                                                                <!--end::Buttons-->
                                                                            </div>
                                                                            <!--end::Actions-->
                                                                        </div>
                                                                        <!--end::Toolbar-->
                                                                        <!--begin::Info-->
                                                                        <div class="flex-grow-1 mt-1 mr-2" data-toggle="view">
                                                                            <!--begin::Title-->
                                                                            <div class="font-weight-bolder mr-2">Activate your LIPO Account today</div>
                                                                            <!--end::Title-->
                                                                        </div>
                                                                        <!--end::Info-->
                                                                        <!--begin::Details-->
                                                                        <div
                                                                            class="d-flex align-items-center justify-content-end flex-wrap"
                                                                            data-toggle="view">
                                                                            <!--begin::Datetime-->
                                                                            <div class="font-weight-bolder" data-toggle="view">Jun 13</div>
                                                                            <!--end::Datetime-->                                                                            
                                                                        </div>
                                                                        <!--end::Details-->
                                                                    </div>
                                                                    <!--end::Item-->
                                                                    <!--begin::Item-->
                                                                    <div
                                                                        class="d-flex align-items-start list-item card-spacer-x py-4"
                                                                        data-inbox="message">
                                                                        <!--begin::Toolbar-->
                                                                        <div class="d-flex align-items-center">
                                                                            <!--begin::Actions-->
                                                                            <div class="d-flex align-items-center mr-3" data-inbox="actions">
                                                                                <!--begin::Checkbox-->
                                                                                <label class="checkbox checkbox-single checkbox-primary flex-shrink-0 mr-3">
                                                                                    <input type="checkbox">
                                                                                        <span></span>
                                                                                    </label>
                                                                                    <!--end::Checkbox-->
                                                                                    <!--begin::Buttons-->
                                                                                    <a
                                                                                        href="#"
                                                                                        class="btn btn-icon btn-xs text-hover-warning"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="right"
                                                                                        title=""
                                                                                        data-original-title="Star">
                                                                                        <i class="flaticon-star text-muted"></i>
                                                                                    </a>
                                                                                    <a
                                                                                        href="#"
                                                                                        class="btn btn-icon btn-xs btn-hover-text-warning active"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="right"
                                                                                        title=""
                                                                                        data-original-title="Mark as important">
                                                                                        <i class="flaticon-add-label-button text-muted"></i>
                                                                                    </a>
                                                                                    <!--end::Buttons-->
                                                                                </div>
                                                                                <!--end::Actions-->
                                                                            </div>
                                                                            <!--end::Toolbar-->
                                                                            <!--begin::Info-->
                                                                            <div class="flex-grow-1 mt-1 mr-2" data-toggle="view">
                                                                                <!--begin::Title-->
                                                                                <div class="font-weight-bolder mr-2">About your request for PalmLake</div>
                                                                                <!--end::Title-->
                                                                            </div>
                                                                            <!--end::Info-->
                                                                            <!--begin::Details-->
                                                                            <div
                                                                                class="d-flex align-items-center justify-content-end flex-wrap"
                                                                                data-toggle="view">
                                                                                <!--begin::Datetime-->
                                                                                <div class="font-weight-bold text-muted" data-toggle="view">25 May</div>
                                                                                <!--end::Datetime-->                                                                                
                                                                            </div>
                                                                            <!--end::Details-->
                                                                        </div>
                                                                        <!--end::Item-->
                                                                        <!--begin::Item-->
                                                                        <div
                                                                            class="d-flex align-items-start list-item card-spacer-x py-4"
                                                                            data-inbox="message">
                                                                            <!--begin::Toolbar-->
                                                                            <div class="d-flex align-items-center">
                                                                                <!--begin::Actions-->
                                                                                <div class="d-flex align-items-center mr-3" data-inbox="actions">
                                                                                    <!--begin::Checkbox-->
                                                                                    <label class="checkbox checkbox-single checkbox-primary flex-shrink-0 mr-3">
                                                                                        <input type="checkbox">
                                                                                            <span></span>
                                                                                        </label>
                                                                                        <!--end::Checkbox-->
                                                                                        <!--begin::Buttons-->
                                                                                        <a
                                                                                            href="#"
                                                                                            class="btn btn-icon btn-xs text-hover-warning"
                                                                                            data-toggle="tooltip"
                                                                                            data-placement="right"
                                                                                            title=""
                                                                                            data-original-title="Star">
                                                                                            <i class="flaticon-star text-muted"></i>
                                                                                        </a>
                                                                                        <a
                                                                                            href="#"
                                                                                            class="btn btn-icon btn-xs text-hover-warning"
                                                                                            data-toggle="tooltip"
                                                                                            data-placement="right"
                                                                                            title=""
                                                                                            data-original-title="Mark as important">
                                                                                            <i class="flaticon-add-label-button text-muted"></i>
                                                                                        </a>
                                                                                        <!--end::Buttons-->
                                                                                    </div>
                                                                                    <!--end::Actions-->
                                                                                </div>
                                                                                <!--end::Toolbar-->
                                                                                <!--begin::Info-->
                                                                                <div class="flex-grow-1 mt-1 mr-2" data-toggle="view">
                                                                                    <!--begin::Title-->
                                                                                    <div class="font-weight-bolder mr-2">Verification of your card transaction</div>
                                                                                    <!--end::Title-->
                                                                                </div>
                                                                                <!--end::Info-->
                                                                                <!--begin::Details-->
                                                                                <div
                                                                                    class="d-flex align-items-center justify-content-end flex-wrap"
                                                                                    data-toggle="view">
                                                                                    <!--begin::Datetime-->
                                                                                    <div class="font-weight-bold text-muted" data-toggle="view">May 23</div>
                                                                                    <!--end::Datetime-->                                                                                    
                                                                                </div>
                                                                                <!--end::Details-->
                                                                            </div>
                                                                            <!--end::Item-->
                                                                            <!--begin::Item-->
                                                                            <div
                                                                                class="d-flex align-items-start list-item card-spacer-x py-4"
                                                                                data-inbox="message">
                                                                                <!--begin::Toolbar-->
                                                                                <div class="d-flex align-items-center">
                                                                                    <!--begin::Actions-->
                                                                                    <div class="d-flex align-items-center mr-3" data-inbox="actions">
                                                                                        <!--begin::Checkbox-->
                                                                                        <label class="checkbox checkbox-single checkbox-primary flex-shrink-0 mr-3">
                                                                                            <input type="checkbox">
                                                                                                <span></span>
                                                                                            </label>
                                                                                            <!--end::Checkbox-->
                                                                                            <!--begin::Buttons-->
                                                                                            <a
                                                                                                href="#"
                                                                                                class="btn btn-icon btn-xs text-hover-warning"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="right"
                                                                                                title=""
                                                                                                data-original-title="Star">
                                                                                                <i class="flaticon-star text-muted"></i>
                                                                                            </a>
                                                                                            <a
                                                                                                href="#"
                                                                                                class="btn btn-icon btn-xs text-hover-warning"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="right"
                                                                                                title=""
                                                                                                data-original-title="Mark as important">
                                                                                                <i class="flaticon-add-label-button text-muted"></i>
                                                                                            </a>
                                                                                            <!--end::Buttons-->
                                                                                        </div>
                                                                                        <!--end::Actions-->
                                                                                    </div>
                                                                                    <!--end::Toolbar-->
                                                                                    <!--begin::Info-->
                                                                                    <div class="flex-grow-1 mt-1 mr-2" data-toggle="view">
                                                                                        <!--begin::Title-->
                                                                                        <div class="font-weight-bolder mr-2">Payment Notification (DE223232034)</div>
                                                                                        <!--end::Title-->
                                                                                    </div>
                                                                                    <!--end::Info-->
                                                                                    <!--begin::Details-->
                                                                                    <div
                                                                                        class="d-flex align-items-center justify-content-end flex-wrap"
                                                                                        data-toggle="view">
                                                                                        <!--begin::Datetime-->
                                                                                        <div class="font-weight-bold text-muted" data-toggle="view">Apr 12</div>
                                                                                        <!--end::Datetime-->                                                                                        
                                                                                    </div>
                                                                                    <!--end::Details-->
                                                                                </div>
                                                                                <!--end::Item-->
                                                                                <!--begin::Item-->
                                                                                <div
                                                                                    class="d-flex align-items-start list-item card-spacer-x py-4"
                                                                                    data-inbox="message">
                                                                                    <!--begin::Toolbar-->
                                                                                    <div class="d-flex align-items-center">
                                                                                        <!--begin::Actions-->
                                                                                        <div class="d-flex align-items-center mr-3" data-inbox="actions">
                                                                                            <!--begin::Checkbox-->
                                                                                            <label class="checkbox checkbox-single checkbox-primary flex-shrink-0 mr-3">
                                                                                                <input type="checkbox">
                                                                                                    <span></span>
                                                                                                </label>
                                                                                                <!--end::Checkbox-->
                                                                                                <!--begin::Buttons-->
                                                                                                <a
                                                                                                    href="#"
                                                                                                    class="btn btn-icon btn-xs text-hover-warning"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="right"
                                                                                                    title=""
                                                                                                    data-original-title="Star">
                                                                                                    <i class="flaticon-star text-muted"></i>
                                                                                                </a>
                                                                                                <a
                                                                                                    href="#"
                                                                                                    class="btn btn-icon btn-xs text-hover-warning"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="right"
                                                                                                    title=""
                                                                                                    data-original-title="Mark as important">
                                                                                                    <i class="flaticon-add-label-button text-muted"></i>
                                                                                                </a>
                                                                                                <!--end::Buttons-->
                                                                                            </div>
                                                                                            <!--end::Actions-->
                                                                                        </div>
                                                                                        <!--end::Toolbar-->
                                                                                        <!--begin::Info-->
                                                                                        <div class="flex-grow-1 mt-1 mr-2" data-toggle="view">
                                                                                            <!--begin::Title-->
                                                                                            <div class="font-weight-bolder mr-2">Welcome, Patty</div>
                                                                                            <!--end::Title-->
                                                                                        </div>
                                                                                        <!--end::Info-->
                                                                                        <!--begin::Details-->
                                                                                        <div
                                                                                            class="d-flex align-items-center justify-content-end flex-wrap"
                                                                                            data-toggle="view">
                                                                                            <!--begin::Datetime-->
                                                                                            <div class="font-weight-bold text-muted" data-toggle="view">Mar 1</div>
                                                                                            <!--end::Datetime-->                                                                                            
                                                                                        </div>
                                                                                        <!--end::Details-->
                                                                                    </div>
                                                                                    <!--end::Item-->
                                                                                    <!--begin::Item-->
                                                                                    <div
                                                                                        class="d-flex align-items-start list-item card-spacer-x py-4"
                                                                                        data-inbox="message">
                                                                                        <!--begin::Toolbar-->
                                                                                        <div class="d-flex align-items-center">
                                                                                            <!--begin::Actions-->
                                                                                            <div class="d-flex align-items-center mr-3" data-inbox="actions">
                                                                                                <!--begin::Checkbox-->
                                                                                                <label class="checkbox checkbox-single checkbox-primary flex-shrink-0 mr-3">
                                                                                                    <input type="checkbox">
                                                                                                        <span></span>
                                                                                                    </label>
                                                                                                    <!--end::Checkbox-->
                                                                                                    <!--begin::Buttons-->
                                                                                                    <a
                                                                                                        href="#"
                                                                                                        class="btn btn-icon btn-xs text-hover-warning"
                                                                                                        data-toggle="tooltip"
                                                                                                        data-placement="right"
                                                                                                        title=""
                                                                                                        data-original-title="Star">
                                                                                                        <i class="flaticon-star text-muted"></i>
                                                                                                    </a>
                                                                                                    <a
                                                                                                        href="#"
                                                                                                        class="btn btn-icon btn-xs text-hover-warning"
                                                                                                        data-toggle="tooltip"
                                                                                                        data-placement="right"
                                                                                                        title=""
                                                                                                        data-original-title="Mark as important">
                                                                                                        <i class="flaticon-add-label-button text-muted"></i>
                                                                                                    </a>
                                                                                                    <!--end::Buttons-->
                                                                                                </div>
                                                                                                <!--end::Actions-->
                                                                                            </div>
                                                                                            <!--end::Toolbar-->
                                                                                            <!--begin::Info-->
                                                                                            <div class="flex-grow-1 mt-1 mr-2" data-toggle="view">
                                                                                                <!--begin::Title-->
                                                                                                <div class="font-weight-bolder mr-2">Optimize with Recommendations, now used by most</div>
                                                                                                <!--end::Title-->
                                                                                            </div>
                                                                                            <!--end::Info-->
                                                                                            <!--begin::Details-->
                                                                                            <div
                                                                                                class="d-flex align-items-center justify-content-end flex-wrap"
                                                                                                data-toggle="view">
                                                                                                <!--begin::Datetime-->
                                                                                                <div class="font-weight-bold text-muted" data-toggle="view">Feb 11</div>
                                                                                                <!--end::Datetime-->                                                                                                
                                                                                            </div>
                                                                                            <!--end::Details-->
                                                                                        </div>
                                                                                        <!--end::Item-->
                                                                                    </div>
                                                                                    <!--end::Items-->
                                                                                </div>
                                                                                <!--end::Responsive container-->
                                                                                <!--begin::Pagination-->
                                                                                <div
                                                                                    class="d-flex align-items-center my-2 my-6 card-spacer-x justify-content-end">
                                                                                    <div
                                                                                        class="d-flex align-items-center mr-2"
                                                                                        data-toggle="tooltip"
                                                                                        title=""
                                                                                        data-original-title="Records per page">
                                                                                        <span class="text-muted font-weight-bold mr-2" data-toggle="dropdown">1 - 50 of 235</span>
                                                                                        <div class="dropdown-menu dropdown-menu-right p-0 m-0 dropdown-menu-sm">
                                                                                            <ul class="navi py-3">
                                                                                                <li class="navi-item">
                                                                                                    <a href="#" class="navi-link">
                                                                                                        <span class="navi-text">20 per page</span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="navi-item">
                                                                                                    <a href="#" class="navi-link active">
                                                                                                        <span class="navi-text">50 par page</span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li class="navi-item">
                                                                                                    <a href="#" class="navi-link">
                                                                                                        <span class="navi-text">100 per page</span>
                                                                                                    </a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <span
                                                                                        class="btn btn-default btn-icon btn-sm mr-2"
                                                                                        data-toggle="tooltip"
                                                                                        title=""
                                                                                        data-original-title="Previose page">
                                                                                        <i class="ki ki-bold-arrow-back icon-sm"></i>
                                                                                    </span>
                                                                                    <span
                                                                                        class="btn btn-default btn-icon btn-sm"
                                                                                        data-toggle="tooltip"
                                                                                        title=""
                                                                                        data-original-title="Next page">
                                                                                        <i class="ki ki-bold-arrow-next icon-sm"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <!--end::Pagination-->
                                                                            </div>
                                                                            <!--end::Body-->
                                                                        </div>
                                                                        <!--end::Card-->
                                                                    </div>
                                                                    <!-- end::todo -->
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