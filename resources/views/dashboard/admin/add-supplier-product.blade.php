@extends('dashboard.layout.master')

@section('section')
<style media="screen">
	.text-white span {
		font-size: 16px;
	}

	.col-md-1 {
		padding: 2px !important;
	}

	.form-group label {
		font-size: 0.9rem;
	}

	.sam {
		/* background: #0072ff; */
		padding: 12px;
		color: white;
		position: fixed;
		bottom: 0;
		z-index: 999;
		left: 30px;
	}

	.row.final-amount {
		border-top: 1px solid #9da5ab;
		margin-top: -15px;
	}

	.final-amount .col-md-1 {
		/* border: 1px solid #E5EAEE; */
		margin-top: 5px;
	}

	.final-amount .form-control:disabled,
	.form-control[readonly] {
		background-color: #EE9D01;
		opacity: 1;
		color: white;
		padding: 0 5px;
	}
	.dynamic-profit-block .d-flex.justify-content-between {
    padding: 5px 15px;
}
.d-flex.justify-content-between.dynamic-profit {
    /* background: red; */
    color: white;
}
</style>
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid">


	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container-fluid">
			<!-- begin::Card-->
			<div class="card card-custom overflow-hidden">
				<div class="card-body p-0">
					<!-- begin: Invoice-->
					<!-- begin: Invoice header-->
					<div class="row justify-content-center bgi-size-cover bgi-no-repeat py-8 px-8 py-md-27 px-md-0"
					  style="background-image: url(https://www.technocrazed.com/wp-content/uploads/2015/12/black-wallpaper-to-set-as-background-38.jpg);background-position: center center;">
						<div class="col-md-9">
							<div class="d-flex justify-content-between pb-10 pb-md-30 flex-column flex-md-row">
								<h1 class="display-4 text-white font-weight-boldest mb-10"><?php if(isset($_GET['supplierName'])) echo $_GET['supplierName']; ?><span> (Add product area)</span></h1>
								<div class="d-flex flex-column align-items-md-end px-0">
									<!--begin::Logo-->
									<div class="row">
										<div class="col-md-6">
											{{-- <a href="#" class="btn btn-primary font-weight-bolder mr-6 mb-4" style="width: 155px;">
												<span class="svg-icon svg-icon-md">
													<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Design/Flatten.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"></rect>
															<circle fill="#000000" cx="9" cy="15" r="6"></circle>
															<path
															  d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
															  fill="#000000" opacity="0.3"></path>
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>Add Products</a> --}}
										</div>
										<div class="col-md-6">
											<a href="{{ route('supplier.index') }}" class="btn btn-danger font-weight-bolder ml-2 mb-4" style="width:130px;">
												<span class="svg-icon svg-icon-md">
													<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Design/Flatten.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"></rect>
															<circle fill="#000000" cx="9" cy="15" r="6"></circle>
															<path
															  d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
															  fill="#000000" opacity="0.3"></path>
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>Back</a>
										</div>
									</div>

									<!--end::Logo-->
									<span class="text-white d-flex flex-column align-items-md-end opacity-70">
										<span></span>
										<span></span>
									</span>
								</div>
							</div>
							<div class="border-bottom w-100 opacity-20"></div>

							<div class="d-flex justify-content-between text-white pt-6">
								<div class="d-flex flex-column flex-root">
									<span class="font-weight-bolder mb-2">Target sale</span>
									<span class="opacity-70 " id="fTargetSale1">

									</span>
								</div>
								<div class="d-flex flex-column flex-root">
									<span class="font-weight-bolder mb-2">Total Cost</span>
									<span class="opacity-70">
										<?php if(isset($_GET['totalAmount']))
										echo $_GET['totalAmount']; ?> TK
									</span>
								</div>
								<div class="d-flex flex-column flex-root">
									<span class="font-weight-bolder mb-2">Product Category </span>
									<span class="opacity-70"><span id="productCategory">
											<?php if(isset($_GET['category']))
									echo $_GET['category']; ?></span>
										Itemes</span>
								</div>
								<div class="d-flex flex-column flex-root">
									<span class="font-weight-bolder mb-2">Total Product</span>
									<span class="opacity-70"><span id="productCategory"></span> Itemes</span>
								</div>

							</div>
							<div class="border-bottom w-100 opacity-20 pt-7"></div>

						</div>
					</div>
					<!-- end: Invoice header-->


					<!-- begin: Invoice footer-->
					<div class="row justify-content-center bg-gray-100 py-8 px-8 py-md-10 px-md-0">
						<div class="col-md-9">
							<div class="d-flex justify-content-between flex-column flex-md-row font-size-lg">
								<div class="d-flex flex-column mb-10 mb-md-0" style="">
									<div class="font-weight-bolder font-size-lg mb-3">Estimated Cost</div>
									<div class="d-flex justify-content-between mb-3">
										<span class="mr-15 font-weight-bold">Total Category :</span>
										<span class="text-right productCategory">
											<?php if(isset($_GET['category']))
											echo $_GET['category']; ?>
											Itemes</span>
										</span>
									</div>
									<div class="d-flex justify-content-between mb-3">
										<span class="mr-15 font-weight-bold">Total Cost :</span>
										<span class="text-right total-cost">
											<?php if(isset($_GET['totalAmount']))
											echo $_GET['totalAmount']; ?> TK
										</span>
									</div>
									<div class="d-flex justify-content-between">
										<span class="mr-15 font-weight-bold">Per Category Average Cost :</span>
										<span class="text-right cat-cost-calucaltion">
											<?php if(isset($_GET['totalAmount']) && isset($_GET['category']))
											$perCategoryCost=number_format((float)$_GET['totalAmount']/$_GET['category'], 2, '.', '');
											echo "(".$_GET['totalAmount']."/".$_GET['category'].")=".$perCategoryCost." TK ";
											?>
										</span>
									</div>
								</div>
								<div class="d-flex flex-column text-md-right">
									<span class="font-size-lg font-weight-bolder mb-1">TOTAL COST AMOUNT</span>
									<span class="font-size-h2 font-weight-boldest text-danger mb-1 amountTotal">
										<?php if(isset($_GET['totalAmount']))
									echo "<span id='amntotal'>".$_GET['totalAmount']; ?></span> TK
									</span>
									<span>Taxes Included</span>
								</div>
							</div>
						</div>
					</div>
					<!-- end: Invoice footer-->
					<!-- begin: Invoice body-->
					<div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">

						{{-- form start --}}
						<?php
					 if (isset($productList[0]->target_sale)) {

					 }
					 else{

					 }
					 ?>
						<?php
					 	if(!isset($productList[0]->id)){

					 ?>
						<form action="{{ route('product.store') }}" method="post">
							<?php
					 }
						 else{
							 ?>
							<form action="{{ route('product.update',$supplierID) }}" method="post">
								@method('PUT')
								<?php
						 }
						 ?>

								@if ($errors->any())
								<div class="alert alert-danger">
									@foreach ($errors->all() as $error)
									<strong>{{ $error }} </br></strong>
									@endforeach
								</div>
								@endif


								@csrf



								<div class="container">

									<div class="form-group row">
										<div class="col-lg-12 target-form">



											@for ($i=0; $i<$_GET['category']; $i++) <div class="form-group row align-items-center ">

												<input type="hidden" name="supplier_id[]" class="form-control" placeholder="" value="{{ $_GET['supplierID'] }}" />
												<input type="hidden" name="id[]" class="form-control" placeholder="" value="{{ isset($productList[$i]->id) ? $productList[$i]->id  : '' }}" />
												<div class="col-md-1">
													<label>Category Name:</label>
													{{-- {{ $productList[$i]->category_name }} --}}
													<input type="text" name="category_name[]" class="form-control" placeholder="Text" value="{{ isset($productList[$i]->category_name) ? $productList[$i]->category_name  : '' }}" />
												</div>
												<div class="col-md-1">
													<label>Product Name:</label>
													<input type="text" name="product_name[]" class="form-control" placeholder="Text" value="{{ isset($productList[$i]->product_name) ? $productList[$i]->product_name  : '' }}" />
												</div>
												<div class="col-md-1">
													<label>Approx Cost:</label>
													<input type="text" name="approximate_cost[]" class="form-control" placeholder="" id='approxCost{{ $i }}'
													  value="{{ isset($productList[$i]->approximate_cost) ? $productList[$i]->approximate_cost  : $perCategoryCost }}" />
												</div>
												<div class="col-md-1">
													<label>Target Sale:</label>
													<input type="text" step="0.01" name="target_sale[]" class="form-control" placeholder="" id='perCategoryCost{{ $i }}'
													  value="{{ isset($productList[$i]->target_sale) ? $productList[$i]->target_sale  : $perCategoryCost }}" />
												</div>
												<div class="col-md-1">
													<label>Quanity:</label>
													<input type="text" name="quantity[]" class="form-control" id="quanity{{ $i }}" placeholder="" value="{{ isset($productList[$i]->quantity) ? $productList[$i]->quantity  : '' }}" />
												</div>
												<div class="col-md-1">
													<label>Product Cost:</label>
													<input type="text" name="product_cost[]" class="form-control" id="productCost{{ $i }}" placeholder="" value="{{ isset($productList[$i]->product_cost) ? $productList[$i]->product_cost  : '' }}" />
												</div>
												<div class="col-md-1">
													<label>Percantage % :</label>
													<input type="text" name="percentage[]" class="form-control" id="percentage{{ $i }}" placeholder="" value="{{ isset($productList[$i]->percentage) ? $productList[$i]->percentage  : '' }}" />
												</div>

												<div class="col-md-1">
													<label>Total Sale:</label>
													<input type="text" class="form-control" value="50" id='totalSale{{ $i }}' disabled />
												</div>
												<div class="col-md-1">
													<label>Total Profit:</label>
													<input type="number" class="form-control" id='totalProfit{{ $i }}' value="50" disabled />
												</div>
												<div class="col-md-1">
													<label>Total Due:</label>
													<input type="number" class="form-control" id="TotalDue{{ $i }}" value="50" disabled />
												</div>
												<div class="col-md-1">
													<label>Stock Remaining:</label>
													<input type="number" class="form-control" id="StockRemaining{{ $i }}" value="5" placeholder="" disabled />
												</div>
												<div class="col-md-1">
													<label>loan & </label><label> Verdict:</label>
													<input type="email" class="form-control" placeholder="" />
												</div>

										</div>

										@endfor

										<div class=" row final-amount">

											<div class="col-md-1">
											</div>
											<div class="col-md-1">
											</div>
											<div class="col-md-1">
												<input type="text" id="fApproxCost" class="form-control"  disabled />
											</div>
											<div class="col-md-1">
												<input type="text" id="fTargetSale" class="form-control" value="" disabled />
											</div>
											<div class="col-md-1">
												<input type="text" id="fQuanity" class="form-control" value="" disabled />
											</div>
											<div class="col-md-1">
											</div>
											<div class="col-md-1">
											</div>
											<div class="col-md-1">
												<input type="text" id="fTotalSale" class="form-control" value="" disabled />
											</div>
											<div class="col-md-1">
												<input type="text" id="fTotalProfit" class="form-control" value="" disabled />
											</div>
											<div class="col-md-1">
												<input type="text" id="fTotalDue" class="form-control" value="" disabled />
											</div>
											<div class="col-md-1">
												<input type="text" id="fStockRemaining" class="form-control" value="" disabled />
											</div>
											<div class="col-md-1">
											</div>
										</div>
										<div class="mt-5">
											<button type="reset" class="btn btn-danger font-weight-bold py-3 px-6 mr-2 " id="haramiReset" style="float:right;">Reset</button>
											<button type="submit" name="save" class="btn btn-primary font-weight-bold py-3 px-6 mr-2" style="float:right;"><?php echo isset($productList[0]->id)? 'Update':'Save' ?></button>
										</div>

									</div>
								</div>

					</div>



					</form>
					{{-- form end --}}
				</div>
				<!-- end: Invoice body-->

				<!-- begin: Invoice footer-->
				<div class="row justify-content-center bg-gray-100 p-10 Invoice-footer">
					<div class="col-md-9">
						<div class="d-flex justify-content-between flex-column flex-md-row font-size-lg">

							<div class="d-flex flex-column mb-10 mb-md-0 sam" style="">
								<div class="font-weight-bolder font-size-lg mb-3">Approximate Protfit Report</div>
								<div class="d-flex justify-content-between mb-3">
									<span class="mr-15 font-weight-bold ">Target Sale :</span>
									<span class="text-right targetSalea">

									</span>
									</span>
								</div>
								<div class="d-flex justify-content-between mb-3">
									<span class="mr-15 font-weight-bold">Total Cost :</span>
									<span class="text-right total-cost">
										<?php if(isset($_GET['totalAmount']))
											echo $_GET['totalAmount']; ?> TK
									</span>
								</div>
								<div class="d-flex justify-content-between">
									<span class="mr-15 font-weight-bold">Expected Profit :</span>
									<span class="text-right expectedProfit">

									</span>
								</div>
							</div>
							<div class="d-flex flex-column mb-10 mb-md-0 " style="visibility:hidden">
								<div class="font-weight-bolder font-size-lg mb-3">Approximate Protfit Report</div>
								<div class="d-flex justify-content-between mb-3">
									<span class="mr-15 font-weight-bold">Target Sale :</span>
									<span class="text-right tagetSale">

									</span>
									</span>
								</div>
								<div class="d-flex justify-content-between mb-3">
									<span class="mr-15 font-weight-bold">Total Cost :</span>
									<span class="text-right total-cost">
										<?php if(isset($_GET['totalAmount']))
											echo $_GET['totalAmount']; ?> TK
									</span>
								</div>
								<div class="d-flex justify-content-between">
									<span class="mr-15 font-weight-bold">Expected Profit :</span>
									<span class="text-right ">

									</span>
								</div>
							</div>
							<div class="d-flex flex-column mb-10 mb-md-0 dynamic-profit-block" style="">
								<div class="font-weight-bolder font-size-lg mb-3">Estimated Sales Report</div>
								<div class="d-flex justify-content-between ">
									<span class="mr-15 font-weight-bold">Total Sale :</span>
									<span class="text-right finalTotalSale">

									</span>
									</span>
								</div>
								<div class="d-flex justify-content-between ">
									<span class="mr-15 font-weight-bold">Total Cost :</span>
									<span class="text-right total-cost">-
										<?php if(isset($_GET['totalAmount']))
											echo $_GET['totalAmount']; ?> TK
									</span>
								</div>
								<div class="d-flex justify-content-between">
									<span class="mr-15 font-weight-bold">Total Due :</span>
									<span class="text-right FinalTotalDue">- 0 TK

									</span>
								</div>
								<div class="d-flex justify-content-between dynamic-profit">
									<span class="mr-15 font-weight-boldest labeltextfooter">Total Profit :</span>
									<span class="text-right FinalTotalProfit font-weight-boldest">

									</span>
								</div>
							</div>

						</div>
					</div>
				</div>
				<!-- end: Invoice footer-->
				<!-- begin: Invoice action-->
				<div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
					<div class="col-md-9">
						<div class="d-flex justify-content-between">
							<button type="button" class="btn btn-light-primary font-weight-bold" onclick="window.print();">Download Invoice</button>
							<button type="button" class="btn btn-primary font-weight-bold" onclick="window.print();">Print Invoice</button>
						</div>
					</div>
				</div>
				<!-- end: Invoice action-->
				<!-- end: Invoice-->
			</div>
		</div>
		<!-- end::Card-->
	</div>
	<!--end::Container-->
</div>
<!--end::Content-->



<script type="text/javascript">
	$(document).ready(function() {

		// function Edit POST
		$(document).on('click', '.edit', function() {

			// $('.modal-title').text('Post Edit');
			$('#id').val($(this).data('id'));
			var id = $(this).data('id');
			$('#supplier_name').val($(this).data('name'));
			$('#order_date').val($(this).data('odate'));
			$('#receive_date').val($(this).data('rdate'));
			$('#rupee').val($(this).data('rupee'));
			$('#bdt').val($(this).data('bdt'));
			$('#weight').val($(this).data('weight'));
			$('#weight_cost').val($(this).data('wcost'));
			$('#category').val($(this).data('category'));
			$('#status').val($(this).data('status'));

			$('#update-form').attr('action', "/supplier/" + id);
		});

	});
</script>
{{-- //calucalting amount --}}
<script src="assets/js/productCalculation.js"></script>

{{-- <script type="text/javascript">
		$('#update-form').on('submit', function(event) {
			event.preventDefault();
			var id = document.getElementById("id").value;
			var serial = document.getElementById("serial").innerHTML;

			$.ajax({
				type: 'PUT',
				url: "/course/" + id,
				data: {
					'_token': $('input[name=_token]').val(),
					'id': $("#id").val(),
					'name': $('#name').val(),
					'initial': $('#initial').val(),
					'credit': $('#credit').val(),
					'department_id': $('#department').val(),


				},
				dataType: 'JSON',

				success: function(data) {
					$('.value' + data.id).replaceWith(" " +
						"<tr class='value" + data.id + "'>" +
						"<td>" + serial + "</td>" +
						"<td>" + data.name + "</td>" +
						"<td>" + data.initial + "</td>" +
						"<td>" + data.department_id + "</td>" +
						"<td><a href='javascript:;' data-toggle='modal' data-target='#edit' class='btn btn-sm btn-clean btn-icon mr-2 edit' title='Edit details' data-id='" + data.id + "' data-name='" + data.name + "' data-phone='" +
						data.phone + "' data-email='" + data.email + "' data-initial='" + data.initial + "' data-dob='" + data.dob + "' data-department_id='" + data.address + "'>" +
						"<i class='far fa-edit'></i></a>" +
						"<a href='javascript:;' data-toggle='modal' data-target='#edit' class='btn btn-sm btn-clean btn-icon mr-2 edit' title='Edit details' data-id='" + data.phone + "' data-phone='" + data.phone +
						"' data-email='" + data.email + "' data-initial='" + data.initial + "' data-dob='" + data.dob + "' data-address='" + data.address + "'>" +
						"<i class='fas fa-trash'></i></a>" +
						"</td>" +
						"</tr>");


					Swal.fire({
						title: "Success!",
						text: "Course Updated Succesfully!",
						icon: "success",
						buttonsStyling: false,
						confirmButtonText: "Close!",
						customClass: {
							confirmButton: "btn btn-primary"
						}

					});
				}
			});
			document.getElementById('close').click();


		});
	</script> --}}
@endsection
{{-- <a href='javascript:;' data-toggle='modal' data-target='#edit' class='btn btn-sm btn-clean btn-icon mr-2 edit' title='Edit details' data-id='"+data.phone+"' data-name='"+data.phone+"'
		data-phone='"+data.phone+"' data-email='"+data.phone+"' data-initial='"+data.phone+"' data-dob='"+data.phone+"' data-address='"+data.phone+"'>
		<i class='far fa-edit'></i>
	</a> --}}
