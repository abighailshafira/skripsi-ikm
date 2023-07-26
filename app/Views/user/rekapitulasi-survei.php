<?= $this->extend('user/template/index'); ?>
<?= $this->section('content'); ?>

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Header-->
	<div class="subheader py-2 py-lg-4 subheader-transparent" id="kt_subheader">
		<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<!--begin::Title-->
			<div class="d-flex align-items-center flex-wrap mr-2">
				<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Survei</h5>
				<div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
				<div class="d-flex align-items-center" id="kt_subheader_search">
					<span class="text-dark-50 font-weight-bold" id="kt_subheader_total">Rekapitulasi Survei</span>
				</div>
			</div>
			<!--end::Title-->

			<!--begin::Toolbar-->
			<div class="d-flex align-items-center flex-wrap">
				
			</div>
			<!--end::Toolbar-->
		</div>
	</div>
	<!--end::Header-->

	<!--begin::Body-->
	<div class="d-flex flex-column-fluid">
		<div class="container">
			<!--begin::Unit Pelayanan-->
			<div class="card card-custom mb-10 p-5">
                <div class="card-body">
                    <div class="text-center">
                        <h2 class="font-weight-bolder">Indeks Kepuasan Masyarakat (IKM)</h2>
                        <div class="text-dark-50 font-size-lg mt-2">Unit Pelayanan Publik</div>
                        <div class="text-dark-50 font-size-lg ">Tahun 2023</div>
                    </div>
                    <form action="">
						<div class="form-group">
							<label>Lembaga <span class="text-danger">*</span></label>
							<select class="form-control selectpicker" data-live-search="true" name="lembaga" id="lembaga"  title="Pilih lembaga">
								<?php foreach($lembaga as $row): ?>
								<option value="<?= $row['lembaga']; ?>"><?= $row['lembaga']; ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						
						<div class="form-group">
							<label>Layanan <span class="text-danger">*</span></label>
							<select class="form-control selectpicker" data-live-search="true" name="layanan" id="layanan"  title="Pilih layanan">
								<?php foreach($layanan as $row): ?>
								<option value="<?= $row['layanan']; ?>"><?= $row['layanan']; ?></option>
								<?php endforeach; ?>
							</select>
						</div>
                        <div class="form-group">
							<label>Periode</label>
							<div class="row">
								<div class="col">
									<div class="input-group date" id="kt_datetimepicker_7_1" data-target-input="nearest">
									<input type="text" class="form-control datetimepicker-input" placeholder="Start date" data-target="#kt_datetimepicker_7_1"/>
									<div class="input-group-append" data-target="#kt_datetimepicker_7_1" data-toggle="datetimepicker">
									<span class="input-group-text">
									<i class="ki ki-calendar"></i>
									</span>
									</div>
									</div>
								</div>
								<div class="col">
									<div class="input-group date" id="kt_datetimepicker_7_2" data-target-input="nearest">
									<input type="text" class="form-control datetimepicker-input" placeholder="End date" data-target="#kt_datetimepicker_7_2"/>
									<div class="input-group-append" data-target="#kt_datetimepicker_7_2" data-toggle="datetimepicker">
									<span class="input-group-text">
									<i class="ki ki-calendar"></i>
									</span>
									</div>
									</div>
								</div>
							</div>
                        </div>
                    </form>

					<div class="d-flex justify-content-end">
							<button type="submit" class="btn btn-primary font-weight-bold px-6 py-3" data-wizard-type="action-submit">Submit</button>
					</div>
                </div>
			</div>
			<!--begin::Unit Pelayanan-->
			
			<!-- <div class="row mt-10">
                <div class="col-lg-6">
                    <div class="card card-custom bg-radial-gradient-danger gutter-b card-stretch">
                      <div class="card-header border-0 py-5">
                        <h3 class="card-title font-weight-bolder text-white">Sales Progress</h3>
                        <div class="card-toolbar">
                          <div class="dropdown dropdown-inline">
                            <a href="#" class="btn btn-text-white btn-hover-white btn-sm btn-icon border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="ki ki-bold-more-hor"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                              <ul class="navi navi-hover">
                                <li class="navi-header pb-1">
                                  <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
                                </li>
                                <li class="navi-item">
                                  <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                      <i class="flaticon2-shopping-cart-1"></i>
                                    </span>
                                    <span class="navi-text">Order</span>
                                  </a>
                                </li>
                                <li class="navi-item">
                                  <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                      <i class="flaticon2-calendar-8"></i>
                                    </span>
                                    <span class="navi-text">Event</span>
                                  </a>
                                </li>
                                <li class="navi-item">
                                  <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                      <i class="flaticon2-graph-1"></i>
                                    </span>
                                    <span class="navi-text">Report</span>
                                  </a>
                                </li>
                                <li class="navi-item">
                                  <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                      <i class="flaticon2-rocket-1"></i>
                                    </span>
                                    <span class="navi-text">Post</span>
                                  </a>
                                </li>
                                <li class="navi-item">
                                  <a href="#" class="navi-link">
                                    <span class="navi-icon">
                                      <i class="flaticon2-writing"></i>
                                    </span>
                                    <span class="navi-text">File</span>
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body d-flex flex-column p-0">
                        <div id="kt_mixed_widget_4_chart" style="height: 200px"></div>
                        <div class="card-spacer bg-white card-rounded flex-grow-1">
                          <div class="row m-0">
                            <div class="col px-8 py-6 mr-8">
                              <div class="font-size-sm text-muted font-weight-bold">Average Sale</div>
                              <div class="font-size-h4 font-weight-bolder">$650</div>
                            </div>
                            <div class="col px-8 py-6">
                              <div class="font-size-sm text-muted font-weight-bold">Commission</div>
                              <div class="font-size-h4 font-weight-bolder">$233,600</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">Pesentase Responden berdasarkan Usia</h3>
                            </div>
                        </div>
                        <div class="card-body">
							<span class="svg-icon svg-icon-3x svg-icon-success">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24" />
										<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
										<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
									</g>
								</svg>
							</span>
							<div class="text-dark font-weight-bolder font-size-h2 mt-3">213</div>
							<a href="#" class="text-muted text-hover-primary font-weight-bold font-size-lg mt-1">Jumlah Responden</a>
							
							<div class="d-flex flex-column mt-10">
								<div class="d-flex align-items-center justify-content-between flex-grow-1">
									<div class="mr-2">
										<h3 class="font-weight-bolder">Jumlah Responden</h3>
										<div class="text-muted font-size-lg mt-2">Create CRM Report for month - April 2017</div>
									</div>
									<div class="font-weight-boldest font-size-h1 text-warning">$24,200</div>
								</div>
							</div>
						</div>
                    </div>
                </div>
            </div> -->

			<div class="card card-custom">
				<!--begin::Card Header-->
				<div class="card-header flex-wrap py-3">
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
						<h3 class="card-label">Unsur Penilaian</h3>
					</div>
				</div>
				<!--begin::Card Header-->
				
				<div class="card-body">
					<!--begin: Datatable-->
					<table class="table table-bordered" id="rekapitulasi_table">
						<thead>
							<tr>
								<th>No</th>
								<th>Unsur SKM</th>
								<th>Bobot Nilai</th>
								<th>NRR</th>
								<th>NRR Tetimbang</th>
								<th>NRR Tetimbang Konversi</th>
								<th>Nilai Mutu</th>
								<th>Kinerja</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1 ?>
                            <?php foreach ($respon as $row): 
								
							foreach ($kategori_nilai as $key=>$val) {
								if ($row['nilai_konversi'] >= $val['min'] && $row['nilai_konversi'] <= $val['max']) {
									$x = $val['mutu'];
									$y = $val['kinerja'];
								}  
							}
							?>
							<tr>
								<td><?= $i++; ?></td>
								<td><?= $row['unsur'] ?></td>
								<td><?= $row['jumlah_bobot'] ?></td>
								<td><?= number_format($row['nrr'],$desimal)?></td>
								<td><?= number_format($row['nrr_tetimbang'],$desimal)?></td>
								<td><?= number_format($row['nilai_konversi'],$desimal) ?></td>
								<td><?= $x; ?></td>
								<td><?= $y; ?></td>
							</tr>
							<?php endforeach; ?>
						</tbody>
						<tfoot>
							<tr>
								<th colspan="2">Total</th>
								<th><?= $total_bobot; ?></th>
								<th><?= number_format($total_nrr,$desimal); ?></th>
								<th><?= number_format($total_nrrtetimbang,$desimal); ?></th>
								<th><?= number_format($total_konversi,$desimal); ?></th>
								<th><?= $x; ?></th>
								<th><?= $y; ?></th>
							</tr>
						</tfoot>
					</table>
					<!--end: Datatable-->
				</div>
			</div>
		</div>
	</div>
	<!--end::Body-->
</div>
<!--end::Content-->

<?= $this->endsection(); ?>