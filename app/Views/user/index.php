<?= $this->extend('user/template/index'); ?>
<?= $this->section('content'); ?>

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container">
			<!--begin::Hero-->
			<div class="row mt-20">
				<div class="col-xl-12">										
					<div class="card card-custom card-stretch gutter-b">
						<div class="card-body d-flex p-0">
							<div class="flex-grow-1 p-20 pb-40 card-rounded flex-grow-1 bgi-no-repeat" style="background-position: calc(100% + 0.5rem) bottom; background-size: 50% auto; background-image: url(assets/media/svg/humans/custom-10.svg)">
								<h1 class="text-dark pb-5 font-weight-bolder">Survei Kepuasan Masyarakat (SKM)</h1>
								<p class="text-dark-50 font-size-h5">Sebagai wujud evaluasi dalam memberikan pelayanan yang
								<br />terbaik kepada masyarakat, pendapat Anda sangat berharga bagi kami. 
								<br />Mohon dapat mengisi survei kepuasan masyarakat berikut:
								</p>
								
								<!--begin::Button-->
								<div class="mt-5">
									<a href="/survei" class="btn btn-primary font-weight-bold mr-2">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"/>
													<path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
													<rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>
												</g>
											</svg>
										</span> Mulai Survei
									</a>
									<a href="/identitas-responden" class="btn btn-icon btn-light-primary font-weight-bold">
										<span class="svg-icon svg-icon-primary svg-icon-2x">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24"/>
													<rect fill="#000000" opacity="0.3" x="4" y="4" width="8" height="16"/>
													<path d="M6,18 L9,18 C9.66666667,18.1143819 10,18.4477153 10,19 C10,19.5522847 9.66666667,19.8856181 9,20 L4,20 L4,15 C4,14.3333333 4.33333333,14 5,14 C5.66666667,14 6,14.3333333 6,15 L6,18 Z M18,18 L18,15 C18.1143819,14.3333333 18.4477153,14 19,14 C19.5522847,14 19.8856181,14.3333333 20,15 L20,20 L15,20 C14.3333333,20 14,19.6666667 14,19 C14,18.3333333 14.3333333,18 15,18 L18,18 Z M18,6 L15,6 C14.3333333,5.88561808 14,5.55228475 14,5 C14,4.44771525 14.3333333,4.11438192 15,4 L20,4 L20,9 C20,9.66666667 19.6666667,10 19,10 C18.3333333,10 18,9.66666667 18,9 L18,6 Z M6,6 L6,9 C5.88561808,9.66666667 5.55228475,10 5,10 C4.44771525,10 4.11438192,9.66666667 4,9 L4,4 L9,4 C9.66666667,4 10,4.33333333 10,5 C10,5.66666667 9.66666667,6 9,6 L6,6 Z" fill="#000000" fill-rule="nonzero"/>
												</g>
											</svg>
										</span>	
									</a>
								</div>
								<!--begin::Button-->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--end::Hero-->

			<!-- <div class="row mt-10">
				<div class="col-xl-12">
					<div class="card card-custom bgi-no-repeat gutter-b" >
						<div class="card-body d-flex align-items-center p-0">
							<div class="p-20">
								<h3 class="text-black font-weight-bolder mb-3">Survei Kepuasan Masyarakat (SKM)</h3>
								<p class="text-black font-size-lg">Pelaksanaan Survei Kepuasan Masyarakat (SKM) dilaksanakan sesuai dengan ketentuan dalam Permen PAN RB Nomor 14 Tahun 2017 untuk memperoleh nilai Indeks Kepuasan Masyarakat (IKM) yang diperoleh dari persepsi masyarakat terhadap kualitas layanan yang diberikan oleh unit penyelenggara pelayanan publik.</p>
							</div>
						</div>
					</div>
				</div>
			</div> -->

			<!-- <div class="mt-10">
				<div class="text-center">
					<h2 class="font-weight-bolder text-dark mb-5">Aplikasi E-IKM</h2>
					<h4 class="font-weight-normal text-dark-50">Menyediakan layanan survei kepuasan masyarakat berbasis web bagi lembaga penyelenggara pelayanan publik</h4>
				</div>

				<div class="row mt-10">
					<div class="col-lg-6 col-xl-4">
							<div class="card card-custom wave wave-animate-slow wave-primary mb-8 mb-lg-0">
								<div class="card-body">
									<div class="d-flex align-items-center p-5">
										<div class="mr-6">
											<span class="svg-icon svg-icon-primary svg-icon-4x">
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M13,17.0484323 L13,18 L14,18 C15.1045695,18 16,18.8954305 16,20 L8,20 C8,18.8954305 8.8954305,18 10,18 L11,18 L11,17.0482312 C6.89844817,16.5925472 3.58685702,13.3691811 3.07555009,9.22038742 C3.00799634,8.67224972 3.3975866,8.17313318 3.94572429,8.10557943 C4.49386199,8.03802567 4.99297853,8.42761593 5.06053229,8.97575363 C5.4896663,12.4577884 8.46049164,15.1035129 12.0008191,15.1035129 C15.577644,15.1035129 18.5681939,12.4043008 18.9524872,8.87772126 C19.0123158,8.32868667 19.505897,7.93210686 20.0549316,7.99193546 C20.6039661,8.05176407 21.000546,8.54534521 20.9407173,9.09437981 C20.4824216,13.3000638 17.1471597,16.5885839 13,17.0484323 Z" fill="#000000" fill-rule="nonzero" />
													<path d="M12,14 C8.6862915,14 6,11.3137085 6,8 C6,4.6862915 8.6862915,2 12,2 C15.3137085,2 18,4.6862915 18,8 C18,11.3137085 15.3137085,14 12,14 Z M8.81595773,7.80077353 C8.79067542,7.43921955 8.47708263,7.16661749 8.11552864,7.19189981 C7.75397465,7.21718213 7.4813726,7.53077492 7.50665492,7.89232891 C7.62279197,9.55316612 8.39667037,10.8635466 9.79502238,11.7671393 C10.099435,11.9638458 10.5056723,11.8765328 10.7023788,11.5721203 C10.8990854,11.2677077 10.8117724,10.8614704 10.5073598,10.6647638 C9.4559885,9.98538454 8.90327706,9.04949813 8.81595773,7.80077353 Z" fill="#000000" opacity="0.3" />
												</g>
											</svg>
										</span>
									</div>
									<div class="d-flex flex-column">
										<a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">Pelaksanaan Survei</a>
										<div class="text-dark-75">Mempermudah pelaksanaan Survei Kepuasan Masyarakat (SKM) Admin dapat menambah dan mengurangi pertanyaan survei.</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-xl-4">
						<div class="card card-custom wave wave-animate wave-danger mb-8 mb-lg-0">
							<div class="card-body">
								<div class="d-flex align-items-center p-5">
									<div class="mr-6">
										<span class="svg-icon svg-icon-danger svg-icon-4x">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z" fill="#000000" />
													<path d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z" fill="#000000" opacity="0.3" />
												</g>
											</svg>
										</span>
									</div>
									<div class="d-flex flex-column">
										<a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">Pengumpulan Data</a>
										<div class="text-dark-75">memperoleh data hasil survei kepuasan masyarakat secara real time</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-xl-4">
						<div class="card card-custom wave wave-animate-fast wave-primary">
							<div class="card-body">
								<div class="d-flex align-items-center p-5">
									<div class="mr-6">
										<span class="svg-icon svg-icon-primary svg-icon-4x">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<polygon fill="#000000" opacity="0.3" points="5 3 19 3 23 8 1 8" />
													<polygon fill="#000000" points="23 8 12 20 1 8" />
												</g>
											</svg>
										</span>
									</div>
									<div class="d-flex flex-column">
										<a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">Pengolahan Data Otomatis</a>
										<div class="text-dark-75">Pengolahan data hasil survei secara otomatis untuk memperoleh hasil akhir pengukuran Indeks Kepuasan Masyarakat (IKM) dengan mudah, cepat dan tepat</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
		</div>
		<!--end::Container-->
	</div>
</div>
<!--end::Content-->

<?= $this->endsection(); ?>