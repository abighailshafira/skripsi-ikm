<?= $this->extend('user/template/index'); ?>
<?= $this->section('content'); ?>

<!--begin::Content-->
<div class="content pt-0 d-flex flex-column flex-column-fluid">
    <!--begin::Header-->
    <div class="d-flex flex-row-fluid bgi-size-cover bgi-position-top" style="background-image: url('assets/media/bg/bg-8.jpg')">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center pt-25 pb-35">
                <h2 class="font-weight-bolder text-light mb-0"><?= $heading; ?></h2>
            </div>
        </div>
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="container mt-n15 gutter-b">
        <div class="card card-custom mb-10">
            <div class="card-header">
                <div class="card-title">
                    <h5 class="card-label">Unit Pelayanan Publik</h5>
                </div>
            </div>

            <div class="card-body py-12">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <form>
                            <div class="form-group">
                                <label>Lembaga <span class="text-danger">*</span></label>
                                <select class="form-control selectpicker" data-live-search="true" name="lembaga" id="lembaga"  title="Pilih lembaga" disabled>
                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Jenis Layanan yang Diterima<span class="text-danger">*</span></label>
                                <select class="form-control selectpicker" data-live-search="true" name="layanan" id="layanan"  title="Pilih layanan">
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Waktu Pengisian <span class="text-danger">*</span></label>
                                <div class="input-group date" id="waktu" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" name="waktu" placeholder="Tanggal dan waktu" data-target="#waktu"/>
                                    <div class="input-group-append" data-target="#waktu" data-toggle="datetimepicker">
                                        <span class="input-group-text">
                                            <i class="ki ki-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>	
                            <!-- <div class="form-group">
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
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <h5 class="card-label">Kuesioner Survei</h5>
                </div>
            </div>

            <div class="card-body pb-12">
                <!--begin::Wizard 6-->
                <div class="wizard wizard-6 d-flex flex-column flex-lg-row flex-column-fluid justify-content-center" id="kt_wizard">
                    <!--begin::Container-->
                    <div class="wizard-content d-flex flex-column col-xl-10">
                        <!--begin::Wizard Nav-->
                        <div class="wizard-nav">
                            <!--begin::Wizard Steps-->
                            <div class="wizard-steps">
                                <div class="wizard-step" data-wizard-type="step" data-wizard-state="current"></div>
                                <div class="wizard-step" data-wizard-type="step"></div>
                                <div class="wizard-step" data-wizard-type="step"></div>
                            </div>
                            <!--end::Wizard Steps-->
                        </div>
                        <!--end::Wizard Nav-->

                        <!--begin::Wizard Body-->
                        <div class="row justify-content-center">
                            <div class="col-xl-12">
                                <!--begin::Form-->
                                <form class="form" action="/kuesioner-survei/create" method="post" id="form-survei">
                                    <?= csrf_field(); ?>
                                    <!--begin::Info-->
                                    <div class="form-group">
                                        <div class="alert alert-custom alert-default" role="alert">
                                            <div class="alert-icon">
                                                <span class="svg-icon svg-icon-warning svg-icon-2x">
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
                                            <div class="alert-text">
                                                Isilah survei kepuasan masyarakat berikut dengan data yang sesuai demi perbaikan pelayanan.
                                            </div>
                                            <div class="alert-close">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true"><i class="ki ki-close"></i></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Info-->

                                    <div class="row justify-content-center">
                                        <div class="col-lg-4">
                                            <ul class="navi navi-link-rounded navi-accent navi-hover navi-active nav flex-column mb-0" id="pills-tab" role="tablist">
                                                <li class="navi-header font-weight-bolder font-size-h5 py-5 text-primary">
                                                    Unsur Survei:
                                                </li>
                                                
                                                <?php 
                                                // print_r($indikator);
                                                $i = 0;
                                                foreach ($unsur as $row):
                                                    
                                                    $warna = ['secondary','success','info','primary','warning','danger'];	
                                                    $kd=array_rand($warna);
                                                    // print_r($unsur);
                                                ?>
                                                <!-- <a href="#" class="btn btn-<?= $warna[$kd]; ?> font-weight-bold mr-2"></a> -->
                                                <li class="navi-item mt-2">
                                                    <a class="navi-link" data-toggle="tab" href="/pertanyaan/id_unsur='<?= $id_unsur ?>' & jml_pertanyaan='<?= $indikator[$i]; ?>'">
                                                        <span class="navi-text text-dark font-weight-bold"><?= $row['unsur']; $i=$i+1?></span>
                                                    </a>
                                                </li>
                                                    <!-- begin::Tabs-->
                                                    <!-- <li class="nav-item p-0 m-0">
                                                        <a class="nav-link active rounded-right-0" id="pills-tab-1" data-toggle="pill" href="#review-singkat" aria-expanded="true" aria-controls="review-singkat">Singkat</a>
                                                    </li> -->
                                                    <!-- end::Tabs-->
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>

                                        <div class="col-lg-8">
                                            <!--begin: Wizard Step 1-->
                                            <div class="pb-3" data-wizard-type="step-content" data-wizard-state="current">
                                                <ul class="list-unstyled">
                                                    <li class="font-size-h5 font-weight-normal text-dark-75">Terima kasih atas kesediaannya untuk mengisi survey kepuasan masyarakat ini, khusunya terkait dengan layanan ULT UPI</li>
                                                    <ul>
                                                        <li class="font-size-h7 font-weight-normal text-dark-75">Survey ini terdiri dari 21 pertanyaan pilihan ganda, disertai isian berupa kepuasan atau keluhan</li>
                                                        <li class="font-size-h7 font-weight-normal text-dark-75">Untuk memulai, silahkan klik setiap unsur layanan yang ada</li>
                                                    </ul>
                                                </ul>
                                            </div>
                                            <!--end: Wizard Step 1-->
    
                                            <!-- Wizard Step 2 -->
                                            <div class="pb-3" data-wizard-type="step-content">
                                                <div class="tab-content">
                                                    <!--begin::Questions Navigation-->
                                                    <div class="btn-group btn-group-lg py-2" role="group" aria-label="Basic example">
                                                        <?php 
                                                            $jml_pertanyaan = count($pertanyaan);																
                                                            for($i=1;$i<=$jml_pertanyaan;$i++):
                                                        ?>
                                                        <a type="button" class="btn btn-secondary mr-2" href="/pertanyaan"><?= $i; ?></a>
                                                        <?php endfor; ?>
                                                    </div>
                                                    <!--end::Questions Navigation-->
    
                                                    <!--begin::Questions-->
                                                    <div class="accordion accordion-light accordion-svg-toggle" id="faq">
                                                        <?php foreach ($pertanyaan as $row): ?>
                                                        <div class="card">
                                                            <div class="card-header" id="faqHeading1">
                                                                <a class="card-title text-dark" data-toggle="collapse" href="#<?= $row['id_indikator'] ?>" aria-expanded="true" aria-controls="faq1" role="button">
                                                                    <span class="svg-icon svg-icon-primary">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                                            <path
                                                                                d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
                                                                                fill="#000000"
                                                                                fill-rule="nonzero"
                                                                            />
                                                                            <path
                                                                                d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
                                                                                fill="#000000"
                                                                                fill-rule="nonzero"
                                                                                opacity="0.3"
                                                                                transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)"
                                                                            />
                                                                            </g>
                                                                        </svg>
                                                                    </span>
                                                                    <div class="card-label text-dark pl-4"><?= $row['indikator']; ?></div>
                                                                </a>
                                                            </div>
    
                                                            <div id="<?= $row['id_indikator'] ?>" class="collapse show" aria-labelledby="faqHeading1" data-parent="#faq">
                                                                <div class="card-body text-dark-50 font-size-lg pl-12">
                                                                    <div class="form-group">
                                                                        <p class="text-dark"><?= $row['pertanyaan'] ?> <span class="text-danger">*</span></p>
                                                                        <div class="radio-list">
                                                                            <label class="radio">
                                                                                <input type="radio" name="jawaban"/>
                                                                                <span></span>
                                                                                Tidak Jelas
                                                                            </label>
                                                                            <label class="radio">
                                                                                <input type="radio" name="jawaban"/>
                                                                                <span></span>
                                                                                Kurang Jelas
                                                                            </label>
                                                                            <label class="radio">
                                                                                <input type="radio" name="jawaban"/>
                                                                                <span></span>
                                                                                Jelas
                                                                            </label>
                                                                            <label class="radio">
                                                                                <input type="radio" name="jawaban"/>
                                                                                <span></span>
                                                                                Sangat Jelas
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
    
                                                        <div class="form-group">
                                                            <label for="masukan" class="font-weight-bold">Kritik, saran, dan masukan</label>
                                                            <textarea class="form-control" id="masukan" name="masukan" rows="3"></textarea>
                                                        </div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                    <!--end::Questions-->
                                                </div>
                                            </div>
    
                                            <!-- Wizard Step 3 -->
                                            <div class="pb-3" data-wizard-type="step-content">
                                                <div class="d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                                                    <div>
                                                        <h4 class="font-weight-bolder text-dark">Review and Submit</h4>    
                                                    </div>

                                                    <!-- begin::Tabs-->
                                                    <ul class="nav nav-pills nav-success bg-light-success text-success rounded" id="pills-tab" role="tablist">
                                                        <li class="nav-item p-0 m-0">
                                                            <a class="nav-link active rounded-right-0" id="pills-tab-1" data-toggle="pill" href="#review-singkat" aria-expanded="true" aria-controls="review-singkat">Singkat</a>
                                                        </li>
                                                        <li class="nav-item p-0 m-0">
                                                            <a class="nav-link rounded-left-0" id="pills-tab-2" data-toggle="pill" href="#review-lengkap" aria-expanded="true" aria-controls="review-lengkap">Lengkap</a>
                                                        </li>
                                                    </ul>
                                                    <!-- end::Tabs-->
                                                </div>

                                                <!--begin::Tabs Content-->
                                                <div class="tab-content">
                                                    <div class="tab-pane show active row" id="review-singkat" role="tabpanel" aria-labelledby="pills-tab-1">
                                                        <!--begin::Section-->
                                                        <?php foreach($unsur as $row): ?>
                                                        <h6 class="font-weight-bold mt-3"><?= $row['unsur']; ?></h6>
                                                        <div class="text-dark-50 font-weight-bold line-height-lg mb-8">
                                                            <div class="btn-group btn-group-lg py-2" role="group" aria-label="Basic example">
                                                            <?php 
                                                                $jml_pertanyaan = count($pertanyaan);																
                                                                for($i=1;$i<=$jml_pertanyaan;$i++):
                                                            ?>
                                                            <a type="button" class="btn btn-secondary mr-2" href="/pertanyaan"><?= $i; ?></a>
                                                            <?php endfor; ?>
                                                            </div>
                                                        </div>
                                                        <div class="separator separator-dashed my-5"></div>
                                                        <?php endforeach ?>
                                                        <!--end::Section-->
                                                    </div>
                                                    <div class="tab-pane row" id="review-lengkap" role="tabpanel" aria-labelledby="pills-tab-2">
                                                        <!--begin::Section-->
                                                        <?php foreach($unsur as $row): ?>
                                                        <h6 class="font-weight-bold mt-3"><?= $row['unsur']; ?></h6>
                                                        <div class="text-dark-50 font-weight-bold line-height-lg mb-8">
                                                            <div class="btn-group-lg btn-group-vertical py-2" role="group" aria-label="Basic example">
                                                            <?php 
                                                                $jml_pertanyaan = count($pertanyaan);																
                                                                for($i=1;$i<=2;$i++):
                                                            ?>
                                                            <a type="button" class="btn btn-secondary mb-2" href="/pertanyaan"><?= $i; ?></a>
                                                            <?php endfor; ?>
                                                            </div>
                                                        </div>
                                                        <div class="separator separator-dashed my-5"></div>
                                                        <?php endforeach ?>
                                                        <!--end::Section-->
                                                    </div>
                                                </div>
                                                <!--end::Tabs Content-->
                                            </div>
                                        </div>
                                    </div>

                                    <!--begin: Wizard Actions-->
                                    <div class="d-flex justify-content-between mt-5 pt-10">
                                        <div class="mr-2">
                                            <button type="button" class="btn btn-light-primary font-weight-bold px-6 py-3" data-wizard-type="action-prev">Kembali</button>
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-success font-weight-bold px-6 py-3" data-wizard-type="action-submit">Submit</button>
                                            <button type="button" class="btn btn-primary font-weight-bold px-6 py-3" data-wizard-type="action-next">Lanjut</button>
                                        </div>
                                    </div>
                                    <!--end: Wizard Actions-->
                                </form>
                            </div>
                        </div>
                        <!--end::Wizard Body-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Body-->
</div>
<!--end::Content-->

<?= $this->endsection(); ?>