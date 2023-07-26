<?= $this->extend('admin/template/index'); ?>
<?= $this->section('content'); ?>

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Header-->
	<div class="subheader py-3 py-lg-5 subheader-transparent" id="kt_subheader">
		<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<!--begin::Page Heading-->
			<div class="d-flex align-items-center mr-1">
				<div class="d-flex align-items-baseline flex-wrap mr-5">
					<h2 class="d-flex align-items-center text-dark font-weight-bold mr-5">Lembaga</h2>

					<!--begin::Breadcrumb-->
					<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold my-2 p-0">
						<li class="breadcrumb-item text-muted">
							<a href="/dashboard" class="text-muted">Dashboard</a>
						</li>	
						<li class="breadcrumb-item text-muted">
							<a href="" class="text-muted">Profil Lembaga</a>
						</li>
					</ul>
					<!--end::Breadcrumb-->																			
				</div>
			</div>
			<!--end::Page Heading-->

			<div class="card-toolbar">
				<div class="btn-group ml-2">
					<button type="button" class="btn btn-primary font-weight-bold">Save Changes</button>
					<button type="button" class="btn btn-primary font-weight-bold dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
					<div class="dropdown-menu dropdown-menu-sm p-0 m-0 dropdown-menu-right">
						<ul class="navi py-5">
							<li class="navi-item">
								<a href="#" class="navi-link">
									<span class="navi-icon">
										<i class="flaticon2-writing"></i>
									</span>
									<span class="navi-text">Save &amp; continue</span>
								</a>
							</li>
							<li class="navi-item">
								<a href="#" class="navi-link">
									<span class="navi-icon">
										<i class="flaticon2-medical-records"></i>
									</span>
									<span class="navi-text">Save &amp; add new</span>
								</a>
							</li>
							<li class="navi-item">
								<a href="#" class="navi-link">
									<span class="navi-icon">
										<i class="flaticon2-hourglass-1"></i>
									</span>
									<span class="navi-text">Save &amp; exit</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!--end::Header-->

	<!--begin::Body-->
	<div class="d-flex flex-column-fluid">
		<div class="container">
			<!--Begin::Profil-->
			<div class="card card-custom gutter-b">
				<div class="card-body">
					<div class="d-flex">
						<!--begin::Pic-->
						<div class="flex-shrink-0 mr-7">
							<div class="symbol symbol-50 symbol-lg-120 symbol-light-danger">
								<?php foreach($profil as $row): ?>
								<img src="assets/media/lembaga/<?= $row['logo']; ?>" alt="">
								<!-- <span class="font-size-h3 symbol-label font-weight-boldest">RSUD</span> -->
							</div>
						</div>
						<!--end::Pic-->

						<div class="flex-grow-1">
							<!--begin::Title-->
							<div class="d-flex align-items-center justify-content-between flex-wrap">
								<div class="mr-3">
									<!--begin::User-->
									<div class="d-flex align-items-center mr-3">
										<!--begin::Lembaga-->
										<a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3"><?= $row['lembaga']; ?></a>
										<!--end::Lembaga-->

										<!--begin::Bidang-->
										<span class="label label-light-success label-inline font-weight-bolder mr-1">Bidang <?= $row['bidang']; ?></span>
										<!--end::Bidang-->

										<!--begin::Dropdown-->
										<div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="right">
											<a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="fa fa-caret-down"></i>
											</a>
											<!-- <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
												<ul class="navi navi-hover">
													<li class="navi-header font-weight-bold py-4">
														<span class="font-size-lg">Choose Label:</span>
														<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
													</li>
												</ul>
											</div> -->
										</div>
										<!--end::Dropdown-->
									</div>
									<!--begin::User-->

									<!--begin::Contacts-->
									<div class="d-flex flex-wrap my-2">
										<a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
											<span class="svg-icon svg-icon-md svg-icon-primary mr-1">
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24"/>
														<path d="M13.0799676,14.7839934 L15.2839934,12.5799676 C15.8927139,11.9712471 16.0436229,11.0413042 15.6586342,10.2713269 L15.5337539,10.0215663 C15.1487653,9.25158901 15.2996742,8.3216461 15.9083948,7.71292558 L18.6411989,4.98012149 C18.836461,4.78485934 19.1530435,4.78485934 19.3483056,4.98012149 C19.3863063,5.01812215 19.4179321,5.06200062 19.4419658,5.11006808 L20.5459415,7.31801948 C21.3904962,9.0071287 21.0594452,11.0471565 19.7240871,12.3825146 L13.7252616,18.3813401 C12.2717221,19.8348796 10.1217008,20.3424308 8.17157288,19.6923882 L5.75709327,18.8875616 C5.49512161,18.8002377 5.35354162,18.5170777 5.4408655,18.2551061 C5.46541191,18.1814669 5.50676633,18.114554 5.56165376,18.0596666 L8.21292558,15.4083948 C8.8216461,14.7996742 9.75158901,14.6487653 10.5215663,15.0337539 L10.7713269,15.1586342 C11.5413042,15.5436229 12.4712471,15.3927139 13.0799676,14.7839934 Z" fill="#000000"/>
														<path d="M14.1480759,6.00715131 L13.9566988,7.99797396 C12.4781389,7.8558405 11.0097207,8.36895892 9.93933983,9.43933983 C8.8724631,10.5062166 8.35911588,11.9685602 8.49664195,13.4426352 L6.50528978,13.6284215 C6.31304559,11.5678496 7.03283934,9.51741319 8.52512627,8.02512627 C10.0223249,6.52792766 12.0812426,5.80846733 14.1480759,6.00715131 Z M14.4980938,2.02230302 L14.313049,4.01372424 C11.6618299,3.76737046 9.03000738,4.69181803 7.1109127,6.6109127 C5.19447112,8.52735429 4.26985715,11.1545872 4.51274152,13.802405 L2.52110319,13.985098 C2.22450978,10.7517681 3.35562581,7.53777247 5.69669914,5.19669914 C8.04101739,2.85238089 11.2606138,1.72147333 14.4980938,2.02230302 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
													</g>
												</svg>
											</span><?= $row['kontak']; ?>
										</a>

										<a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
											<span class="svg-icon svg-icon-md svg-icon-primary mr-1">
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path
													d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
													fill="#000000"
													/>
													<circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
												</g>
												</svg>
											</span><?= $row['email']; ?>
										</a>

										<a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
											<span class="svg-icon svg-icon-md svg-icon-primary mr-1">
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24"/>
														<path d="M9.82829464,16.6565893 C7.02541569,15.7427556 5,13.1079084 5,10 C5,6.13400675 8.13400675,3 12,3 C15.8659932,3 19,6.13400675 19,10 C19,13.1079084 16.9745843,15.7427556 14.1717054,16.6565893 L12,21 L9.82829464,16.6565893 Z M12,12 C13.1045695,12 14,11.1045695 14,10 C14,8.8954305 13.1045695,8 12,8 C10.8954305,8 10,8.8954305 10,10 C10,11.1045695 10.8954305,12 12,12 Z" fill="#000000"/>
													</g>
												</svg>
											</span><?= $row['alamat']; ?>
										</a>
									</div>
									<!--end::Contacts-->
									<?php endforeach; ?>
								</div>
							</div>
							<!--end::Title-->

							<!--begin::Content-->
							<div class="d-flex align-items-center flex-wrap justify-content-between">
								<!--begin::Description-->
								<div class="flex-grow-1 text-muted-50 py-2 py-lg-2 mr-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae voluptas, dolor neque pariatur fugiat possimus illo perspiciatis consectetur provident ad delectus ducimus, consequatur aspernatur voluptate quod doloremque esse. Illum, reprehenderit.</div>
								<!--end::Description-->

								<!-- <div class="d-flex mt-4 mt-sm-0">
									<span class="font-weight-bold mr-4">Progress</span>
										<div class="progress progress-xs mt-2 mb-2 flex-shrink-0 w-150px w-xl-250px">
											<div class="progress-bar bg-success" role="progressbar" style="width: 63%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									<span class="font-weight-bolder text-dark ml-4">78%</span>
								</div> -->
							</div>
							<!--end::Content-->
						</div>
					</div>
				</div>
			</div>
			<!--End::Profil-->

			<!--begin::Form-->
			<div class="card card-custom gutter-b">
				<!--Begin::Header-->
				<div class="card-header card-header-tabs-line">
					<div class="card-toolbar">
						<ul class="nav nav-tabs nav-tabs-space-lg nav-tabs-line nav-tabs-bold nav-tabs-line-3x" role="tablist">
							<li class="nav-item mr-3">
								<a class="nav-link active" data-toggle="tab" href="#kt_apps_contacts_view_tab_2">
									<span class="nav-icon mr-2">
										<span class="svg-icon mr-3">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"/>
													<path d="M13.5,21 L13.5,18 C13.5,17.4477153 13.0522847,17 12.5,17 L11.5,17 C10.9477153,17 10.5,17.4477153 10.5,18 L10.5,21 L5,21 L5,4 C5,2.8954305 5.8954305,2 7,2 L17,2 C18.1045695,2 19,2.8954305 19,4 L19,21 L13.5,21 Z M9,4 C8.44771525,4 8,4.44771525 8,5 L8,6 C8,6.55228475 8.44771525,7 9,7 L10,7 C10.5522847,7 11,6.55228475 11,6 L11,5 C11,4.44771525 10.5522847,4 10,4 L9,4 Z M14,4 C13.4477153,4 13,4.44771525 13,5 L13,6 C13,6.55228475 13.4477153,7 14,7 L15,7 C15.5522847,7 16,6.55228475 16,6 L16,5 C16,4.44771525 15.5522847,4 15,4 L14,4 Z M9,8 C8.44771525,8 8,8.44771525 8,9 L8,10 C8,10.5522847 8.44771525,11 9,11 L10,11 C10.5522847,11 11,10.5522847 11,10 L11,9 C11,8.44771525 10.5522847,8 10,8 L9,8 Z M9,12 C8.44771525,12 8,12.4477153 8,13 L8,14 C8,14.5522847 8.44771525,15 9,15 L10,15 C10.5522847,15 11,14.5522847 11,14 L11,13 C11,12.4477153 10.5522847,12 10,12 L9,12 Z M14,12 C13.4477153,12 13,12.4477153 13,13 L13,14 C13,14.5522847 13.4477153,15 14,15 L15,15 C15.5522847,15 16,14.5522847 16,14 L16,13 C16,12.4477153 15.5522847,12 15,12 L14,12 Z" fill="#000000"/>
													<rect fill="#FFFFFF" x="13" y="8" width="3" height="3" rx="1"/>
													<path d="M4,21 L20,21 C20.5522847,21 21,21.4477153 21,22 L21,22.4 C21,22.7313708 20.7313708,23 20.4,23 L3.6,23 C3.26862915,23 3,22.7313708 3,22.4 L3,22 C3,21.4477153 3.44771525,21 4,21 Z" fill="#000000" opacity="0.3"/>
												</g>
											</svg>
										</span>
									</span>
									<span class="nav-text font-weight-bold">Lembaga</span>
								</a>
							</li>

							<li class="nav-item mr-3">
								<a class="nav-link" data-toggle="tab" href="#kt_apps_contacts_view_tab_4">
									<span class="nav-icon mr-2">
										<span class="svg-icon mr-3">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"/>
													<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"/>
													<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"/>
												</g>
											</svg>
										</span>
									</span>
									<span class="nav-text font-weight-bold">Pengaturan</span>
								</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#kt_apps_contacts_view_tab_1">
								<span class="nav-icon mr-2">
									<span class="svg-icon mr-3">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24" />
											<path
												d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z"
												fill="#000000"
											/>
											<circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
											</g>
										</svg>
									</span>
								</span>
								<span class="nav-text font-weight-bold">Notes</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!--end::Header-->

				<!--Begin::Body-->
				<div class="card-body">
					<div class="tab-content pt-5">
						<!--begin::Profil Lembaga-->
						<div class="tab-pane active" id="kt_apps_contacts_view_tab_2" role="tabpanel">
							<!-- <form class="form" action="/lembaga/create" method="post" id="form-lembaga" enctype="multipart/form-data"> -->
								<form class="form" action="/lembaga/update/<?= $row['id_lembaga']; ?>" method="post" enctype="multipart/form-data">
									<?= csrf_field(); ?>
									<?php foreach($profil as $row): ?>
									<input type="hidden" id="logoLama" name="logoLama" value="<?= $row['logo']; ?>">
									<form class="form">
										<div class="row">
											<div class="col-lg-9 col-xl-6 offset-xl-3">
												<h3 class="font-size-h6 mb-5">Profil Lembaga:</h3>
											</div>
										</div>
										<!-- <div class="form-group row">
											<label class="col-xl-3 col-lg-3 text-right col-form-label">Bidang <span class="text-danger">*</span></label>
											<div class="col-lg-9 col-xl-6">
												<select class="form-control selectpicker" data-live-search="true" name="bidang" id="bidang" title="Pilih bidang" >
													<option value="<?= $row['id_bidang']; ?>"><?= $row['id_bidang']; ?></option>
												</select>
										</div>
									</div> -->
									<div class="form-group row">
										<label class="col-xl-3 col-lg-3 text-right col-form-label">Bidang <span class="text-danger">*</span></label>
										<div class="col-lg-9 col-xl-6">
											<input class="form-control" type="text" placeholder="Bidang" name="bidang" id="bidang" value="<?= $row['bidang'];?>"/>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-xl-3 col-lg-3 text-right col-form-label">Nama Lembaga <span class="text-danger">*</span></label>
										<div class="col-lg-9 col-xl-6">
											<input class="form-control" type="text" placeholder="Nama Lembaga" name="lembaga" id="lembaga" value="<?= $row['lembaga']; ?>"/>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-xl-3 col-lg-3 text-right col-form-label">Logo</label>
										<div class="col-lg-9 col-xl-9">
											<div class="image-input image-input-outline" id="input-logo" style="background-image: url(assets/media/svg/avatars/blank.png)">
												<div class="image-input-wrapper" style="background-image: url(assets/media/lembaga/<?= $row['logo']; ?>)"></div>
												<label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
													<i class="fa fa-pen icon-sm text-muted"></i>
													<input type="file" id="logo" name="logo" accept=".png, .jpg, .jpeg"/>
													<input type="hidden" name="logo_remove" />
												</label>
												
												<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
													<i class="ki ki-bold-close icon-xs text-muted"></i>
												</span>
												<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
													<i class="ki ki-bold-close icon-xs text-muted"></i>
												</span>
											</div>
											<span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
										</div>
									</div>
									<?php endforeach; ?>
									<div class="form-group row">
										<label class="col-xl-3 col-lg-3 text-right col-form-label">Alamat</label>
										<div class="col-lg-9 col-xl-6">
											<input class="form-control" type="text" placeholder="Alamat" name="alamat" id="alamat" value="<?= $row['alamat']; ?>"/>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-xl-3 col-lg-3 text-right col-form-label">Deskripsi</label>
										<div class="col-lg-9 col-xl-6">
											<textarea class="form-control" rows="3" id="deskripsi" name="deskripsi" ></textarea>
										</div>
									</div>

									<div class="separator separator-dashed my-10"></div>

									<div class="row">
										<div class="col-lg-9 col-xl-6 offset-xl-3">
											<h3 class="font-size-h6 mb-5">Kontak:</h3>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-xl-3 col-lg-3 text-right col-form-label">PIC</label>
										<div class="col-lg-9 col-xl-6">
											<input class="form-control" type="text" placeholder="Person in Charge" name="pic" id="pic" value="<?= $row['pic']; ?>"/>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-xl-3 col-lg-3 text-right col-form-label">Nomor Telepon</label>
										<div class="col-lg-9 col-xl-6">
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text">
														<i class="la la-phone"></i>
													</span>
												</div>
												<input type="tel" class="form-control" placeholder="Kontak" name="kontak" id="kontak" value="<?= $row['kontak']; ?>"/>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-xl-3 col-lg-3 text-right col-form-label">Email</label>
										<div class="col-lg-9 col-xl-6">
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text">
														<i class="la la-at"></i>
													</span>
												</div>
												<input type="email" class="form-control " placeholder="Email" name="email" id="email" value="<?= $row['email']; ?>"/>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-xl-3 col-lg-3 text-right col-form-label">URL Website</label>
										<div class="col-lg-9 col-xl-6">
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text">
														<i class="la la-at"></i>
													</span>
												</div>
												<input type="url" class="form-control" placeholder="URL Website" name="url" id="url"/>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="row">
											<div class="col-lg-9 ml-lg-auto">
												<button type="submit" class="btn btn-primary font-weight-bold mr-2">Simpan</button>
												<button type="reset" class="btn btn-light-primary font-weight-bold">Batal</button>
											</div>
										</div>
									</div>
								</form>
							</form>
						</div>
						<!--end::Profil Lembaga-->

						<!--begin::Setting-->
						<div class="tab-pane" id="kt_apps_contacts_view_tab_4" role="tabpanel">
							<div class="container">
								<form class="form">
									<div class="row">
										<label class="col-xl-3"></label>
										<div class="col-lg-9 col-xl-6">
											<h3 class="font-size-h6 mb-5">Setup Email Notification:</h3>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-xl-3 col-lg-3 text-right col-form-label">Email Notification</label>
										<div class="col-lg-9 col-xl-6">
											<span class="switch">
											<label>
												<input type="checkbox" checked="checked" name="email_notification_1" />
												<span></span>
											</label>
											</span>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-xl-3 col-lg-3 text-right col-form-label">Send Copy To Personal Email</label>
										<div class="col-lg-9 col-xl-6">
											<span class="switch">
											<label>
												<input type="checkbox" name="email_notification_2" />
												<span></span>
											</label>
											</span>
										</div>
									</div>
	
									<div class="separator separator-dashed my-10"></div>
	
									<div class="row">
										<div class="col-lg-9 col-xl-6 offset-xl-3">
											<h3 class="font-size-h6 mb-5">Activity Related Emails:</h3>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-xl-3 col-lg-3 text-right">When To Email</label>
										<div class="col-lg-9 col-xl-6">
											<div class="checkbox-list">
											<label class="checkbox">
												<input type="checkbox" />
												<span></span>You have new notifications.</label
											>
											<label class="checkbox">
												<input type="checkbox" />
												<span></span>You're sent a direct message</label
											>
											<label class="checkbox">
												<input type="checkbox" checked="checked" />
												<span></span>Someone adds you as a connection</label
											>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<!--end::Setting-->

						<!--begin::Catatan-->
						<div class="tab-pane" id="kt_apps_contacts_view_tab_1" role="tabpanel">
							<div class="container">
								<form class="form">
									<div class="form-group">
										<textarea class="form-control form-control-lg form-control-solid" id="exampleTextarea" rows="3" placeholder="Type notes"></textarea>
									</div>
									<div class="row">
										<div class="col">
										<a href="#" class="btn btn-light-primary font-weight-bold">Add notes</a>
										<a href="#" class="btn btn-clean font-weight-bold">Cancel</a>
										</div>
									</div>
								</form>

								<div class="separator separator-dashed my-10"></div>

								<div class="timeline timeline-3">
									<div class="timeline-items">
										<div class="timeline-item">
										<div class="timeline-media">
											<img alt="Pic" src="assets/media/users/300_25.jpg" />
										</div>
										<div class="timeline-content">
											<div class="d-flex align-items-center justify-content-between mb-3">
											<div class="mr-2">
												<a href="#" class="text-dark-75 text-hover-primary font-weight-bold">New order has been placed</a>
												<span class="text-muted ml-2">Today</span>
												<span class="label label-light-success font-weight-bolder label-inline ml-2">new</span>
											</div>
											<div class="dropdown ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
												<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="ki ki-more-hor font-size-lg text-primary"></i>
												</a>
												<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
												<!--begin::Navigation-->
												<ul class="navi navi-hover">
													<li class="navi-header font-weight-bold py-4">
													<span class="font-size-lg">Choose Label:</span>
													<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
													</li>
													<li class="navi-separator mb-3 opacity-70"></li>
													<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-text">
														<span class="label label-xl label-inline label-light-success">Customer</span>
														</span>
													</a>
													</li>
													<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-text">
														<span class="label label-xl label-inline label-light-danger">Partner</span>
														</span>
													</a>
													</li>
													<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-text">
														<span class="label label-xl label-inline label-light-warning">Suplier</span>
														</span>
													</a>
													</li>
													<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-text">
														<span class="label label-xl label-inline label-light-primary">Member</span>
														</span>
													</a>
													</li>
													<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-text">
														<span class="label label-xl label-inline label-light-dark">Staff</span>
														</span>
													</a>
													</li>
													<li class="navi-separator mt-3 opacity-70"></li>
													<li class="navi-footer py-4">
													<a class="btn btn-clean font-weight-bold btn-sm" href="#"> <i class="ki ki-plus icon-sm"></i>Add new</a>
													</li>
												</ul>
												<!--end::Navigation-->
												</div>
											</div>
											</div>
											<p class="p-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
										</div>
										</div>
										<div class="timeline-item">
										<div class="timeline-media">
											<i class="flaticon2-shield text-danger"></i>
										</div>
										<div class="timeline-content">
											<div class="d-flex align-items-center justify-content-between mb-3">
											<div class="mr-2">
												<a href="#" class="text-dark-75 text-hover-primary font-weight-bold">Member has sent a request.</a>
												<span class="text-muted ml-2">8:30PM 20 June</span>
												<span class="label label-light-danger font-weight-bolder label-inline ml-2">pending</span>
											</div>
											<div class="dropdown ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
												<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="ki ki-more-hor font-size-lg text-primary"></i>
												</a>
												<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
												<!--begin::Navigation-->
												<ul class="navi navi-hover">
													<li class="navi-header font-weight-bold py-4">
													<span class="font-size-lg">Choose Label:</span>
													<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
													</li>
													<li class="navi-separator mb-3 opacity-70"></li>
													<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-text">
														<span class="label label-xl label-inline label-light-success">Customer</span>
														</span>
													</a>
													</li>
													<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-text">
														<span class="label label-xl label-inline label-light-danger">Partner</span>
														</span>
													</a>
													</li>
													<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-text">
														<span class="label label-xl label-inline label-light-warning">Suplier</span>
														</span>
													</a>
													</li>
													<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-text">
														<span class="label label-xl label-inline label-light-primary">Member</span>
														</span>
													</a>
													</li>
													<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-text">
														<span class="label label-xl label-inline label-light-dark">Staff</span>
														</span>
													</a>
													</li>
													<li class="navi-separator mt-3 opacity-70"></li>
													<li class="navi-footer py-4">
													<a class="btn btn-clean font-weight-bold btn-sm" href="#"> <i class="ki ki-plus icon-sm"></i>Add new</a>
													</li>
												</ul>
												<!--end::Navigation-->
												</div>
											</div>
											</div>
											<p class="p-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
										</div>
										</div>
										<div class="timeline-item">
										<div class="timeline-media">
											<i class="flaticon2-layers text-warning"></i>
										</div>
										<div class="timeline-content">
											<div class="d-flex align-items-center justify-content-between mb-3">
											<div class="mr-2">
												<a href="#" class="text-dark-75 text-hover-primary font-weight-bold">System deployment has been completed.</a>
												<span class="text-muted ml-2">11:00AM 30 June</span>
												<span class="label label-light-warning font-weight-bolder label-inline ml-2">done</span>
											</div>
											<div class="dropdown ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
												<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="ki ki-more-hor font-size-lg text-primary"></i>
												</a>
												<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
												<!--begin::Navigation-->
												<ul class="navi navi-hover">
													<li class="navi-header font-weight-bold py-4">
													<span class="font-size-lg">Choose Label:</span>
													<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
													</li>
													<li class="navi-separator mb-3 opacity-70"></li>
													<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-text">
														<span class="label label-xl label-inline label-light-success">Customer</span>
														</span>
													</a>
													</li>
													<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-text">
														<span class="label label-xl label-inline label-light-danger">Partner</span>
														</span>
													</a>
													</li>
													<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-text">
														<span class="label label-xl label-inline label-light-warning">Suplier</span>
														</span>
													</a>
													</li>
													<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-text">
														<span class="label label-xl label-inline label-light-primary">Member</span>
														</span>
													</a>
													</li>
													<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-text">
														<span class="label label-xl label-inline label-light-dark">Staff</span>
														</span>
													</a>
													</li>
													<li class="navi-separator mt-3 opacity-70"></li>
													<li class="navi-footer py-4">
													<a class="btn btn-clean font-weight-bold btn-sm" href="#"> <i class="ki ki-plus icon-sm"></i>Add new</a>
													</li>
												</ul>
												<!--end::Navigation-->
												</div>
											</div>
											</div>
											<p class="p-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
										</div>
										</div>
										<div class="timeline-item">
										<div class="timeline-media">
											<i class="flaticon2-notification fl text-primary"></i>
										</div>
										<div class="timeline-content">
											<div class="d-flex align-items-center justify-content-between mb-3">
											<div class="mr-2">
												<a href="#" class="text-dark-75 text-hover-primary font-weight-bold">Database backup has been completed.</a>
												<span class="text-muted ml-2">2 months ago</span>
												<span class="label label-light-primary font-weight-bolder label-inline ml-2">delivered</span>
											</div>
											<div class="dropdown ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
												<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="ki ki-more-hor font-size-lg text-primary"></i>
												</a>
												<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
												<!--begin::Navigation-->
												<ul class="navi navi-hover">
													<li class="navi-header font-weight-bold py-4">
													<span class="font-size-lg">Choose Label:</span>
													<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
													</li>
													<li class="navi-separator mb-3 opacity-70"></li>
													<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-text">
														<span class="label label-xl label-inline label-light-success">Customer</span>
														</span>
													</a>
													</li>
													<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-text">
														<span class="label label-xl label-inline label-light-danger">Partner</span>
														</span>
													</a>
													</li>
													<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-text">
														<span class="label label-xl label-inline label-light-warning">Suplier</span>
														</span>
													</a>
													</li>
													<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-text">
														<span class="label label-xl label-inline label-light-primary">Member</span>
														</span>
													</a>
													</li>
													<li class="navi-item">
													<a href="#" class="navi-link">
														<span class="navi-text">
														<span class="label label-xl label-inline label-light-dark">Staff</span>
														</span>
													</a>
													</li>
													<li class="navi-separator mt-3 opacity-70"></li>
													<li class="navi-footer py-4">
													<a class="btn btn-clean font-weight-bold btn-sm" href="#"> <i class="ki ki-plus icon-sm"></i>Add new</a>
													</li>
												</ul>
												<!--end::Navigation-->
												</div>
											</div>
											</div>
											<p class="p-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
										</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--end::Catatan-->
					</div>
				</div>
				<!--end::Body-->
			</div>
			<!--end::Form-->
		</div>
	</div>
	<!--end::Body-->
</div>
<!--end::Content-->

<?= $this->endsection(); ?>