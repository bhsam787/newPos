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
						<h3 class="card-label font-weight-bolder text-dark">Product Search Page</h3>
						<span class="text-muted font-weight-bold font-size-sm mt-1">Search Product by uploading image</span>
					</div>
					<div class="card-toolbar">
						<form class="form" method="post" enctype="multipart/form-data" action="{{ route('compare.store') }} ">
							<button type="submit" class="btn btn-success mr-2">Upload Image</button>
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
										<h5 class="font-weight-bold mb-6">Upload Product Image</h5>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-xl-3 col-lg-3 col-form-label text-right">Product Image</label>
									<div class="col-lg-6 col-xl-6">
										<div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url(assets/media/users/blank.png)">
											<div class="image-input-wrapper profile-avatar-pic"></div>
											<label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
												<i class="fa fa-pen icon-sm text-muted"></i>
												<input type="file" name="image" accept=".png, .jpg, .jpeg">

												<input type="hidden" name="profile_avatar_remove"></label>
											<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
												<i class="ki ki-bold-close icon-xs text-muted"></i>
											</span>
											<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="" data-original-title="Remove avatar">
												<i class="ki ki-bold-close icon-xs text-muted"></i>
											</span>
										</div>
										<span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-xl-3 col-lg-3 col-form-label text-right">Product Text File</label>
									<div class="col-lg-3 col-xl-3">
										<input type="file" name="txt">
									</div>
								</div>
								{{-- <div class="form-group row">
												<label class="col-xl-3 col-lg-3 col-form-label text-right">Full Name</label>
												<div class="col-lg-9 col-xl-6">
													<input
														class="form-control form-control-lg form-control-solid"
														type="text" name="name"
														value="{{ $currentUser->name }}">
							</div>
						</div> --}}






						<!--end::Body-->
						</form>

						<!--end::Form-->
						@if (isset($textArr))
						<div class="row">
							<div class="col-md-2">
							</div>
							<div class="col-md-4 py-5">
								<div class=" align-items-start flex-column">
									<h3 class="card-label font-weight-bolder text-dark text-center">Scanned Text from file</h3>
								</div>
								<table class="table table-rounded table-striped border gy-7 gs-7">
									<thead>
										<tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
											<th>Serial No</th>
											<th>Name</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($textArr as $key => $value)

										<tr>
											<td>{{ ++$key }}</td>
											<td class='file-text'>{{ $value }}</td>
										</tr>


										@endforeach


									</tbody>
								</table>
							</div>
							<div class="col-md-4 py-5">
								<div class=" align-items-start flex-column">
									<h3 class="card-label font-weight-bolder text-dark text-center">Scanned Text from image</h3>
								</div>
								<table class="table table-rounded table-striped border gy-7 gs-7">
									<thead>
										<tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
											<th>Serial No</th>
											<th>Name</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($text as $key => $value)
										@if ($key!=0)
										<tr>
											<td>{{ $key++ }}</td>
											<td class='image-text'>{{ $value->info()['description'] }}</td>
										</tr>
										@endif


										@endforeach


									</tbody>
								</table>
							</div>


						</div>
						@endif


			</div>
		</div>


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

<script>
	let matchCalculation = function() {
		let fileText = document.querySelectorAll('.file-text');
		let imageText = document.querySelectorAll('.image-text');
		if (!fileText.length == imageText.length) {
			return;
		}
		let fileTextArr = Array.prototype.slice.call(fileText);
		let imageTextArr = Array.prototype.slice.call(imageText);

		fileTextArr = fileTextArr.map(function(el) {
			return el.textContent;
		});
		imageTextArr = imageTextArr.map(function(el) {
			return el.textContent;
		});

		let returnResult = new Array();
		for (let i = 0; i < imageTextArr.length; i++) {
			returnResult[i] = stringMatch(fileTextArr[i], imageTextArr[i]);
			let step1 = returnResult[i][0];
			let indiviualPercentage = returnResult[i][1];
			let splitFileText=imageTextArr[i].split('');
			let resultta=fileTextArr[i];
			for (let k = 0; k < step1.length; k++) {
				for(let j=0; j<splitFileText.length; j++){
					// let resultt = fileTextArr[i].search(step1[k].firstString);
					let hala=`<span style="color:red;">${step1[k].secondString}</span>`;
					let sam=splitFileText[step1[k].index]=hala;
					// console.log(splitFileText)



				}
				resultta = imageText[i].innerHTML=splitFileText.join("")+ " (" +indiviualPercentage+"% apprx)";
				console.log(resultta)





			}
			// console.log(step1)





		}

		// returnResultArr=[...returnResult];
		// let sam = returnResult[0][0];
		//
		// for (let i = 0; i < sam.length; i++) {
		// 	for (var x in sam[i]) {
		// 		console.log(x + " => " + sam[i][x]);
		// 	}
		// }
		// console.log(returnResult);


		function stringMatch(string1, string2) {
			const s1 = string1;
			const s2 = string2;

			let arr = s1.split('');

			const missingChars = [];

			for (let i = 0; i < arr.length; i++) {
				if (arr[i] !== s2[i]) {
					missingChars.push(Object.assign({}, {
						"firstString": arr[i],
						"secondString": s2[i],
						"index": i
					}));
					// arr.splice(i, 1);

					// i = i-1;
				}
			}
			let percentage = 100 - ((missingChars.length / s1.length) * 100);
			return [missingChars, percentage];
		}







		// fileTextArr = fileTextArr[0].textContent.split('');





		// console.log(fileTextArr);
		// console.log(imageTextArr);



	}

	matchCalculation();


	// 2tar length array same (done)
	// file text jeta ase oitar length ber korte hbe
	// file text first index shate image text er letter to letter match korte hbe
	// jodi match pay tahole oita hbe hocche green
	// jodi match na pay tahole r check korbe na + red hoye jabe
	// 100 percent er mooddeh koto khani match pailo oitar shotkora hishab per index er jonne.
</script>

@endsection
