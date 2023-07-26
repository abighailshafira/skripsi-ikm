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
    <!-- end::Header -->
    
    <!--begin::Body-->
    <div class="d-flex flex-column-fluid">
        <div class="container">
            <div class="card card-custom">
                <!--begin::Card Header-->
                <div class="card-header flex-wrap">
                    <div class="card-title">
                        <span class="card-icon">
                            <span class="svg-icon svg-icon-md svg-icon-primary">                                                    
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                                        <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
                                    </g>
                                </svg>
                            </span>
                        </span>
                        <h3 class="card-label">Bentuk Pilihan Jawaban</h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Button Tambah-->
                        <!-- <a class="btn btn-primary font-weight-bold" data-toggle="modal" data-target="#modalTambah"><i class="flaticon2-plus icon-nm mr-2"></i>Tambah</a> -->
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
                    <table class="table table-bordered" id="pilihan_jawaban_table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Bobot Nilai</th>
                                <th>Skala Kualitas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php $i = 1 ?>
                            <?php foreach ($pilihan_jawaban as $row): ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $row['bobot_nilai'] ?></td>
                                <td><?= $row['skala_kualitas'] ?></td>
                                <td nowrap="nowrap">
                                    <span data-toggle="tooltip" title="Edit" data-placement="bottom">
                                        <button type="button" class="btn btn-sm btn-default btn-icon mr-2" data-toggle="modal" data-target="#modalEdit<?= $row['kode']; ?>" >
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
                                    <!-- <span data-toggle="tooltip" title="Hapus" data-placement="bottom">
                                        <a type="button" class="btn btn-sm btn-default btn-icon mr-2" id="tombol-hapus">
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
                                    </span> -->
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

<!--begin::Modal Edit-->
<?php foreach ($pilihan_jawaban as $row): ?>
<div class="modal fade" id="modalEdit<?= $row['kode']; ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit <?= $heading; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>

            <div class="modal-body">
                <form action="/pilihan-jawaban/update/<?= $row['kode']; ?>" method="post">
                <?= csrf_field(); ?>
                    <div class="card-body py-0">
                        <div class="form-group">
                            <label>Kode</label>
                            <input type="text" class="form-control" id="kode" name="kode" value="<?= $row['kode']; ?>" disabled/>
                        </div>
                        <div class="form-group">
                            <label>Bobot Nilai</label>
                            <input type="text" class="form-control" id="bobot_nilai" name="bobot_nilai" value="<?= $row['bobot_nilai']; ?>" disabled/>
                        </div>
                        <div class="form-group">
                            <label>Skala Kualitas <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="skala_kualitas" name="skala_kualitas" value="<?= $row['skala_kualitas']; ?>"/>
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

<?= $this->endsection(); ?>