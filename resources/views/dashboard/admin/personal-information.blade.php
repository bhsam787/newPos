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

				<div class="card-header py-3">
								<div class="card-title align-items-start flex-column">
									<h3 class="card-label font-weight-bolder text-dark">Personal Information</h3>
									<span class="text-muted font-weight-bold font-size-sm mt-1">Update your personal informaiton</span>
								</div>
								<div class="card-toolbar">
									<form class="form" method="post" enctype="multipart/form-data" action="{{ route('personal-information.update',$currentUser->id) }} ">
									<button type="submit" class="btn btn-success mr-2">Save Changes</button>
									{{-- <button type="reset" class="btn btn-secondary">Cancel</button> --}}
								</div>
							</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="">
					<!--begin: Datatable-->

					<div class="flex-row-fluid">
										<!--begin::Card-->
						<div class="card card-custom card-stretch">
							<!--begin::Header-->

							<!--end::Header-->
							<!--begin::Form-->
								<!--begin::Body-->
								@csrf
								@method('PUT')
								@if ($errors->any())
								@foreach ($errors->all() as $error)
								<div class="alert alert-custom alert-outline-danger fade show mb-5" role="alert">
										<div class="alert-icon"><i class="flaticon-warning"></i></div>
										<div class="alert-text">{{ $error }}</div>
										<div class="alert-close">
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
														<span aria-hidden="true"><i class="ki ki-close"></i></span>
												</button>
										</div>
								</div>

								@endforeach

								@endif


								<div class="card-body">
									<div class="row">
										<label class="col-xl-3"></label>
										<div class="col-lg-9 col-xl-6">
											<h5 class="font-weight-bold mb-6">User Info</h5>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-xl-3 col-lg-3 col-form-label text-right">Avatar</label>
										<div class="col-lg-9 col-xl-6">
											<div
												class="image-input image-input-outline"
												id="kt_profile_avatar"
												style="background-image: url(assets/media/users/blank.png)">
												<div
													class="image-input-wrapper profile-avatar-pic"
												></div>
												<label

													class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
													data-action="change"
													data-toggle="tooltip"
													title=""
													data-original-title="Change avatar">
													<i class="fa fa-pen icon-sm text-muted"></i>
													<input type="file" name="file_name" accept=".png, .jpg, .jpeg">
														<input type="hidden" name="profile_avatar_remove"></label>
														<span
															class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
															data-action="cancel"
															data-toggle="tooltip"
															title=""
															data-original-title="Cancel avatar">
															<i class="ki ki-bold-close icon-xs text-muted"></i>
														</span>
														<span
															class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
															data-action="remove"
															data-toggle="tooltip"
															title=""
															data-original-title="Remove avatar">
															<i class="ki ki-bold-close icon-xs text-muted"></i>
														</span>
													</div>
													<span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-xl-3 col-lg-3 col-form-label text-right">Full Name</label>
												<div class="col-lg-9 col-xl-6">
													<input
														class="form-control form-control-lg form-control-solid"
														type="text" name="name"
														value="{{ $currentUser->name }}"></div>
												</div>

													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label text-right">Address</label>
														<div class="col-lg-9 col-xl-6">
															<input
																class="form-control form-control-lg form-control-solid"
																type="text" name="area"
																value="{{ $currentUser->area }}">
																<!-- <span class="form-text text-muted">If you want your invoices addressed to a
																	company. Leave blank to use your full name.</span> -->
															</div>
														</div>
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label text-right">Role</label>
														<div class="col-lg-9 col-xl-6">
															<input
																class="form-control form-control-lg form-control-solid"
																type="text"
																value="{{ $currentUser->role }}" disabled>
																<!-- <span class="form-text text-muted">If you want your invoices addressed to a
																	company. Leave blank to use your full name.</span> -->
															</div>
														</div>
														<div class="row">
															<label class="col-xl-3"></label>
															<div class="col-lg-9 col-xl-6">
																<h5 class="font-weight-bold mt-10 mb-6">Contact Info</h5>
															</div>
														</div>
														<div class="form-group row">
															<label class="col-xl-3 col-lg-3 col-form-label text-right">Contact Phone</label>
															<div class="col-lg-9 col-xl-6">
																<div class="input-group input-group-lg input-group-solid">
																	<div class="input-group-prepend">
																		<span class="input-group-text">
																			<i class="la la-phone"></i>
																		</span>
																	</div>
																	<input
																		type="text"
																		class="form-control form-control-lg form-control-solid"
																		value="{{ $currentUser->phone }}" name="phone"
																		placeholder="Phone"></div>
																	<span class="form-text text-muted">We'll never share your phone with anyone else.</span>
																</div>
															</div>
															<div class="form-group row">
																<label class="col-xl-3 col-lg-3 col-form-label text-right">Email Address</label>
																<div class="col-lg-9 col-xl-6">
																	<div class="input-group input-group-lg input-group-solid">
																		<div class="input-group-prepend">
																			<span class="input-group-text">
																				<i class="la la-at"></i>
																			</span>
																		</div>
																		<input
																			type="text"
																			class="form-control form-control-lg form-control-solid"
																			value="{{ $currentUser->email }}"
																			placeholder="Email"></div>
																	</div>
																</div>
																<!--end::Body-->
															</form>
															<!--end::Form-->
														</div>
													</div>

													<script type="text/javascript">
													$(document).ready(function(){
															$(".profile-avatar-pic").css("background-image", "url(upload/resource/{{ $currentUser->file_name }})");

														});
													</script>
													{{-- <script src="assets/js/pages/widgets.js"></script> --}}
													<script src="assets/js/pages/custom/profile/profile.js"></script>


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
