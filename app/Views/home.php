<?= $this->include('layout/header') ?>
<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
							<!--begin::Page title-->
							<div class="page-title d-flex flex-column me-3">
								<!--begin::Title-->
								<h1 class="d-flex text-white fw-bolder my-1 fs-3"><?=$title?></h1>
								<!--end::Title-->
								<!--begin::Breadcrumb-->
								<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
									<!--begin::Item-->
									<li class="breadcrumb-item text-white opacity-75">
										<a href="<?php echo base_url()?>/public/" class="text-white text-hover-primary">Home</a>
									</li>
								</ul>
								<!--end::Breadcrumb-->
							</div>
							<!--end::Page title-->
							
						</div>
<!--begin::Container-->
<div id="kt_content_container" class=" container-xxl mt-5">
<div class="content flex-row-fluid mb-xl-8" id="kt_content">
	<div class="card card-xxl-stretch " >
		<div class="card-body overlow-hidden text-center">
		<h1 class="text-info">SELAMAT DATANG</h1>
			<div class="my-3">
				<img src="http://118.97.36.18:8008/sipy/sistem/img/unmus.png" height="300" alt="unmus-logo">
			</div>
			
			<h2 class="text-info"> Sistem Informasi Yudisium Universitas Musamus Merauke</h2>
		</div>
	</div>
	</div>
						<!--begin::Post-->
						<div class="content flex-row-fluid" id="kt_content">
							<!--begin::Row-->
							<div class="row g-5 g-xxl-8">
								<!--begin::Col-->
								<div class="col-xxl-6">
									<!--begin::Mixed Widget 5-->
									<div class="card card-xxl-stretch-100">
										<!--begin::Body-->
										<div class="card-body p-0 d-flex justify-content-between flex-column overflow-hidden">
											<!--begin::Hidden-->
											<div class="d-flex flex-stack flex-wrap flex-grow-1 px-9 pt-9 pb-3">
												<div class="me-2">
													<span class="fw-bolder text-gray-800 d-block fs-3">Wisuda</span>
													<span class="text-gray-400 fw-bold">Oct 8 - Oct 26 21</span>
												</div>
												<div class="fw-bolder fs-3 text-primary">$15,300</div>
											</div>
											<!--end::Hidden-->
											<!--begin::Chart-->
											<div class="mixed-widget-10-chart" data-kt-color="primary" style="height: 175px"></div>
											<!--end::Chart-->
										</div>
									</div>
									<!--end::Mixed Widget 5-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xxl-6">
									<!--begin::Row-->
									
											<!--begin::Tiles Widget 4-->
									<div class="card h-275px bgi-no-repeat bgi-size-cover card-xxl-stretch mb-5 mb-xl-8" style="background-color: #663259; background-position: calc(100% + 0.5rem) 100%;background-size: 100% auto;background-image:url('<?php echo base_url()?>/public/assets/media/svg/misc/taieri.svg')">
												<!--begin::Body-->
												<div class="card-body d-flex flex-column justify-content-between">
													<div class="me-2">
														<h2 class="fw-bolder text-white mb-3">Pendaftaran yudisium UNMUS</h2>
														<hr class="bg-white">
														<h3 class="text-white">Silahkan mendaftar disini untuk melakukan yudisum</h3>
													</div>
												<div class="m-0">
													<a href="#" class="btn btn-primary fw-bold" title="Click untuk daftar yudisium" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" data-bs-target="#kt_modal_create_app">Daftar yudisium</a>
												</div>
												</div>
											
									</div>
									<!--end::Row-->
									
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
							
							<!--begin::Row-->
							<div class="row gy-5 g-xl-8">
								<div class="col-xxl-6">
								<div class="card card-xxl-stretch mb-5 mb-xl-8" >
												<!--begin::Body-->
												<div class="card-body d-flex flex-column justify-content-between">
													<div class="me-2">
														<h3 class="fw-bolder text-primary mb-3">Persyaratan Mendapatkan SPK (Surat Penetapan Kelulusan)</h3>
														<hr class="bg-primary">
														<span>Mahasiswa yang ingin mengajukan SPK harus memenuhi persyaratan sebagai berikut :<br>
																		<ul>
													        <li>1. Masih tercatat sebagai mahasiswa aktif.</li>
													        <li>2. Telah menyelesaikan skripsi/ta/tesis/disertasi yang dibuktikan dengan lembar pengesahan skripsi/ta/tesis/disertasi.</li>
													        <li>3. Memenuhi jumlah sks sesuai buku pedoman akademik sebagai syarat penyelesaian kuliah.</li>
													       
													        <li>4. Transkrip yang sudah divalidasi oleh kaprodi.</li>
													        <li>5. Melengkapi berkas dokumen pendukung biodata.</li>
													        <ul>Seperti : 
													        <li>1. Pengsian Tempat Tanggal Lahir sesuai ijazah terakhir.</li>
													        <li>2. Upload bukti ijazah terakhir.</li>
													        <li>3. Upload KTP</li>
													        <li>4. Upload KK</li>
													        </ul>
													        <li>7. Unggah Foto Berwarna sesuai ketentuan</li>
													        <li>8. Jurnal hasil skripsi/ta/tesis/disertasi sudah diterbitkan dan dibuktikan dengan unggah berkas bukti unggah jurnal dari petugas ejurnal, mengisi link jurnal, dan upload file jurnal.</li>
													      </ul>
																	</span>
													</div>
												
												</div>
											
									</div>
									<!--end::Row-->
								</div>
								<div class="col-xxl-6">
								<div class="card card-xxl-stretch mb-5 mb-xl-8" >
												<!--begin::Body-->
												<div class="card-body d-flex flex-column justify-content-between">
													<div class="me-2">
														<h3 class="fw-bolder text-primary mb-3">Persyaratan Mendapatkan SPK (Surat Penetapan Kelulusan)</h3>
														<hr class="bg-primary">
														<span>Mahasiswa yang ingin mengajukan SPK harus memenuhi persyaratan sebagai berikut :<br>
																		<ul>
													        <li>1. Masih tercatat sebagai mahasiswa aktif.</li>
													        <li>2. Telah menyelesaikan skripsi/ta/tesis/disertasi yang dibuktikan dengan lembar pengesahan skripsi/ta/tesis/disertasi.</li>
													        <li>3. Memenuhi jumlah sks sesuai buku pedoman akademik sebagai syarat penyelesaian kuliah.</li>
													       
													        <li>4. Transkrip yang sudah divalidasi oleh kaprodi.</li>
													        <li>5. Melengkapi berkas dokumen pendukung biodata.</li>
													        <ul>Seperti : 
													        <li>1. Pengsian Tempat Tanggal Lahir sesuai ijazah terakhir.</li>
													        <li>2. Upload bukti ijazah terakhir.</li>
													        <li>3. Upload KTP</li>
													        <li>4. Upload KK</li>
													        </ul>
													        <li>7. Unggah Foto Berwarna sesuai ketentuan</li>
													        <li>8. Jurnal hasil skripsi/ta/tesis/disertasi sudah diterbitkan dan dibuktikan dengan unggah berkas bukti unggah jurnal dari petugas ejurnal, mengisi link jurnal, dan upload file jurnal.</li>
													      </ul>
																	</span>
													</div>
												
												</div>
											
									</div>
									<!--end::Row-->
								</div>
							
							</div>
							<!--end::Row-->
							
						</div>
						<!--end::Post-->
					</div>
					<!--end::Container-->
					
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		
		
 <?= $this->include('layout/footer') ?>