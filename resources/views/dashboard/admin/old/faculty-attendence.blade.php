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
					<div class="card-title">
						<h3 class="card-label">Student Attendence
							<span class="d-block text-muted pt-2 font-size-sm">Student Attendence management </span></h3>
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
									<th scope="col">Attendence</th>
								</tr>

							</thead>
							<tbody>
								<tr>
									<th>1</th>
									<td>1530642642</td>
									<td>Md Barkatullah Hossain</td>
									<td> <label class="checkbox checkbox-success">
											<input type="checkbox" checked="checked">
											<span></span>
										</label> </td>
								</tr>
								<tr>
									<th>2</th>
									<td>1530671042</td>
									<td>Md Maruf Billah</td>
									<td> <label class="checkbox checkbox-success">
											<input type="checkbox" checked="checked">
											<span></span>
										</label> </td>
								</tr>
								<tr>
									<th>3</th>
									<td>1530421045</td>
									<td>Ifthakharul Alam Shuvo</td>
									<td> <label class="checkbox checkbox-success">
											<input type="checkbox" checked="checked">
											<span></span>
										</label> </td>
								</tr>
								<tr>
									<th>4</th>
									<td>1430604042</td>
									<td>MD. Zakaria</td>
									<td> <label class="checkbox checkbox-success">
											<input type="checkbox" checked="checked">
											<span></span>
										</label> </td>
								</tr>
								<tr>
									<th>5</th>
									<td>1530642642</td>
									<td>Md Barkatullah Hossain</td>
									<td> <label class="checkbox checkbox-success">
											<input type="checkbox" checked="checked">
											<span></span>
										</label> </td>
								</tr>
								<tr>
									<th>6</th>
									<td>1530671042</td>
									<td>Md Maruf Billah</td>
									<td> <label class="checkbox checkbox-success">
											<input type="checkbox" checked="checked">
											<span></span>
										</label> </td>
								</tr>
								<tr>
									<th>7</th>
									<td>1530421045</td>
									<td>Ifthakharul Alam Shuvo</td>
									<td> <label class="checkbox checkbox-success">
											<input type="checkbox" checked="checked">
											<span></span>
										</label> </td>
								</tr>
								<tr>
									<th>8</th>
									<td>1430604042</td>
									<td>MD. Zakaria</td>
									<td> <label class="checkbox checkbox-success">
											<input type="checkbox" checked="checked">
											<span></span>
										</label> </td>
								</tr><tr>
									<th>9</th>
									<td>1530642642</td>
									<td>Md Barkatullah Hossain</td>
									<td> <label class="checkbox checkbox-success">
											<input type="checkbox" checked="checked">
											<span></span>
										</label> </td>
								</tr>
								<tr>
									<th>10</th>
									<td>1530671042</td>
									<td>Md Maruf Billah</td>
									<td> <label class="checkbox checkbox-success">
											<input type="checkbox" checked="checked">
											<span></span>
										</label> </td>
								</tr>
								<tr>
									<th>11</th>
									<td>1530421045</td>
									<td>Ifthakharul Alam Shuvo</td>
									<td> <label class="checkbox checkbox-success">
											<input type="checkbox" checked="checked">
											<span></span>
										</label> </td>
								</tr>
								<tr>
									<th>12</th>
									<td>1430604042</td>
									<td>MD. Zakaria</td>
									<td> <label class="checkbox checkbox-success">
											<input type="checkbox" checked="checked">
											<span></span>
										</label> </td>
								</tr><tr>
									<th>13</th>
									<td>1530642642</td>
									<td>Md Barkatullah Hossain</td>
									<td> <label class="checkbox checkbox-success">
											<input type="checkbox" checked="checked">
											<span></span>
										</label> </td>
								</tr>
								<tr>
									<th>14</th>
									<td>1530671042</td>
									<td>Md Maruf Billah</td>
									<td> <label class="checkbox checkbox-success">
											<input type="checkbox" checked="checked">
											<span></span>
										</label> </td>
								</tr>
								<tr>
									<th>15</th>
									<td>1530421045</td>
									<td>Ifthakharul Alam Shuvo</td>
									<td> <label class="checkbox checkbox-success">
											<input type="checkbox" checked="checked">
											<span></span>
										</label> </td>
								</tr>
								<tr>
									<th>16</th>
									<td>1430604042</td>
									<td>MD. Zakaria</td>
									<td> <label class="checkbox checkbox-success">
											<input type="checkbox" checked="checked">
											<span></span>
										</label> </td>
								</tr><tr>
									<th>17</th>
									<td>1530642642</td>
									<td>Md Barkatullah Hossain</td>
									<td> <label class="checkbox checkbox-success">
											<input type="checkbox" checked="checked">
											<span></span>
										</label> </td>
								</tr>
								<tr>
									<th>18</th>
									<td>1530671042</td>
									<td>Md Maruf Billah</td>
									<td> <label class="checkbox checkbox-success">
											<input type="checkbox" checked="checked">
											<span></span>
										</label> </td>
								</tr>
								<tr>
									<th>19</th>
									<td>1530421045</td>
									<td>Ifthakharul Alam Shuvo</td>
									<td> <label class="checkbox checkbox-success">
											<input type="checkbox" checked="checked">
											<span></span>
										</label> </td>
								</tr>
								<tr>
									<th>20</th>
									<td>1430604042</td>
									<td>MD. Zakaria</td>
									<td> <label class="checkbox checkbox-success">
											<input type="checkbox" checked="checked">
											<span></span>
										</label> </td>
								</tr><tr>
									<th>21</th>
									<td>1530642642</td>
									<td>Md Barkatullah Hossain</td>
									<td> <label class="checkbox checkbox-success">
											<input type="checkbox" checked="checked">
											<span></span>
										</label> </td>
								</tr>
								<tr>
									<th>22</th>
									<td>1530671042</td>
									<td>Md Maruf Billah</td>
									<td> <label class="checkbox checkbox-success">
											<input type="checkbox" checked="checked">
											<span></span>
										</label> </td>
								</tr>
								<tr>
									<th>23</th>
									<td>1530421045</td>
									<td>Ifthakharul Alam Shuvo</td>
									<td> <label class="checkbox checkbox-success">
											<input type="checkbox" checked="default">
											<span></span>
										</label> </td>
								</tr>
								<tr>
									<th>24</th>
									<td>1430604042</td>
									<td>MD. Zakaria</td>
									<td> <label class="checkbox checkbox-success">
											<input type="checkbox" checked="checked">
											<span></span>
										</label> </td>
								</tr>
							</tbody>
						</table>
					</div>
					<!--end: Datatable-->
					<div align="center">
						<button type="button" class="btn btn-success">Submit</button>
					</div>
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
