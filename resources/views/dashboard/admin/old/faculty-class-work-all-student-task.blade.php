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
						<h3 class="card-label">Quiz 01
							<span class="d-block text-muted pt-2 font-size-sm">10:12:2021   ::  02:50pm </span></h3>
					</div>
					<div class="card-title justify-content-between ">
						<h3 class="card-label">Time: 30 mins
							<span class="d-block text-muted pt-2 font-size-sm"></span></h3>
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
									<th scope="col">ID</th>
									<th scope="col">Name</th>
									<th scope="col">Status</th>
									<th scope="col">Marks</th>
									<th scope="col">View</th>
								</tr>

							</thead>
							<tbody>
								<tr>
									<th>1</th>
									<td>1530671042</td>
									<td>Md. Maruf Billah</td>
									<td class="text-center"><span class="label label-danger label-inline mr-2">Unsubmitted</span></td>
									<td>null</td>
									<td><a href="faculty-class-work-task-view" class="btn btn-success font-weight-bold mr-2">View</a></td>
								</tr>
								<tr>
									<th>2</th>
									<td>145225481</td>
									<td>Barkatullah Hossain</td>
									<td class="text-center"><span class="label label-warning label-inline mr-2">Submitted</span></td>
									<td>null</td>
									<td><a href="faculty-class-work-task-view" class="btn btn-success font-weight-bold mr-2">View</a></td>
								</tr>
								<tr>
									<th>3</th>
									<td>1452684122</td>
									<td>Shuvo iftekharul</td>
									<td class="text-center"><span class="label label-success label-inline mr-2">Checked</span></td>
									<td>5</td>
									<td><a href="faculty-class-work-task-view" class="btn btn-success font-weight-bold mr-2">View</a></td>
								</tr>
								<tr>
									<th>4</th>
									<td>1523648995</td>
									<td>Zakariya molla</td>
									<td class="text-center"><span class="label label-danger label-inline mr-2">Unsubmitted</span></td>
									<td>null</td>
									<td><a href="faculty-class-work-task-view" class="btn btn-success font-weight-bold mr-2">View</a></td>
								</tr>
								<tr>
									<th>5</th>
									<td>1235489654</td>
									<td>Misti talukdar</td>
									<td class="text-center"><span class="label label-danger label-inline mr-2">Unsubmitted</span></td>
									<td>null</td>
									<td><a href="faculty-class-work-task-view" class="btn btn-success font-weight-bold mr-2">View</a></td>
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
