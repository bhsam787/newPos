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
									<th scope="col">Task Title</th>
									<th scope="col">Marks</th>
									<th scope="col">View</th>
								</tr>

							</thead>
							<tbody>
								<tr>
									<th>1</th>
									<td>Quiz 1</td>
									<td>5</td>
									<td>
										<a href="faculty-class-work-all-student-task" class="btn btn-success font-weight-bold mr-2">View</a>
										<a href="faculty-class-work-all-task" class="btn btn-warning font-weight-bold mr-2">Edit</a>
										<a href="faculty-class-work-all-task" class="btn btn-danger font-weight-bold mr-2">Delete</a>
										
									</td>
								</tr>
								<tr>
									<th>2</th>
									<td>Assignment 1</td>
									<td>10</td>
									<td>
										<a href="faculty-class-work-all-student-task" class="btn btn-success font-weight-bold mr-2">View</a>
										<a href="faculty-class-work-all-task" class="btn btn-warning font-weight-bold mr-2">Edit</a>
										<a href="faculty-class-work-all-task" class="btn btn-danger font-weight-bold mr-2">Delete</a>
										
									</td>
								</tr>
								<tr>
									<th>3</th>
									<td>Quiz 2</td>
									<td>15</td>
									<td>
										<a href="faculty-class-work-all-student-task" class="btn btn-success font-weight-bold mr-2">View</a>
										<a href="faculty-class-work-all-task" class="btn btn-warning font-weight-bold mr-2">Edit</a>
										<a href="faculty-class-work-all-task" class="btn btn-danger font-weight-bold mr-2">Delete</a>
										
									</td>
								</tr>
								<tr>
									<th>4</th>
									<td>Mid 1</td>
									<td>20</td>
									<td>
										<a href="faculty-class-work-all-student-task" class="btn btn-success font-weight-bold mr-2">View</a>
										<a href="faculty-class-work-all-task" class="btn btn-warning font-weight-bold mr-2">Edit</a>
										<a href="faculty-class-work-all-task" class="btn btn-danger font-weight-bold mr-2">Delete</a>
										
									</td>
								</tr>
								<tr>
									<th>5</th>
									<td>Assignment 2</td>
									<td>10</td>
									<td>
										<a href="faculty-class-work-all-student-task" class="btn btn-success font-weight-bold mr-2">View</a>
										<a href="faculty-class-work-all-task" class="btn btn-warning font-weight-bold mr-2">Edit</a>
										<a href="faculty-class-work-all-task" class="btn btn-danger font-weight-bold mr-2">Delete</a>
										
									</td>
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
