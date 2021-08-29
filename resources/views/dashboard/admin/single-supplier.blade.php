@extends('dashboard.layout.master')

@section('section')
<style media="screen">
	.text-white span {
		font-size: 16px;
	}
</style>
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid">


	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container">
			<!-- begin::Card-->
			<div class="card card-custom overflow-hidden">
				<div class="card-body p-0">
					<!-- begin: Invoice-->
					<!-- begin: Invoice header-->
					<div class="row justify-content-center bgi-size-cover bgi-no-repeat py-8 px-8 py-md-27 px-md-0" style="background-image: url(https://cdn.wallpapersafari.com/81/67/EDGXFP.jpg);">
						<div class="col-md-9">
							<div class="d-flex justify-content-between pb-10 pb-md-10 flex-column flex-md-row">
								<h1 class="display-4 text-white font-weight-boldest mb-10 supplierName">{{ $supplier->supplier_name }}</h1>
								<span id="supplierID" sty>{{ $supplier->id }}</span>

								<div class="d-flex flex-column align-items-md-end px-0">
									<!--begin::Logo-->
									<div class="row">
										<div class="col-md-6">
											<a href="{{ route('product.index') }}" class="btn btn-primary font-weight-bolder mr-6 mb-4 product-id" style="width: 155px;">
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
												</span>Add Products</a>
										</div>
										<div class="col-md-6">
											<a href="{{ route('supplier.index')}}" class="btn btn-danger font-weight-bolder ml-2 mb-4">
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
										<span><?php echo $supplier->address==null?" ":  $supplier->address ;  ?></span>
										<span><?php echo $supplier->phone==null?" ":  $supplier->phone ;  ?></span>
									</span>
								</div>
							</div>
							<div class="border-bottom w-100 opacity-20"></div>
							<div class="d-flex justify-content-between text-white pt-6">
								<div class="d-flex flex-column flex-root">
									<span class="font-weight-bolder mb-2">Order Date</span>
									<span class="opacity-70"><?php
									if(!$supplier->order_date==null){
										$date=$supplier->order_date;
										$newDate = date("d-F-Y", strtotime($date));
										echo $newDate; }?>
									</span>
								</div>
								<div class="d-flex flex-column flex-root">
									<span class="font-weight-bolder mb-2">Receive Date</span>
									<span class="opacity-70"><?php
										if(!$supplier->receive_date==null){
										$date=$supplier->receive_date;
										$newDate = date("d-F-Y", strtotime($date));
												echo $newDate; }
										?>
									</span>
								</div>
								<div class="d-flex flex-column flex-root">
									<span class="font-weight-bolder mb-2">Arrival Time</span>
									<span class="opacity-70"><?php
										if(!$supplier->order_date==null && !$supplier->receive_date==null){
											$orderDate=$supplier->order_date;
											$receiveDate=$supplier->receive_date;



											$diff = abs(strtotime($receiveDate) - strtotime($orderDate));

											$years = floor($diff / (365*60*60*24));
											$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
											$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

												echo  $years==0 ? " " : " Years "; echo $months ." Months ". $days. " Days" ;
										}
										?>
									</span>
								</div>
								<div class="d-flex flex-column flex-root">
									<span class="font-weight-bolder mb-2">Product Category </span>
									<span class="opacity-70"><span id="productCategory" ><?php echo $supplier->category==null?0:  $supplier->category;  ?></span> Itemes</span>
								</div>

							</div>
							<div class="border-bottom w-100 opacity-20 pt-7"></div>
							<div class="d-flex justify-content-between text-white pt-6">
								<div class="d-flex flex-column flex-root">
									<span class="font-weight-bolder mb-2">Total Product</span>
									<span class="opacity-70"> products</span>
								</div>
								<div class="d-flex flex-column flex-root">
									<span class="font-weight-bolder mb-2">Product Sold</span>
									<span class="opacity-70"> products</span>
								</div>
								<div class="d-flex flex-column flex-root">
									<span class="font-weight-bolder mb-2">Product In Loan</span>
									<span class="opacity-70" style="color:red;"> products</span>
								</div>
								<div class="d-flex flex-column flex-root">
									<span class="font-weight-bolder mb-2">Product Remaining</span>
									<span class="opacity-70"> products</span>
								</div>
							</div>
							<div class="border-bottom w-100 opacity-20 pt-7"></div>
							<div class="d-flex justify-content-between text-white pt-6">
								<div class="d-flex flex-column flex-root">
									<span class="font-weight-bolder mb-2">Target Sale</span>
									<span class="opacity-70"> tk</span>
								</div>
								<div class="d-flex flex-column flex-root">
									<span class="font-weight-bolder mb-2">Total Sale</span>
									<span class="opacity-70"> tk</span>
								</div>
								<div class="d-flex flex-column flex-root">
									<span class="font-weight-bolder mb-2">Total Cost</span>
									<span class="opacity-70 total-cost-down"></span>
								</div>
								<div class="d-flex flex-column flex-root">
									<span class="font-weight-bolder mb-2 ">Total Due</span>
									<span class="opacity-70" style="color:red;"> Tk</span>
								</div>

							</div>
							<div class="border-bottom w-100 opacity-20 pt-7"></div>
							<div class="d-flex justify-content-between text-white pt-6">
								<div class="d-flex flex-column flex-root">
									<span class="font-weight-bolder mb-2">Total Profit</span>
									<span class="opacity-70"> tk</span>
								</div>
								<div class="d-flex flex-column flex-root">
									<span class="font-weight-bolder mb-2">Invested Indian Currency(INR)</span>
									<span class="opacity-70"><?php  echo $supplier->rupee==null?" ":  $supplier->rupee." Rupee " ;  ?></span>
								</div>
								<div class="d-flex flex-column flex-root">
									<span class="font-weight-bolder mb-2">Product Status</span>
									<span class=" pt-2">
										<?php
										if($supplier->status==0) echo "<button type='button' class=\"btn btn-danger\">Not Appeared</button>";
										elseif ($supplier->status==1) echo "<button type='button' class=\"btn btn-warning btn-sm\">Appeared</button>";
										elseif ($supplier->status==2) echo "<button type='button' class=\"btn btn-primary btn-sm\">Running</button>";
										elseif ($supplier->status==3) echo "<button type='button' class=\"btn btn-success btn-sm\">Finished</button>";
										?>
									</span>
								</div>
								<div class="d-flex flex-column flex-root">
									<span class="font-weight-bolder mb-2">Verdict</span>
									<span class="pt-2"><button class="btn btn-success btn-sm">In profit</button></span>
								</div>


							</div>
							<div class="border-bottom w-100 opacity-20 pt-7"></div>
						</div>
					</div>
					<!-- end: Invoice header-->
					<!-- begin: Invoice body-->
					<div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
						<div class="col-md-9">
							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th class="pl-0 font-weight-bold text-muted text-uppercase">Description</th>
											<th class="text-right font-weight-bold text-muted text-uppercase"></th>
											<th class="text-right font-weight-bold text-muted text-uppercase">Action</th>
											<th class="text-right pr-0 font-weight-bold text-muted text-uppercase">Amount</th>
										</tr>
									</thead>
									<tbody>
										<tr class="font-weight-boldest font-size-lg">
											<td class="pl-0 pt-7">My Expenses</td>
											<td class="text-right pt-7"></td>
											<td class="text-right pt-7"><button type="button" class="btn btn-success btn-sm">View all</button></td>
											<td class="text-danger pr-0 pt-7 text-right"><span id="expenses">0</span> TK</td>
										</tr>
										<tr class="font-weight-boldest border-bottom-0 font-size-lg">
											<td class="border-top-0 pl-0 py-4">Custom Cost</td>
											<td class="border-top-0 text-right py-4"></td>
											<td class="border-top-0 text-right py-4">
												<?php
												if (!$supplier->weight_cost==null && !$supplier->weight==null) {
												echo $supplier->weight. " kg &times; ". $supplier->weight_cost." TK ";
												}
												?>
												</td>
											<td class="text-danger border-top-0 pr-0 py-4 text-right">
												<?php
												if (!$supplier->weight_cost==null && !$supplier->weight==null) {
												$customCost= $supplier->weight * $supplier->weight_cost;
												echo "<span id='customCost'> ". $customCost. "</span> TK ";
												}
												else {
													echo "<span id='customCost'> 0</span> TK ";
												}
												?>
											</td>
										</tr>
										<tr class="font-weight-boldest border-bottom-0 font-size-lg">
											<td class="border-top-0 pl-0 py-4">Other Cost</td>
											<td class="border-top-0 text-right py-4"></td>
											<td class="border-top-0 text-right py-4"></td>
											<td class="text-danger border-top-0 pr-0 py-4 text-right"><span id="other_cost"><?php  echo $supplier->other_cost==null?0:  $supplier->other_cost;  ?></span> TK</td>
										</tr>
										<tr class="font-weight-boldest border-bottom-0 font-size-lg">
											<td class="border-top-0 pl-0 py-4">Invested Amount</td>
											<td class="border-top-0 text-right py-4"></td>
											<td class="border-top-0 text-right py-4"></td>
											<td class="text-danger border-top-0 pr-0 py-4 text-right"><span id="cost"><?php  echo $supplier->bdt==null?0:  $supplier->bdt;  ?></span>  TK</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- end: Invoice body-->
					<!-- begin: Invoice footer-->
					<div class="row justify-content-center bg-gray-100 py-8 px-8 py-md-10 px-md-0" >
						<div class="col-md-9">
							<div class="d-flex justify-content-between flex-column flex-md-row font-size-lg">
								<div class="d-flex flex-column mb-10 mb-md-0" style="visibility: hidden;">
									<div class="font-weight-bolder font-size-lg mb-3">Estimated Cost</div>
									<div class="d-flex justify-content-between mb-3">
										<span class="mr-15 font-weight-bold">Total Category :</span>
										<span class="text-right productCategory"></span>
									</div>
									<div class="d-flex justify-content-between mb-3">
										<span class="mr-15 font-weight-bold">Total Cost :</span>
										<span class="text-right total-cost"></span>
									</div>
									<div class="d-flex justify-content-between">
										<span class="mr-15 font-weight-bold">Per Category Cost :</span>
										<span class="text-right cat-cost-calucaltion"></span>
									</div>
								</div>
								<div class="d-flex flex-column text-md-right">
									<span class="font-size-lg font-weight-bolder mb-1">TOTAL AMOUNT</span>
									<span class="font-size-h2 font-weight-boldest text-danger mb-1"><span id="totalAmount"></span> TK</span>
									<span>Taxes Included</span>
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
	<script type="text/javascript">
		let expenses=Number(document.querySelector('#expenses').textContent);
		let other_cost=Number(document.querySelector('#other_cost').textContent);
		let customCost=Number(document.querySelector('#customCost').textContent);
		let cost=Number(document.querySelector('#cost').textContent);
		let supplierID=Number(document.querySelector('#supplierID').textContent);
		let category=Number(document.querySelector('#productCategory').textContent);
		let supplierName=document.querySelector('.supplierName').textContent;

		let totalAmount=expenses+other_cost+customCost+cost;
		document.querySelector('#totalAmount').textContent=totalAmount;
		document.querySelector('.total-cost').textContent=totalAmount+" TK ";
		document.querySelector('.total-cost-down').textContent=totalAmount+" TK ";
		document.querySelector('.productCategory').textContent=category+" Items ";

		let perCategoryCost=Math.trunc(totalAmount/category);
		document.querySelector('.cat-cost-calucaltion').textContent=category===0? `(${totalAmount}/${category})= ${totalAmount / 1} TK`:`(${totalAmount}/${category})= ${perCategoryCost} TK`;

		document.querySelector('.product-id').href="/product?supplierName=" + supplierName+"&totalAmount="+totalAmount+"&category="+category+"&supplierID="+supplierID;

	// 	$('.product-id').on('click', function(event) {
	// 	$.ajax({
	// 		url: "/product/",
	// 		type: 'GET',
	// 		// method: 'GET',
	// 		data: {
	// 			'supplierName': supplierName,
	// 			'totalAmount': totalAmount,
	// 			'category': category,
	// 			'supplierID': ,
	//
	//
	//
	// 		},
	// 		dataType: 'JSON',
	//
	// 		success: function(data) {
	// 		}
	// 	});
	//
	// });



	</script>

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
