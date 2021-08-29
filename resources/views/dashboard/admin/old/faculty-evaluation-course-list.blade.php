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
						<h3 class="card-label">Course Duration
							<span class="d-block text-muted pt-2 font-size-sm">10.11.2020- 10.11.2021</span></h3>
					</div>

				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body">
					<!--begin: Datatable-->
					<div class="datatable-bordered datatable-head-custom">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th scope="col">SL No#</th>
									<th scope="col">Course Title</th>
									<th scope="col">Course Name</th>
									<th scope="col">View Work</th>
								</tr>

							</thead>
							<tbody>
								<tr>
									<th>1</th>
									<td>Cse413.1</td>
									<td>Verlog Design and simulation</td>
									<td><a href="faculty-view-evaluation-internal" class="btn btn-success font-weight-bold mr-2">View</a></td>

								</tr>
								<tr>
									<th>2</th>
									<td>Cse413.2</td>
									<td>Verlog Design and simulation</td>
									<td><a href="faculty-view-evaluation-internal" class="btn btn-success font-weight-bold mr-2">View</a></td>
								</tr>
								<tr>
									<th>3</th>
									<td>Cse413.3</td>
									<td>Verlog Design and simulation</td>
									<td><a href="faculty-view-evaluation-internal" class="btn btn-success font-weight-bold mr-2">View</a></td>
								</tr>
								<tr>
									<th>4</th>
									<td>Cse413.4</td>
									<td>Verlog Design and simulation</td>
									<td><a href="faculty-view-evaluation-internal" class="btn btn-success font-weight-bold mr-2">View</a></td>
								</tr>
								<tr>
									<th>5</th>
									<td>His101.14</td>
									<td>History</td>
									<td><a href="faculty-view-evaluation-internal" class="btn btn-success font-weight-bold mr-2">View</a></td>
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
