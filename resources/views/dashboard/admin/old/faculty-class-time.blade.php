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
						<h3 class="card-label">Class Time
							<span class="d-block text-muted pt-2 font-size-sm">Weekly Class time showen here</span></h3>
					</div>
					<div class="card-title justify-content-between ">
						<h3 class="card-label">Course Duration
							<span class="d-block text-muted pt-2 font-size-sm">10.11.2020- 10.11.2021</span></h3>
					</div>

				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body">
					<!--begin: Datatable-->
					<div class="datatable-bordered datatable-head-custom class-time">
						<table class="table table-bordered text-center">
							<thead>
								<tr>
									<th>Time/Day</th>
									<th>Saturday</th>
									<th>Sunday</th>
									<th>Monday</th>
									<th>Tuesday</th>
									<th>Wednesday</th>
									<th>Thursday</th>
									<th>Friday</th>
								</tr>

							</thead>
							<tbody>
								<tr>
									<th style="vertical-align: middle;">08:30 am - 10:00 am</th>
									<td></td>
									<td>CSE31.2</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<th style="vertical-align: middle;">10:30 am - 12:00 pm</th>
									<td></td>
									<td>BIO598.2</td>
									<td></td>
									<td>ACT450.1</td>
									<td></td>
									<td>PHY660.2</td>
									<td></td>
								</tr>
								<tr>
									<th style="vertical-align: middle;">12:30 am - 02:00 pm</th>
									<td></td>
									<td>CSE31.3</td>
									<td></td>
									<td>CSE312.7</td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<th style="vertical-align: middle;">02:30 am - 04:00 pm</th>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<th style="vertical-align: middle;">04:30 am - 06:00 pm</th>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>MAT500</td>
									<td></td>
								</tr>
								<tr>
									<th style="vertical-align: middle;">06:30 am - 08:00 pm</th>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>BIO598.7</td>
								</tr>
							</tbody>
						</table>
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

@endsection
