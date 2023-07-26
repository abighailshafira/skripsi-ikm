<?= $this->extend('admin/template/index'); ?>
<?= $this->section('content'); ?>
					
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
  <!-- begin::Header -->
	<div class="subheader py-3 py-lg-5 subheader-transparent" id="kt_subheader">
		<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
      <!--begin::Page Heading-->
			<div class="d-flex align-items-center mr-1">
				<div class="d-flex align-items-baseline flex-wrap mr-5">
					<h2 class="d-flex align-items-center text-dark font-weight-bold mr-5">Dashboard</h2>

          <!--begin::Breadcrumb-->
					<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold my-2 p-0">
						<li class="breadcrumb-item text-muted">
							<a href="#" class="text-muted">Home</a>
						</li>	
					</ul>
					<!--end::Breadcrumb-->	
				</div>
			</div>
      <!--end::Page Heading-->

      <!--begin::Toolbar-->
      <div class="d-flex align-items-center flex-wrap">
        <!--begin::Dropdown-->
        <div class="dropdown dropdown-inline my-2 my-lg-0" data-toggle="tooltip" title="Quick actions" data-placement="left">
          <a href="#" class="btn btn-bg-white btn-icon-warning btn-hover-primary btn-icon mr-3 my-2 my-lg-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="flaticon2-settings icon-md"></i>
          </a>

          <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
            <ul class="navi navi-hover">
              <li class="navi-header font-weight-bold py-4">
                <span class="font-size-lg">Choose Label:</span>
                <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
              </li>
            </ul>
          </div>
        </div>
        <!--end::Dropdown-->

        <!--begin::Export Button-->
        <!-- <a href="#" class="btn btn-bg-white btn-icon-danger btn-hover-primary btn-icon mr-3 my-2 my-lg-0">
          <i class="flaticon-download-1 icon-md"></i>
        </a> -->
        <!--end::Export Button-->

        <!--begin::Daterange-->
        <a href="#" class="btn btn-bg-white font-weight-bold mr-3 my-2 my-lg-0" id="kt_dashboard_daterangepicker" data-toggle="tooltip" title="Select dashboard daterange" data-placement="left">
          <span class="text-muted font-weight-bold mr-2" id="kt_dashboard_daterangepicker_title">Hari ini:</span>
          <span class="text-primary font-weight-bolder" id="kt_dashboard_daterangepicker_date">Aug 16</span>
        </a>
        <!--end::Daterange-->
      </div>
      <!--end::Toolbar-->
		</div>
	</div>
  <!-- end::Header -->

  <!-- begin::Body -->
	<div class="d-flex flex-column-fluid">
		<div class="container">
			<div class="row">
        <div class="col-xl-4">
          <div class="card card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-1.svg)">
            <div class="card-body">
              <span class="svg-icon svg-icon-3x svg-icon-primary">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24"/>
                    <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"/>
                    <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"/>
                  </g>
                </svg>
              </span>

              <?php foreach ($jumlah_layanan as $row): ?>
              <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block"><?= $row['jumlah_layanan'] ?></span>
              <?php endforeach; ?>
              <span class="font-weight-bold text-muted font-size-md">Jumlah Layanan</span>
            </div>
          </div>
        </div>

        <div class="col-xl-4">
          <div class="card card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-1.svg)">
            <div class="card-body">
              <span class="svg-icon svg-icon-3x svg-icon-primary">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24"/>
                    <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                    <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                  </g>
                </svg>
              </span>
              <?php foreach ($jumlah_responden as $row): ?>
              <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block"><?= $row['jumlah_responden']; ?></span>
              <?php endforeach; ?>
              <span class="font-weight-bold text-muted font-size-md">Jumlah Responden</span>
            </div>
          </div>
        </div>

        <div class="col-xl-4">
          <div class="card card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-1.svg)">
            <div class="card-body">
              <span class="svg-icon svg-icon-primary svg-icon-3x">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <polygon points="0 0 24 0 24 24 0 24"/>
                      <path d="M4.85714286,1 L11.7364114,1 C12.0910962,1 12.4343066,1.12568431 12.7051108,1.35473959 L17.4686994,5.3839416 C17.8056532,5.66894833 18,6.08787823 18,6.52920201 L18,19.0833333 C18,20.8738751 17.9795521,21 16.1428571,21 L4.85714286,21 C3.02044787,21 3,20.8738751 3,19.0833333 L3,2.91666667 C3,1.12612489 3.02044787,1 4.85714286,1 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                      <path d="M6.85714286,3 L14.7364114,3 C15.0910962,3 15.4343066,3.12568431 15.7051108,3.35473959 L20.4686994,7.3839416 C20.8056532,7.66894833 21,8.08787823 21,8.52920201 L21,21.0833333 C21,22.8738751 20.9795521,23 19.1428571,23 L6.85714286,23 C5.02044787,23 5,22.8738751 5,21.0833333 L5,4.91666667 C5,3.12612489 5.02044787,3 6.85714286,3 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z" fill="#000000" fill-rule="nonzero"/>
                  </g>
                </svg>
              </span>
              <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block">0</span>
              <span class="font-weight-bold text-muted font-size-md">Jumlah Kuesioner</span>
            </div>
          </div>
        </div>
			</div>

			<div class="row">
        <!-- begin::Stat -->
				<div class="col-xl-4">
          <div class="card card-custom gutter-b">
            <!--begin::Header-->
            <div class="card-header">
              <div class="card-title">
                <h2 class="card-label">Indeks Kepuasan Masyarakat (IKM)
                  <!-- <small>sub title</small> -->
                </h2>
              </div>

              <div class="card-toolbar">
                <div class="dropdown dropdown-inline">
                  <a href="#" class="btn btn-clean btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ki ki-bold-more-hor"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
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
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body">
              <!--begin::Chart-->
              <div id="kt_mixed_widget_18_chart" style="height: 250px"></div>
              <!--end::Chart-->

              <!--begin::Items-->
              <div class="mt-n25 zindex-0">
                <div class="d-flex align-items-center mb-8">
                  <div class="symbol symbol-circle symbol-40 symbol-light mr-3 flex-shrink-0">
                    <div class="symbol-label">
                      <span class="svg-icon svg-icon-lg svg-icon-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
                            <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
                            <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
                            <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
                          </g>
                        </svg>
                      </span>
                    </div>
                  </div>
                  <div>
                    <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Nilai IKM</a>
                    <div class="font-size-sm text-muted font-weight-bold mt-1"><?= number_format($total_konversi,$desimal); ?>
                    </div>
                  </div>
                </div>
                <div class="d-flex align-items-center mb-8">
                  <div class="symbol symbol-circle symbol-40 symbol-light mr-3 flex-shrink-0">
                    <div class="symbol-label">
                      <span class="svg-icon svg-icon-lg svg-icon-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
                            <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
                            <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
                            <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
                          </g>
                        </svg>
                      </span>
                    </div>
                  </div>
                  <div>
                    <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Nilai Mutu Pelayanan</a>
                    <div class="font-size-sm text-muted font-weight-bold mt-1">B</div>
                  </div>
                </div>
                <div class="d-flex align-items-center">
                  <div class="symbol symbol-circle symbol-40 symbol-light mr-3 flex-shrink-0">
                    <div class="symbol-label">
                      <span class="svg-icon svg-icon-lg svg-icon-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path
                              d="M4.00246329,12.2004927 L13,14 L13,4.06189375 C16.9463116,4.55399184 20,7.92038235 20,12 C20,16.418278 16.418278,20 12,20 C7.64874861,20 4.10886412,16.5261253 4.00246329,12.2004927 Z"
                              fill="#000000"
                              opacity="0.3"
                            />
                            <path d="M3.0603968,10.0120794 C3.54712466,6.05992157 6.91622084,3 11,3 L11,11.6 L3.0603968,10.0120794 Z" fill="#000000" />
                          </g>
                        </svg>
                      </span>
                    </div>
                  </div>
                  <div>
                    <a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Kinerja Unit Pelayanan</a>
                    <div class="font-size-sm text-muted font-weight-bold mt-1">Baik</div>
                  </div>
                </div>
              </div>
            </div>
            <!--end::Body-->
          </div>
        </div>
        <!-- end::Stat -->

        <!-- begin::Grafik -->
        <div class="col-xl-8">
          <div class="card card-custom gutter-b">
            <!--begin::Header-->
            <div class="card-header">
              <div class="card-title">
                <h2 class="card-label">Perbandingan Nilai Indeks Kepuasan Masyarakat (IKM)</h2>
              </div>

              <div class="card-toolbar">
                <div class="dropdown dropdown-inline">
                  <a href="#" class="btn btn-clean btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ki ki-bold-more-hor"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
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
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body">
              <div id="grafik_perbandingan_nilai" class="d-flex justify-content-center" ></div>
            </div>
            <!--end::Body-->
          </div>
        </div>
        <!-- end::Grafik -->
			</div>

      <div class="row">
        <div class="col-xl-12">
          <div class="card card-custom card-stretch gutter-b">
            <!--begin::Header-->
            <div class="card-header">
              <div class="card-title">
                <h2 class="card-label">Unsur Penilaian</h2>
              </div>
            </div>
            <!--end::Header-->
            
            <!--begin::Body-->
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
            <!--end::Body-->
          </div>
        </div>
      </div>


		</div>
	</div>
  <!-- begin::Body -->
</div>
<!--end::Content-->

<?= $this->endsection(); ?>