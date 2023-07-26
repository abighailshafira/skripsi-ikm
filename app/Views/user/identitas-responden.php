<?= $this->extend('user/template/index'); ?>
<?= $this->section('content'); ?>

<!--begin::Content-->
<div class="content pt-0 d-flex flex-column flex-column-fluid">
    <!--begin::Header-->
    <div class="d-flex flex-row-fluid bgi-size-cover bgi-position-top" style="background-image: url('assets/media/bg/bg-8.jpg')">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center pt-25 pb-35">
                <h2 class="font-weight-bolder text-light mb-0"><?= $heading; ?></h2>
                <!-- <div class="d-flex">
                    <a href="#" class="h5 text-light font-weight-bold">Help Center</a>
                </div> -->
            </div>
        </div>
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="container mt-n15 gutter-b">
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <h5 class="card-label">Identitas Responden</h5>
                </div>
            </div>

            <form class="form" action="/identitas-responden/create" method="post" id="form-kuesioner">
                <?= csrf_field(); ?>
                <div class="card-body py-12">
                    <div class="row justify-content-center">
                        <div class="col-xl-8">
                            <div class="alert alert-custom alert-light-warning" role="alert">
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
                                <div class="alert-text">Silahkan isi data responden berikut dengan benar.</div>
                                <div class="alert-close">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"><i class="ki ki-close"></i></span>
                                    </button>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Tanggal <span class="text-danger">*</span></label>
                                <div class="input-group date" id="waktu" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" name="waktu" placeholder="Tanggal dan waktu" data-target="#waktu"/>
                                    <div class="input-group-append" data-target="#waktu" data-toggle="datetimepicker">
                                        <span class="input-group-text">
                                            <i class="ki ki-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>	

                            <div class="form-group">
                                <label>Nama <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" />
                                <span class="form-text text-muted">Nama atau inisial.</span>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label>Usia (tahun) <span class="text-danger">*</span></label>
                                        <select class="form-control selectpicker" title="Pilih usia" name="usia" id="usia">
                                            <option value="Di bawah 20">< 20</option>
                                            <option value="21-30">21-30</option>
                                            <option value="31-40">31-40</option>
                                            <option value="41-50">41-50</option>
                                            <option value="51-60">51-60</option>
                                            <option value="Di atas 61">> 61</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label>Jenis Kelamin <span class="text-danger">*</span></label>
                                        <select class="form-control selectpicker" title="Pilih jenis kelamin" name="jenis_kelamin" id="jenis_kelamin">
                                            <option value="P">Perempuan</option>
                                            <option value="L">Laki-laki</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Pendidikan <span class="text-danger">*</span></label>
                                <select class="form-control selectpicker" data-live-search="true" title="Pilih pendidikan" name="pendidikan" id="pendidikan">
                                    <option value="Tidak bersekolah">Tidak bersekolah</option>
                                    <option value="SD/sederajat">SD/sederajat</option>
                                    <option value="SLTP/SMP/sederajat">SLTP/SMP/sederajat</option>
                                    <option value="SLTA/SMA/sederajat">SLTA/SMA/sederajat</option>
                                    <option value="D1/D2/D3">D1/D2/D3</option>
                                    <option value="S1">S1</option>
                                    <option value="S2 - keatas">S2 - keatas</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Pekerjaan <span class="text-danger">*</span></label>
                                <select class="form-control selectpicker" data-live-search="true" title="Pilih pekerjaan" name="pekerjaan" id="pekerjaan">
                                    <option value="Tidak bekerja">Tidak bekerja</option>
                                    <option value="PNS/TNI/Polri">PNS/TNI/Polri</option>
                                    <option value="Pegawai Swasta">Pegawai Swasta</option>
                                    <option value="Wiraswasta">Wiraswasta</option>
                                    <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                                    <option value="Ibu rumah tangga">Ibu rumah tangga</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer text-right">
                    <div class="row">
                        <div class="col-xl-2"></div>
                        <div class="col-xl-8">
                            <button type="reset" class="btn btn btn-light font-weight-bold mr-2">Batal</button>
                            <button type="submit" class="btn btn-primary font-weight-bold button-submit">Kirim</button>
                        </div>
                        <div class="col-xl-2"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--end::Body-->
</div>
<!--end::Content-->

<?= $this->endsection(); ?>