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
						<h3 class="card-label">Notifications
							<span class="d-block text-muted pt-2 font-size-sm">All Your notifications shown here</span></h3>
					</div>
					<div class="card-title justify-content-between ">
						<h3 class="card-label">Course Duration
							<span class="d-block text-muted pt-2 font-size-sm">10.11.2020- 10.11.2021</span></h3>
					</div>

				</div>
				<!--end::Header-->




				<!--begin::Body-->
				<div class="card-body">


				<!-- Content::stard  -->
				<div class="row">
									<div class="col-lg-12 col-xxl-12">
										<!--begin::List Widget 9-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header align-items-center border-0 mt-4">
												<h3 class="card-title align-items-start flex-column">
													<span class="font-weight-bolder text-dark">All Notifications</span>													
												</h3>
												<div class="card-toolbar">
													<div class="dropdown dropdown-inline ml-10">
													<button type="button" class="btn btn-light-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Short by</button>
														<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
															<!--begin::Navigation-->
															<ul class="navi navi-hover">
																<li class="navi-header font-weight-bold py-4">
																	<span class="font-size-lg">Choose tour Course</span>
																	<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
																</li>
																<li class="navi-separator mb-3 opacity-70"></li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-primary">All</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">Institute</span>
																		</span>
																	</a>
																</li>	
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-success">CSE333</span>
																		</span>
																	</a>
																</li>																
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-warning">CHE300</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-primary">CSE110</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">BIO100</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-success">MAT100</span>
																		</span>
																	</a>
																</li>
																<!-- <li class="navi-separator mt-3 opacity-70"></li>
																<li class="navi-footer py-4">
																	<a class="btn btn-clean font-weight-bold btn-sm" href="#">
																	<i class="ki ki-plus icon-sm"></i>Add new</a>
																</li> -->
															</ul>
															<!--end::Navigation-->
														</div>
													</div>													
												</div>												
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-4">
												<div class="timeline timeline-5 mt-3">
													<!--begin::Item-->
													<div class="timeline-item align-items-start">
														<!--begin::Label-->
														<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3">CSE333</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless text-success icon-xxl"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Content-->
														<div class="timeline-content">
																		<div class="d-flex align-items-center justify-content-between mb-3">
																			<div class="mr-2">
																				<a href="#" class="text-dark-75 text-hover-primary font-weight-bold">There is no class for tomorrow</a>
																				<span class="text-muted ml-2">Today</span>
																				<span class="label label-light-success font-weight-bolder label-inline ml-2">new</span>
																			</div>
																			
																		</div>
																		<p class="p-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
																	</div>
														<!--end::Content-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="timeline-item align-items-start">
														<!--begin::Label-->
														<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3">CHE300</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless text-success icon-xxl"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Content-->
														<div class="timeline-content">
																		<div class="d-flex align-items-center justify-content-between mb-3">
																			<div class="mr-2">
																				<a href="#" class="text-dark-75 text-hover-primary font-weight-bold">There is no class for tomorrow</a>
																				<span class="text-muted ml-2">Today</span>
																				<span class="label label-light-success font-weight-bolder label-inline ml-2">new</span>
																			</div>
																			
																		</div>
																		<p class="p-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
																	</div>
														<!--end::Content-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="timeline-item align-items-start">
														<!--begin::Label-->
														<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3">CSE110</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless text-success icon-xxl"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Content-->
														<div class="timeline-content">
																		<div class="d-flex align-items-center justify-content-between mb-3">
																			<div class="mr-2">
																				<a href="#" class="text-dark-75 text-hover-primary font-weight-bold">There is no class for tomorrow</a>
																				<span class="text-muted ml-2">Today</span>
																				<span class="label label-light-success font-weight-bolder label-inline ml-2">new</span>
																			</div>
																			
																		</div>
																		<p class="p-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
																	</div>
														<!--end::Content-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="timeline-item align-items-start">
														<!--begin::Label-->
														<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3">Institute</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless text-success icon-xxl"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Content-->
														<div class="timeline-content">
																		<div class="d-flex align-items-center justify-content-between mb-3">
																			<div class="mr-2">
																				<a href="#" class="text-dark-75 text-hover-primary font-weight-bold">Professor Dr. Partha Pratim Dey - Obituary</a>
																				<span class="text-muted ml-2">Today</span>
																				<span class="label label-light-success font-weight-bolder label-inline ml-2">new</span>
																			</div>
																			
																		</div>
																		<p class="p-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
																	</div>
														<!--end::Content-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="timeline-item align-items-start">
														<!--begin::Label-->
														<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3">Institute</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless text-success icon-xxl"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Content-->
														<div class="timeline-content">
																		<div class="d-flex align-items-center justify-content-between mb-3">
																			<div class="mr-2">
																				<a href="#" class="text-dark-75 text-hover-primary font-weight-bold">20% Student Fees Waiver: Summer 2020</a>
																				<span class="text-muted ml-2">Today</span>
																				<span class="label label-light-success font-weight-bolder label-inline ml-2">new</span>
																			</div>
																			
																		</div>
																		<p class="p-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
																	</div>
														<!--end::Content-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="timeline-item align-items-start">
														<!--begin::Label-->
														<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3">MAT100</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless text-warning icon-xxl"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Content-->
														<div class="timeline-content">
																		<div class="d-flex align-items-center justify-content-between mb-3">
																			<div class="mr-2">
																				<a href="#" class="text-dark-75 text-hover-primary font-weight-bold">There is no class for tomorrow</a>
																				<span class="text-muted ml-2">12.12.2020</span>
																				
																			</div>
																			
																		</div>
																		<p class="p-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
																	</div>
														<!--end::Content-->
													</div>
													<!--end::Item-->
													<!--begin: Item-->
													<div class="timeline-item align-items-start">
														<!--begin::Label-->
														<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3">MAT100</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless text-warning icon-xxl"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Content-->
														<div class="timeline-content">
																		<div class="d-flex align-items-center justify-content-between mb-3">
																			<div class="mr-2">
																				<a href="#" class="text-dark-75 text-hover-primary font-weight-bold">There is no class for tomorrow</a>
																				<span class="text-muted ml-2">12.12.2020</span>
																				
																			</div>
																			
																		</div>
																		<p class="p-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
																	</div>
														<!--end::Content-->
													</div>
													<!--end: Item-->
													<!--begin::Item-->
													<div class="timeline-item align-items-start">
														<!--begin::Label-->
														<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3">MAT100</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless text-danger icon-xxl"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Content-->
														<div class="timeline-content">
																		<div class="d-flex align-items-center justify-content-between mb-3">
																			<div class="mr-2">
																				<a href="#" class="text-dark-75 text-hover-primary font-weight-bold">There is no class for tomorrow</a>
																				<span class="text-muted ml-2">12.12.2020</span>
																				
																			</div>
																			
																		</div>
																		<p class="p-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
																	</div>
														<!--end::Content-->
													</div>
													<!--end::Item-->
												</div>
												<!--end: Items-->
											</div>
											<!--end: Card Body-->
										</div>
										<!--end: Card-->
										<!--end: List Widget 9-->
									</div>								
																		
								</div>
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

@endsection
