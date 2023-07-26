<?= $this->extend('user/template/index'); ?>
<?= $this->section('content'); ?>

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Header-->
	<div class="subheader py-2 py-lg-4 subheader-transparent" id="kt_subheader">
		<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<!--begin::Title-->
			<div class="d-flex align-items-center flex-wrap mr-2">
				<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Form Survei Kepuasan Masyarakat (SKM)</h5>
				<div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
				<div class="d-flex align-items-center" id="kt_subheader_search">
					<span class="text-dark-50 font-weight-bold" id="kt_subheader_total">Pengisian Survei</span>
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

	<!--begin::Form-->
	<div class="d-flex flex-column-fluid">
		<div class="container">
			<div class="card card-custom card-transparent">
				<div class="card-body p-0">
					<!--begin: Wizard-->
					<div class="wizard wizard-4" id="wizard-survei" data-wizard-state="step-first" data-wizard-clickable="true">
						<!--begin: Wizard Nav-->
						<div class="wizard-nav">
							<div class="wizard-steps">
								<!--begin::Wizard Step 1 Nav-->
								<div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
									<div class="wizard-wrapper">
										<div class="wizard-number">1</div>
										<div class="wizard-label">
										<div class="wizard-title">Lorem ipsum dolor</div>
											<div class="wizard-desc">Lorem ipsum dolor sit amet</div>
										</div>
									</div>
								</div>
								<!--end::Wizard Step 1 Nav-->

								<!--begin::Wizard Step 2 Nav-->
								<div class="wizard-step" data-wizard-type="step">
									<div class="wizard-wrapper">
										<div class="wizard-number">2</div>
										<div class="wizard-label">
											

											<div class="wizard-title">Unit Pelayanan Publik</div>
											<div class="wizard-desc">Pilih unit layanan</div>
										</div>
									</div>
								</div>
								<!--end::Wizard Step 2 Nav-->

								<!--begin::Wizard Step 3 Nav-->
								<div class="wizard-step" data-wizard-type="step">
									<div class="wizard-wrapper">
										<div class="wizard-number">3</div>
										<div class="wizard-label">
											

											<div class="wizard-title">Identitas Responden</div>
											<div class="wizard-desc">Isi data identitas Anda</div>
										</div>
									</div>
								</div>
								<!--end::Wizard Step 3 Nav-->

								<!--begin::Wizard Step 4 Nav-->
								<div class="wizard-step" data-wizard-type="step">
									<div class="wizard-wrapper">
										<div class="wizard-number">4</div>
										<div class="wizard-label">
											<div class="wizard-title">Kuesioner Survei</div>
											<div class="wizard-desc">Berikan penilaian Anda</div>
										</div>
									</div>
								</div>
								<!--end::Wizard Step 4 Nav-->
							</div>
						</div>
						<!--end: Wizard Nav-->
						
						<!--begin: Wizard Body-->
						<div class="card card-custom card-shadowless rounded-top-0">
							<div class="card-body p-0">
								<div class="row justify-content-center py-8 px-8 py-lg-15">
									<div class="col-xl-12 col-xxl-10">
										<!--begin: Wizard Form-->
										<form class="form mt-0 mt-lg-5" action="/survei/insert" method="post" id="form-survei">
											<?= csrf_field(); ?>

											<!--begin: Wizard Step 1-->
											<div class="pb-3" data-wizard-type="step-content" data-wizard-state="current">
												<h2 class="font-weight-bolder text-dark">Survei Kepuasan Masyarakat (SKM)</h2>
												<p class="text-muted pt-3 font-size-h5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis sunt ea consectetur molestias necessitatibus voluptates debitis eius accusantium facere aliquid tempora aspernatur ipsa nisi minima itaque deserunt ipsam incidunt illo, consequatur, nihil tenetur libero ex? Numquam aspernatur, deserunt minima in tenetur libero quae quos repellendus perferendis accusamus modi, aliquid, vitae ipsa ad consequuntur facilis? Odit dignissimos reprehenderit sint necessitatibus omnis cum dolores facere expedita qui, quis dolorum eveniet totam ipsa quam quia quaerat consectetur quo sequi veniam blanditiis? Aliquam, sit sint pariatur doloremque minus provident possimus. Perspiciatis expedita commodi culpa soluta eos velit beatae molestias possimus dolorum ad? Repellendus assumenda eligendi voluptates magnam eum atque rem, vero placeat repellat veniam! In fugit quia animi nulla eos, veritatis praesentium ipsum incidunt recusandae reiciendis enim hic nobis accusamus nostrum. Quo aspernatur sit distinctio nesciunt eius assumenda blanditiis porro adipisci maxime, sed error voluptates iusto deserunt? Ipsam temporibus, aliquam labore recusandae incidunt illo.</p>
											</div>
											<!--end: Wizard Step 1-->

											<!--begin: Wizard Step 2-->
											<div class="pb-3" data-wizard-type="step-content">
												<h4 class="font-weight-bolder text-dark">Unit Pelayanan Publik</h4>
												<p class="text-muted pb-3">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
												
												<!--begin::Info-->
												<div class="form-group">
													<div class="alert alert-custom alert-default" role="alert">
														<div class="alert-icon">
															<span class="svg-icon svg-icon-primary svg-icon-2x">
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
															Pilih unit layanan yang akan dilakukan survei. 
														</div>
														<div class="alert-close">
															<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																<span aria-hidden="true"><i class="ki ki-close"></i></span>
															</button>
														</div>
													</div>
												</div>
												<!--end::Info-->

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
											</div>
											<!--end: Wizard Step 2-->

											<!--begin: Wizard Step 3-->
											<div class="pb-3" data-wizard-type="step-content">
												<h4 class="font-weight-bolder text-dark">Identitas Responden</h4>
												<p class="text-muted pb-3">Lorem ipsum dolor sit amet consectetur adipisicing.</p>

												<!--begin::Info-->
												<div class="form-group">
													<div class="alert alert-custom alert-default" role="alert">
														<div class="alert-icon">
															<span class="svg-icon svg-icon-primary svg-icon-2x">
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
															Silahkan mengisi data berikut dengan benar. 
														</div>
														<div class="alert-close">
															<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																<span aria-hidden="true"><i class="ki ki-close"></i></span>
															</button>
														</div>
													</div>
												</div>
												<!--end::Info-->

												<div class="form-group">
													<label>Tanggal <span class="text-danger">*</span></label>
													<div class="input-group date" id="kt_datetimepicker_2" data-target-input="nearest">
														<input type="text" class="form-control datetimepicker-input" name="waktu" id="waktu" placeholder="Tanggal dan waktu" data-target="#kt_datetimepicker_2"/>
														<div class="input-group-append" data-target="#kt_datetimepicker_2" data-toggle="datetimepicker">
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
											<!--end: Wizard Step 3-->

											<!--begin: Wizard Step 4-->
											<div class="pb-3" data-wizard-type="step-content">
												<!--begin::Info-->
												<div class="form-group">
													<div class="alert alert-custom alert-default" role="alert">
														<div class="alert-icon">
															<span class="svg-icon svg-icon-primary svg-icon-2x">
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
													
												<div class="row">
													<!--begin::Navigation-->
													<div class="col-lg-4">
														<ul class="navi navi-link-rounded navi-accent navi-hover navi-active nav flex-column mb-0" role="tablist">
															<li class="navi-header font-weight-bolder font-size-h5 py-5 text-primary">
																Unsur Survei:
															</li>
															
															<?php foreach ($unsur as $row):
																$warna = ['secondary','success','info','primary','warning','danger'];	
																$kd=array_rand($warna);
															?>
															<!-- <a href="#" class="btn btn-<?= $warna[$kd]; ?> font-weight-bold mr-2"></a> -->
															<li class="navi-item mt-2">
																<a class="navi-link" data-toggle="tab" href="?id_unsur=<?= $id_unsur ?>">
																	<span class="navi-text text-dark font-weight-bold"><?= $row['unsur']; ?></span>
																</a>
															</li>
															<?php endforeach; ?>
														</ul>
													</div>
													<!--end::Navigation-->
													
													<!--begin::Content-->
													<div class="col-lg-8">
														<div class="tab-content">
															<!--begin::Questions Navigation-->
															<div class="btn-group py-2" role="group" aria-label="Basic example">
																<?php 
																	$jumlah_indikator = count($pertanyaan);																
																	for($i=1;$i<=$jumlah_indikator;$i++):
																?>
																<button type="button" class="btn btn-light mr-2"><?= $i; ?></button>
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

																<?php endforeach; ?>
															</div>
															<!--end::Questions-->

															<div class="form-group mt-5">
																<label for="masukan" class="font-weight-bold">Kritik, saran, dan masukan</label>
																<textarea class="form-control" id="masukan" name="masukan" rows="3"></textarea>
															</div>
														</div>
													</div>
													<!--end::Content-->
												</div>
											</div>
											<!--end: Wizard Step 4-->

											<!--begin: Wizard Actions-->
											<div class="d-flex justify-content-between border-top mt-5 pt-10">
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
										<!--end: Wizard Form-->
									</div>
								</div>
							</div>
						</div>
						<!--end: Wizard Bpdy-->
					</div>
					<!--end: Wizard-->
				</div>
			</div>
		</div>
		<!--end::Container-->
	</div>
	<!--end::Form-->
</div>
<!--end::Content-->

<?= $this->endsection(); ?>