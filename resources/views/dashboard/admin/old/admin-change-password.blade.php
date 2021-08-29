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
						<h3 class="card-label">Assigned Course
							<span class="d-block text-muted pt-2 font-size-sm">This semeseter all course shown here</span></h3>
					</div>
					<div class="card-title justify-content-between ">
						<div class="card-toolbar">
							<button type="reset" class="btn btn-success mr-2">Save Change</button>
							<button type="reset" class="btn btn-secondary">Cancel</button>
						</div>
					</div>

				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body">
					<!--begin: Datatable-->
					<form class="form">
						<div class="card-body">
							<!--begin::Alert-->
							<div class="alert alert-custom alert-light-danger fade show mb-10" role="alert">
								<div class="alert-icon">
									<span class="svg-icon svg-icon-3x svg-icon-danger">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Info-circle.svg-->
										<svg
											xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink"
											width="24px"
											height="24px"
											viewBox="0 0 24 24"
											version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24"></rect>
												<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"></circle>
												<rect fill="#000000" x="11" y="10" width="2" height="7" rx="1"></rect>
												<rect fill="#000000" x="11" y="7" width="2" height="2" rx="1"></rect>
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
								</div>
								<div class="alert-text font-weight-bold">Configure user passwords to expire
									periodically. Users will need warning that their passwords are going to expire,
									<br>or they might inadvertently get locked out of the system!</div>
									<div class="alert-close">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">
												<i class="ki ki-close"></i>
											</span>
										</button>
									</div>
								</div>
								<!--end::Alert-->
								<div class="form-group row">
									<label class="col-xl-3 col-lg-3 col-form-label text-alert">Current Password</label>
									<div class="col-lg-9 col-xl-6">
										<input
											type="password"
											class="form-control form-control-lg form-control-solid mb-2"
											value=""
											placeholder="Current password">
											<a href="recovery-password-send-mail" class="text-sm font-weight-bold">Forgot password ?</a>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-xl-3 col-lg-3 col-form-label text-alert">New Password</label>
										<div class="col-lg-9 col-xl-6">
											<input
												type="password"
												class="form-control form-control-lg form-control-solid"
												value=""
												placeholder="New password"></div>
										</div>
										<div class="form-group row">
											<label class="col-xl-3 col-lg-3 col-form-label text-alert">Verify Password</label>
											<div class="col-lg-9 col-xl-6">
												<input
													type="password"
													class="form-control form-control-lg form-control-solid"
													value=""
													placeholder="Verify password"></div>
											</div>
										</div>
									</form>					
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
