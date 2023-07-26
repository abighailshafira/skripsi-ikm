<?= $this->extend('admin/template/index'); ?>
<?= $this->section('content'); ?>

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Header-->
	<div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
		<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<div class="d-flex align-items-center">
				<div class="d-flex align-items-baseline flex-wrap mr-5">
					<!--begin::Page Title-->
					<h2 class="d-flex align-items-center text-dark font-weight-bold mr-5">Profil</h2>
					<!--end::Page Title-->

					<!--begin::Breadcrumb-->
					<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold my-2 p-0">
						<li class="breadcrumb-item text-muted">
							<a>Profil Admin</a>
						</li>
					</ul>
					<!--end::Breadcrumb-->										
				</div>
			</div>
		</div>
	</div>
	<!--end::Header-->

	<!--begin::Body-->
	<div class="d-flex flex-column-fluid">
		<div class="container">
			<div class="d-flex flex-row">
				<!--begin::Aside-->
				<div class="flex-row-auto offcanvas-mobile w-325px" id="kt_profile_aside">
					<div class="card card-custom gutter-b">
						<div class="card-body">
							<div class="d-flex justify-content-between flex-column pt-4 h-100">
								<div class="pb-5">
									<!--begin::Header-->
									<div class="d-flex flex-column flex-center">
										<div class="symbol symbol-120 symbol-circle symbol-light overflow-hidden">
											<span class="symbol-label">
												<img src="assets/media/avatar/<?= user()->profile_picture; ?>" class="h-75 align-self-end" alt="profile picture" />
											</span>
										</div>
										<a class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h4 m-0 pt-7 pb-1"><?= user()->username; ?></a>
										<div class="text-muted font-size-md pb-2">Super Admin</div>
										<span class="label label-light-warning label-inline font-weight-bold label-lg">Aktif</span>
									</div>
									<!--end::Header-->

									<!--begin::Body-->
									<div class="pt-8">
										<div class="d-flex align-items-center justify-content-between mb-2">
											<span class="font-weight-bold mr-2">Username</span>
											<span class="text-muted text-hover-primary"><?= user()->username; ?></span>
										</div>
										<div class="d-flex align-items-center justify-content-between mb-2">
											<span class="font-weight-bold mr-2">Email</span>
											<span class="text-muted text-hover-primary"><?= user()->email; ?></span>
										</div>
									</div>														
									<!--end::Body-->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end::Aside-->

				<!--begin::Content-->
				<div class="flex-row-fluid ml-lg-8">
					<!--begin::Card-->
					<div class="card card-custom gutter-bs">
						<!--Begin::Card Header-->
						<div class="card-header card-header-tabs-line">
							<div class="card-toolbar">
								<div class="card-title align-items-start flex-column py-4">
									<h3 class="card-label font-weight-bolder text-dark">Profil Admin</h3>
									<span class="text-muted font-size-sm mt-2 font-weight-normal">Update your profile</span>
								</div>
							</div>
						</div>
						<!--end::Card Header-->

						<!--Begin::Card Body-->
						<div class="card-body px-0">
							<!--begin::Alert-->
							<div class="alert alert-custom alert-light fade show mx-10" role="alert">
								<div class="alert-icon">
									<span class="svg-icon svg-icon-2x svg-icon-primary">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Info-circle.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
												<rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
												<rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
								</div>
								<div class="alert-text">A simple primary alert—check it out!</div>
								<div class="alert-close">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">
											<i class="ki ki-close"></i>
										</span>
									</button>
								</div>
							</div>
							<!--end::Alert-->

							<div class="tab-content pt-5">													
								<div class="tab-pane active" id="kt_apps_contacts_view_tab_2" role="tabpanel">
									<form class="form" action="/profil/update/<?= user_id(); ?>" method="post" enctype="multipart/form-data">
									<?= csrf_field(); ?>
										<input type="hidden" id="gambarLama" name="gambarLama" value="<?= user()->profile_picture; ?>">
										<div class="row">
											<div class="col-lg-9 col-xl-6 offset-xl-3">
												<h3 class="font-size-h6 mb-5">Personal Info:</h3>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-xl-3 col-lg-3 text-right col-form-label">Foto</label>
											<div class="col-lg-9 col-xl-9">
												<div class="image-input image-input-outline image-input-circle" id="input-avatar" style="background-image: url(assets/media/avatar/default.svg)">
													<div class="image-input-wrapper" style="background-image: url(assets/media/avatar/<?= user()->profile_picture; ?>)"></div>
													
													<label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
														<i class="fa fa-pen icon-sm text-muted"></i>
														<input type="file" id="profile_picture" name="profile_picture" accept=".png, .jpg, .jpeg, .svg" />
														<input type="hidden" name="profile_picture_remove" />
													</label>
													<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
														<i class="ki ki-bold-close icon-xs text-muted"></i>
													</span>
													<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
														<i class="ki ki-bold-close icon-xs text-muted"></i>
													</span>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-xl-3 col-lg-3 text-right col-form-label">Lembaga</label>
											<div class="col-lg-9 col-xl-6">
												<input class="form-control form-control-lg" type="text" name="lembaga" id="lembaga" value="RSUD Al-Ihsan Provinsi Jawa Barat" disabled/>
												<span class="form-text text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
											</div>
										</div>
										
										<div class="row">
											<div class="col-lg-9 col-xl-6 offset-xl-3">
												<h3 class="font-size-h6 mb-5">Account:</h3>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-xl-3 col-lg-3 text-right col-form-label">Username <span class="text-danger">*</span></label>
											<div class="col-lg-9 col-xl-6">
												<input class="form-control form-control-lg" type="text" name="username" id="username" value="<?= user()->username; ?>"/>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-xl-3 col-lg-3 text-right col-form-label">Email <span class="text-danger">*</span></label>
											<div class="col-lg-9 col-xl-6">
												<div class="input-group input-group-lg">
													<div class="input-group-prepend">
														<span class="input-group-text">
															<i class="la la-at"></i>
														</span>
													</div>
													<input type="text" class="form-control form-control-lg" type="email" name="email" id="email" value="<?= user()->email; ?>" placeholder="Email"/>
												</div>
											</div>
										</div>
										
										<div class="separator separator-dashed my-10"></div>
										
										<div class="row">
											<div class="col-lg-9 col-xl-6 offset-xl-3">
												<h3 class="font-size-h6 mb-5">Security:</h3>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-xl-3 col-lg-3 text-right col-form-label">Reset Password</label>
											<div class="col-lg-9 col-xl-6">
												<a href="<?= base_url('/forgot'); ?>" type="button" class="btn btn-light-primary font-weight-bold btn-sm">Setup login verification</a>
												<span class="form-text text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
												<a href="#">Learn more</a>.</span>
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
								</div>							
							</div>
						</div>
						<!--end::Card Body-->
					</div>
					<!--end::Card-->
				</div>
				<!--end::Content-->
			</div>
		</div>
	</div>
	<!--end::Body-->
</div>
<!--end::Content-->

<?= $this->endsection(); ?>