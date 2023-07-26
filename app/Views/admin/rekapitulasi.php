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
                    <h2 class="d-flex align-items-center text-dark font-weight-bold mr-5">Rekapitulasi</h2>

                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold my-2 p-0">
                        <li class="breadcrumb-item text-muted">
                            <a href="/dashboard" class="text-muted">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a href="" class="text-muted">Rekapitulasi</a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->																			
                </div>
            </div>
            <!--end::Page Heading-->
            
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center flex-wrap">
				<!--begin::Download Button-->
                <a href="#" class="btn btn-bg-white btn-icon-danger btn-hover-primary btn-icon mr-3 my-2 my-lg-0">
                    <i class="flaticon-download-1 icon-md"></i>
                </a>
                <!--end::Download Button-->
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--begin::Header-->
    
    <!--begin::Body-->
    <div class="d-flex flex-column-fluid">
        <div class="container">
            <!--begin::Layanan-->
            <div class="card card-custom gutter-b">
				<div class="card-header">
					<div class="card-title">
						<h3 class="card-label">Unit Pelayanan</h3>
					</div>
				</div>
                <div class="card-body">
					<!-- <div class="text-center py-8">
						<h2 class="font-weight-bolder">Indeks Kepuasan Masyarakat (IKM)</h2>
						<h5 class="mt-2">Unit Pelayanan Publik</h5>
						<p class="text-muted">Triwulan 1 Tahun 2023</p>
					</div> -->
                    <form action="">
                        <div class="form-group">
                            <label>Nama Layanan <span class="text-danger">*</span></label>
                            <select class="form-control selectpicker" data-size="7" data-live-search="true" title="Pilih">
                                <option value="IE">Instalasi Eksekutif</option>
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
                </div>
            </div>
            <!--end::Layanan-->

            <!--begin::Hasil Survei-->
            <div class="row mt-10">
                <div class="col-lg-6">
                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">Nilai Indeks Kepuasan Masyarakat (IKM)</h3>
                            </div>
                        </div>
                        <div class="card-body">
                           
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">Responden</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <!--begin::Chart-->
                            <!--end::Chart-->
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Hasil Survei-->
        </div>
    </div>
    <!--end::Body-->
</div>
<!--end::Content-->

<?= $this->endsection(); ?>