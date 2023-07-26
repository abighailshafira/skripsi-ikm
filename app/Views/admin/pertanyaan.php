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
                            <a href="" class="text-muted">Daftar <?= $heading; ?></a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->																			
                </div>
            </div>
            <!--end::Page Heading-->

            <!--begin::Toolbar-->
            <!-- <div class="d-flex align-items-center flex-wrap">
                <a href="#" class="btn btn-white btn-hover-primary text-dark-50 font-weight-bold">Kembali</a>
            </div> -->
            <!--end::Toolbar-->
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
                            <label>Jenis Layanan <span class="text-danger">*</span></label>
                            <select class="form-control selectpicker" data-live-search="true" title="Pilih">
                                <option value="IE">Instalasi Eksekutif</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div> -->
            <!--begin::Info-->
            <div class="alert alert-custom alert-white alert-shadow gutter-b" role="alert">
                <div class="alert-icon">
                    <span class="svg-icon svg-icon-primary svg-icon-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                                <rect fill="#000000" x="11" y="10" width="2" height="7" rx="1"/>
                                <rect fill="#000000" x="11" y="7" width="2" height="2" rx="1"/>
                            </g>
                        </svg>
                    </span>
                </div>
                <div class="alert-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero ipsum modi amet optio ratione accusamus debitis incidunt ut molestiae, ipsam tenetur quis. Dolorem modi blanditiis officiis harum maxime praesentium cumque?</div>
            </div>
            <!--end::Info-->

            <div class="card card-custom">
                <!--begin::Card Header-->
                <div class="card-header flex-wrap">
                    <div class="card-title">
                        <span class="card-icon">
                            <span class="svg-icon svg-icon-md svg-icon-primary">                                                    
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>
                                    </g>
                                </svg>
                            </span>
                        </span>
                        <h3 class="card-label">Daftar <?= $heading; ?></h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Download Button-->
                        <a href="#" class="btn btn-light-primary btn-icon-danger btn-hover-primary btn-icon mr-3 my-2 my-lg-0" data-container="body" data-toggle="modal" data-target="#modalImport">
                            <i class="flaticon-download-1 icon-md"></i>
                        </a>
                        <!--end::Download Button-->

                        <!--begin::Button Tambah-->
                        <a class="btn btn-primary font-weight-bold" data-toggle="modal" data-target="#modalTambah"><i class="flaticon2-plus icon-nm mr-2"></i>Tambah</a>
                        <!--end::Button Tambah-->
                    </div>
                </div>
                <!--end::Card Header-->

                <!--begin::Card Body-->
                <div class="card-body">
                    <?php if(session()->getFlashdata('pesan')): ?>
                    <div class="alert alert-custom alert-notice alert-light-success fade show mb-5" role="alert">
                        <div class="alert-icon">
                            <span class="svg-icon svg-icon-success svg-icon-2x">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                                        <path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero"/>
                                    </g>
                                </svg>
                            </span>
                        </div>
                        <div class="alert-text"> <?= session()->getFlashdata('pesan'); ?></div>
                        <div class="alert-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="ki ki-close"></i></span>
                            </button>
                        </div>
                    </div>
                    <?php endif; ?>

                    <!--begin::Datatable-->
                    <table class="table table-bordered" id="pertanyaan_table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Unsur</th>
                                <th>Indikator</th>
                                <th colspan="2">Pertanyaan</th>
                                <!-- <th colspan="4">Pilihan Jawaban</th> -->
                                <!-- <th>Kode Item</th> -->
                                <th>Aksi</th>
                            </tr>
                            <!-- <tr>
                                <th>A (1)</th>
                                <th>B (2)</th>
                                <th>C (3)</th>
                                <th>D (4)</th>
                            </tr> -->
                        </thead>
                        
                        <tbody>
                            <?php $i = 1 ?>
                            <?php foreach ($pertanyaan as $row): ?>
                            <tr>
								<td><?= $i++; ?></td>
								<td><?= $row['unsur'] ?></td>
								<td><?= $row['indikator'] ?></td>
								<td><?= $row['id_pertanyaan'] ?></td>
								<td><?= $row['pertanyaan'] ?></td>
								<!-- <td>Tidak jelas</td>
								<td>Kurang jelas</td>
								<td>Jelas</td>
								<td>Sangat jelas</td> -->
								<!-- <td>P1</td> -->
								<td nowrap="nowrap">
                                    <span data-toggle="tooltip" title="Edit" data-placement="bottom">
                                        <button type="button" class="btn btn-sm btn-default btn-icon mr-2" data-toggle="modal" data-target="#modalEdit<?= $row['id_pertanyaan']; ?>">
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
                                        <a type="button" class="btn btn-sm btn-default btn-icon mr-2 button-hapus" href="/pertanyaan/delete/<?= $row['id_pertanyaan']; ?>">
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
        </div>
    </div>
    <!--end::Body-->
</div>
<!--end::Content-->

<!--begin::Modal Tambah-->
<div class="modal fade" id="modalTambah" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah <?= $heading; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <!--begin::Form-->
                <form action="/pertanyaan/create" method="post" id="form-pertanyaan">
                <?= csrf_field(); ?>
                    <div class="card-body py-0">
                        <div class="form-group">
                            <label>Unsur Survei <span class="text-danger">*</span></label>
                            <select class="form-control selectpicker" data-size="7" data-live-search="true" title="Pilih" id="unsur" name="unsur">
                                <?php foreach($unsur as $row): ?>
                                <option value="<?= $row['id_unsur']; ?>"><?= $row['unsur']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Indikator Unsur</label>
                            <select class="form-control selectpicker" data-size="7" data-live-search="true" title="Pilih" id="indikator" name="indikator">
                                <?php foreach($indikator as $i): ?>
                                <option value="<?= $i['id_indikator']; ?>"><?= $i['indikator']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <span class="form-text text-muted">Opsional</span>
                        </div>
                        <div class="separator separator-dashed my-10"></div>
                        <div class="form-group">
                            <label>Kode <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Kode" id="kode" name="kode" disabled/>
                        </div>
                        <!-- <div class="form-group">
                            <label>Indikator</label>
                            <input type="text" class="form-control" placeholder="Indikator" id="indikator" name="indikator"/>
                            <span class="form-text text-muted">Opsional</span>
                        </div> -->
                        <div class="form-group">
                            <label>Pertanyaan <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Pertanyaan" id="pertanyaan" name="pertanyaan"/>
                        </div>

                        <!-- <div class="separator separator-dashed my-5"></div>
                        <h5 class="text-center py-3 mb-3 text-primary">Pilihan Jawaban</h5>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                <label>Opsi A point 1 <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Tidak sesuai" id="pertanyaan" name="pertanyaan"/>
                                </div>
                                <div class="col">
                                <label>Opsi B point 2 <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Kurang sesuai" id="pertanyaan" name="pertanyaan"/>
                                </div>
                                <div class="col">
                                <label>Opsi C point 3 <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Sesuai" id="pertanyaan" name="pertanyaan"/>
                                </div>
                                <div class="col">
                                <label>Opsi D point 4 <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Sangat sesuai" id="pertanyaan" name="pertanyaan"/>
                                </div>
                            </div>
                        </div> -->
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary" id="tombol-submit">Simpan</button>
            </div>                                                        
                </form>
            <!--end::Form-->
        </div>
    </div>
</div>
<!--end::Modal Tambah-->

<!--begin::Modal Edit-->
<?php foreach ($pertanyaan as $row): ?>
<div class="modal fade" id="modalEdit<?= $row['id_pertanyaan']; ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit <?= $heading; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>

            <div class="modal-body">
                <form action="/pertanyaan/update/<?= $row['id_pertanyaan']; ?>" method="post">
                <?= csrf_field(); ?>
                    <div class="card-body py-0">
                        <div class="form-group">
                            <label>Unsur Survei <span class="text-danger">*</span></label>
                            <select class="form-control selectpicker" data-size="7" data-live-search="true" title="Pilih" id="unsur" name="unsur">
                                <?php foreach($unsur as $u): ?>
                                <option value="<?= $u['id_unsur']; ?>"><?= $u['unsur']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Indikator Unsur <span class="text-danger">*</span></label>
                            <select class="form-control selectpicker" data-size="7" data-live-search="true" title="Pilih" id="indikator" name="indikator">
                                <?php foreach($indikator as $i): ?>
                                <option value="<?= $i['id_indikator']; ?>"><?= $i['indikator']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <span class="form-text text-muted">Opsional</span>
                        </div>
                        <div class="separator separator-dashed my-10"></div>
                        <div class="form-group">
                            <label>Kode <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="kode" name="kode" value="<?= $row['id_pertanyaan']; ?>" disabled/>
                        </div>
                        <div class="form-group">
                            <label>Pertanyaan <span class="text-danger">*</span></span></label>
                            <input type="text" class="form-control" placeholder="Pertanyaan" id="pertanyaan" name="pertanyaan" value="<?= $row['pertanyaan']; ?>"/>
                        </div>
                    </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>                                                        
                </form>
        </div>
    </div>
</div>
<?php endforeach; ?>
<!--end::Modal Edit-->


<!--begin::Modal Import-->
<div class="modal fade" id="modalImport" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Import <?= $heading; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form action="/pertanyaan/create" method="post" id="form-pertanyaan">
            <div class="modal-body">
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label text-lg-right">Upload Files:</label>
                    <div class="col-lg-9">
                        <div class="dropzone dropzone-multi" id="kt_dropzone_5">
                            <div class="dropzone-panel mb-lg-0 mb-2">
                                <a class="dropzone-select btn btn-light-primary font-weight-bold btn-sm">Attach files</a>
                            </div>
                            <div class="dropzone-items">
                                <div class="dropzone-item" style="display:none">
                                    <div class="dropzone-file">
                                        <div class="dropzone-filename" title="some_image_file_name.jpg">
                                            <span data-dz-name="">some_image_file_name.jpg</span>
                                            <strong>(
                                            <span data-dz-size="">340kb</span>)</strong>
                                        </div>
                                        <div class="dropzone-error" data-dz-errormessage=""></div>
                                    </div>
                                    <div class="dropzone-progress">
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress=""></div>
                                        </div>
                                    </div>
                                    <div class="dropzone-toolbar">
                                        <span class="dropzone-delete" data-dz-remove="">
                                            <i class="flaticon2-cross"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="form-text text-muted">Max file size is 1MB and max number of files is 5.</span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary" id="tombol-submit">Simpan</button>
            </div>                                                        
            </form>
        </div>
    </div>
</div>
<!--end::Modal Import-->

<?= $this->endsection(); ?>