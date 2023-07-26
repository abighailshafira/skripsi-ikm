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
                    <h2 class="d-flex align-items-center text-dark font-weight-bold mr-5">Kuesioner</h2>

                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold my-2 p-0">
                        <li class="breadcrumb-item text-muted">
                            <a href="/dashboard" class="text-muted">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a href="" class="text-muted">Daftar Kuesioner</a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->																			
                </div>
            </div>
            <!--end::Page Heading-->
        </div>
    </div>
    <!--end::Header-->
    
    <!--begin::Body-->
    <div class="d-flex flex-column-fluid">
        <div class="container">
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
                                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                                    <path d="M4.85714286,1 L11.7364114,1 C12.0910962,1 12.4343066,1.12568431 12.7051108,1.35473959 L17.4686994,5.3839416 C17.8056532,5.66894833 18,6.08787823 18,6.52920201 L18,19.0833333 C18,20.8738751 17.9795521,21 16.1428571,21 L4.85714286,21 C3.02044787,21 3,20.8738751 3,19.0833333 L3,2.91666667 C3,1.12612489 3.02044787,1 4.85714286,1 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                    <path d="M6.85714286,3 L14.7364114,3 C15.0910962,3 15.4343066,3.12568431 15.7051108,3.35473959 L20.4686994,7.3839416 C20.8056532,7.66894833 21,8.08787823 21,8.52920201 L21,21.0833333 C21,22.8738751 20.9795521,23 19.1428571,23 L6.85714286,23 C5.02044787,23 5,22.8738751 5,21.0833333 L5,4.91666667 C5,3.12612489 5.02044787,3 6.85714286,3 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z" fill="#000000" fill-rule="nonzero"/>
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
						</ul>
					</div>
				</div>
				<!--end::Header-->

				<!--Begin::Body-->
				<div class="card-body">
					<div class="tab-content pt-5">
						<!--begin::Profil Lembaga-->
						<div class="tab-pane active" id="kt_apps_contacts_view_tab_2" role="tabpanel">
                            <table class="table table-bordered" id="layanan_table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Layanan</th>
                                        <th>Periode</th>
                                        <th>Pertanyaan</th>
                                        <th>Publish</th>
                                        <th>Status</th>
                                        <!-- <th>Aksi</th> -->
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $i = 1 ?>
                                    <?php foreach ($layanan as $row): ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $row['layanan'] ?></td>
                                        <td></td>
                                        <td>
                                            <a href="/pertanyaan" class="btn btn-sm btn-success mr-2">
                                                <span class="svg-icon svg-icon-sm mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
                                                            <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>
                                                        </g>
                                                    </svg> 
                                                </span>Edit
                                            </a>
                                        </td>
                                        <td>
                                            <span class="switch switch-brand">
                                                <label>
                                                    <input type="checkbox" name="select"/>
                                                    <!-- checked="checked" -->
                                                    <span></span>
                                                </label>
                                            </span>
                                        </td>
                                        <td><span class="label label-light-primary label-pill label-inline">Tidak Aktif</span></td>
                                        <!-- <td nowrap="nowrap">
                                            <span data-toggle="tooltip" title="Edit" data-placement="bottom">
                                                <button type="button" class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="modal" data-target="#modalEdit<?= $row['id_layanan']; ?>">
                                                    <span class="svg-icon svg-icon-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"/>
                                                                <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
                                                                <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </button>
                                            </span>
                                            <span data-toggle="tooltip" title="Hapus" data-placement="bottom">
                                                <a type="button" class="btn btn-sm btn-clean btn-icon" href="/layanan/delete/<?= $row['id_layanan']; ?>" id="tombol-hapus">
                                                    <span class="svg-icon svg-icon-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"/>
                                                                <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>
                                                                <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </span>
                                        </td> -->
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
						</div>
						<!--end::Profil Lembaga-->

						<!--begin::Setting-->
						<div class="tab-pane" id="kt_apps_contacts_view_tab_4" role="tabpanel">
							<div class="container">
                                <h3 class="font-size-h6 mb-5">Setting Kuesioner:</h3>
								<table class="table">
									<thead>
										<tr>
											<th scope="col">No</th>
											<th scope="col">Login</th>
											<th scope="col">Data Responden</th>
											<th scope="col">Status</th>
										</tr>
									</thead>
									
									<tbody>
										<?php $no=1 ?>
                                        <?php foreach($setting as $row): ?>
											<tr>
                                                <td><?= $no++; ?></td>
												<td><?= $row['login']; ?></td>
												<td><?= $row['user']; ?></td>
												<td>
													<span class="switch">
														<a href="">
														<label>
															<input type="checkbox" id="status" name="status" checked="checked"/>
															<span></span>
														</label>
														</a>
													</span>
												</td>
											</tr>
                                        <?php endforeach; ?>
									</tbody>
								</table>
	
								<form class="form" style="visibility: hidden;">
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