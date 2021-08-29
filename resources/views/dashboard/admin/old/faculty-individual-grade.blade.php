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
									<th scope="col">Name</th>
									<th scope="col">ID</th>
									<th scope="col">Quiz-01 (5)</th>
									<th scope="col">Assignment-01 (5)</th>
									<th scope="col">Quiz-02 (5)</th>
									<th scope="col">Total (50)</th>
								</tr>

							</thead>
							<tbody>

								<tr>
									<th>1</th>
									<td>Md. Maruf Billah</td>
									<td>1530642642</td>
									<td>01</td>
									<td>04</td>
									<td>05</td>
									<td>10</td>


								</tr>
								<tr>
									<th>2</th>
									<td>Md. Maruf Billah</td>
									<td>1530642642</td>
									<td>01</td>
									<td>04</td>
									<td>05</td>
									<td>10</td>
								</tr>
								<tr>
									<th>3</th>
									<td>Md. Maruf Billah</td>
									<td>1530642642</td>
									<td>01</td>
									<td>04</td>
									<td>05</td>
									<td>10</td>
								</tr>
								<tr>
									<th>4</th>
									<td>Md. Maruf Billah</td>
									<td>1530642642</td>
									<td>01</td>
									<td>04</td>
									<td>05</td>
									<td>10</td>
								</tr>
								<tr>
									<th>5</th>
									<td>Md. Maruf Billah</td>
									<td>1530642642</td>
									<td>01</td>
									<td>04</td>
									<td>05</td>
									<td>10</td>
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
