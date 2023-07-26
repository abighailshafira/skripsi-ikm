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
                    <h2 class="d-flex align-items-center text-dark font-weight-bold mr-5"><?= $heading; ?></h2>

					<!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold my-2 p-0">
						<li class="breadcrumb-item text-muted">
                            <a href="/dashboard" class="text-muted">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a href="" class="text-muted"><?= $heading; ?></a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->																			
                </div>
            </div>
			<!--end::Page Heading-->
        </div>
    </div>
	<!--begin::Header-->
    
    <!--begin::Body-->
    <div class="d-flex flex-column-fluid">
        <div class="container">
			<!-- <div class="card card-custom gutter-b">
                <div class="card-body">
                    <form action="">
                        <div class="form-group">
                            <label>Nama Layanan <span class="text-danger">*</span></label>
                            <select class="form-control selectpicker" data-live-search="true" title="Pilih">
                                <option value="IE">Instalasi Eksekutif</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div> -->

            <div class="card card-custom">
                <!--begin::Card Header-->
                <div class="card-header flex-wrap">
                    <div class="card-title">
                        <span class="card-icon">
                            <span class="svg-icon svg-icon-md svg-icon-primary">                                                    
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" fill="#000000"/>
                                        <path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" fill="#000000" opacity="0.3"/>
                                    </g>
                                </svg>
                            </span>
                        </span>
                        <h3 class="card-label">Respon</h3>
                    </div>
                    <div class="card-toolbar">
						<!--begin::Dropdown-->
						<div class="dropdown dropdown-inline mr-2">
							<button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="svg-icon svg-icon-md">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect x="0" y="0" width="24" height="24" />
									<path
									d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z"
									fill="#000000"
									opacity="0.3"
									/>
									<path
									d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z"
									fill="#000000"
									/>
								</g>
								</svg>
								<!--end::Svg Icon--> </span
							>Export
							</button>

							<!--begin::Dropdown Menu-->
							<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
							<!--begin::Navigation-->
							<ul class="navi flex-column navi-hover py-2">
								<li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">Choose an option:</li>
								<li class="navi-item">
								<a href="#" class="navi-link">
									<span class="navi-icon">
									<i class="la la-print"></i>
									</span>
									<span class="navi-text">Print</span>
								</a>
								</li>
								<li class="navi-item">
								<a href="#" class="navi-link">
									<span class="navi-icon">
									<i class="la la-file-excel-o"></i>
									</span>
									<span class="navi-text">Excel</span>
								</a>
								</li>
								<li class="navi-item">
								<a href="#" class="navi-link">
									<span class="navi-icon">
									<i class="la la-file-text-o"></i>
									</span>
									<span class="navi-text">CSV</span>
								</a>
								</li>
								<li class="navi-item">
								<a href="#" class="navi-link">
									<span class="navi-icon">
									<i class="la la-file-pdf-o"></i>
									</span>
									<span class="navi-text">PDF</span>
								</a>
								</li>
							</ul>
							<!--end::Navigation-->
							</div>
							<!--end::Dropdown Menu-->
						</div>
						<!--end::Dropdown-->
                    </div>
                </div>
                <!--end::Card Header-->

                <!--begin::Card Body-->
				<div class="card-body">
					<!--begin::Datatable-->
					<table class="table table-bordered" id="kt_datatable2">
						<thead>
							<tr>
								<th>No</th>
								<th>Waktu Submit</th>
								<th>Nama</th>
								<!-- <th>Email</th> -->
								<th>Jenis Kelamin</th>
								<th>Umur</th>
								<th>Pendidikan</th>
								<th>Pekerjaan</th>
								<th>P1</th>
								<th>P2</th>
								<th>P3</th>
								<th>P4</th>
								<th>P5</th>
								<th>P6</th>
								<th>P7</th>
								<th>P9</th>
								<th>P9</th>
								<th>Aksi</th>
							</tr>
						</thead>

						<tbody>
							<?php $i = 1; ?>
							<?php foreach($responden as $row): ?>
							<tr>
								<td><?= $i++; ?></td>
								<!-- <td nowrap="nowrap">2016-07-28 03:44:46</td> -->
								<td></td>
								<td nowrap="nowrap"><?= $row['nama']; ?></td>
								<!-- <td></td> -->
								<td><?= $row['jenis_kelamin']; ?></td>
								<td><?= $row['usia']; ?></td>
								<td><?= $row['pendidikan']; ?></td>
								<td><?= $row['pekerjaan']; ?></td>
								<td>Kurang sesuai</td>
								<td>Kurang sesuai</td>
								<td>Kurang sesuai</td>
								<td>Kurang sesuai</td>
								<td>Kurang sesuai</td>
								<td>Kurang sesuai</td>
								<td>Kurang sesuai</td>
								<td>Kurang sesuai</td>
								<td>Kurang sesuai</td>
								<td nowrap="nowrap">
									<span data-toggle="tooltip" title="Hapus" data-placement="bottom">
                                        <a type="button" class="btn btn-sm btn-default btn-icon mr-2" href="" id="tombol-hapus">
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
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
					<!--end::Datatable-->
				</div>
                <!--end::Card Body-->
            </div>
            <!--end::Card-->

			<div class="text-center mt-20">
				<h1>Data Responden</h1>
				<h5 class="text-muted">RSUD Al-Ihsan</h5>
				<p>periode 21 Januari 2023 - 30 Janurari 2023</p>
			</div>

            <!--begin::Card-->
            <div class="row mt-10">
                <!-- <div class="col-lg-6">
                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">Responden Berdasarkan Usia</h3>
                            </div>
                        </div>
                        <div class="card-body">
							<table class="table table-bordered" id="presentase_table">
								<thead>
									<tr>
										<th>No</th>
										<th>Jenis Kelamin</th>
										<th>Jumlah Responden</th>
										<th>Presentase</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Persyaratan</td>
										<td>0</td>
										<td>0</td>
									</tr>
									<tr>
										<td>2</td>
										<td>Sistem, Mekanisme, dan Prosedur</td>
										<td>0</td>
										<td>0</td>
									</tr>
									<tr>
										<td>3</td>
										<td>Waktu Penyelesaian</td>
										<td>0</td>
										<td>0</td>
									</tr>
									<tr>
										<td>4</td>
										<td>Biaya/Tarif</td>
										<td>0</td>
										<td>0</td>
									</tr>						
								</tbody>
								<tfoot>
									<tr>
										<th colspan="2">Total</th>
										<th>0</th>
										<th>0</th>
									</tr>
								</tfoot>
							</table>
                        </div>
                    </div>
                </div> -->
                
                <div class="col-lg-6">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">Pesentase Responden Berdasarkan Jenis Kelamin</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <!--begin::Chart-->
                            <div id="chart_12" class="d-flex justify-content-center"></div>
                            <!--end::Chart-->
                        </div>
                    </div>
                    <!--end::Card-->
                </div>

				<div class="col-lg-6">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">Pesentase Responden Berdasarkan Usia</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <!--begin::Chart-->
                            <div id="chart_12" class="d-flex justify-content-center"></div>
                            <!--end::Chart-->
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
            </div>
            <!--end::Card-->

			<!--begin::Card-->
			<div class="row mt-10">                
                <div class="col-lg-6">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">Pesentase Responden Berdasarkan Jenis Kelamin</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <!--begin::Chart-->
                            <div id="chart_12" class="d-flex justify-content-center"></div>
                            <!--end::Chart-->
                        </div>
                    </div>
                    <!--end::Card-->
                </div>

				<div class="col-lg-6">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">Pesentase Responden Berdasarkan Usia</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <!--begin::Chart-->
                            <div id="chart_12" class="d-flex justify-content-center"></div>
                            <!--end::Chart-->
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
            </div>
            <!--end::Card-->

			<!--begin::Card-->
			<div class="row mt-10">                
                <div class="col-lg-6">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">Pesentase Responden Berdasarkan Pendidikan</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <!--begin::Chart-->
                            <div id="chart_12" class="d-flex justify-content-center"></div>
                            <!--end::Chart-->
                        </div>
                    </div>
                    <!--end::Card-->
                </div>

				<div class="col-lg-6">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">Pesentase Responden Berdasarkan Pekerjaan</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <!--begin::Chart-->
                            <div id="chart_12" class="d-flex justify-content-center"></div>
                            <!--end::Chart-->
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
            </div>
            <!--end::Card-->

			<!--begin::Card-->
			<div class="row mt-10">                
                <div class="col-lg-6">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">Pesentase Responden Berdasarkan Jenis Pelayanan yang Diterima</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <!--begin::Chart-->
                            <div id="chart_12" class="d-flex justify-content-center"></div>
                            <!--end::Chart-->
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
            </div>
            <!--end::Card-->
        </div>
    </div>
    <!--end::Body-->
</div>
<!--end::Content-->

<?= $this->endsection(); ?>