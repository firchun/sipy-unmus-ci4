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
													<a href="#" class="btn btn-primary fw-bold" title="Click untuk daftar yudisium" data-bs-toggle="modal" data-bs-placement="top" data-bs-trigger="hover" data-bs-target="#register">Daftar yudisium</a>
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
		<!--begin::Modal - New Target-->
		<div class="modal fade" id="register" tabindex="-1" aria-hidden="true">
								<!--begin::Modal dialog-->
								<div class="modal-dialog modal-dialog-centered mw-650px">
									<!--begin::Modal content-->
									<div class="modal-content rounded">
										<!--begin::Modal header-->
										<div class="modal-header pb-0 border-0 justify-content-end">
											<!--begin::Close-->
											<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
														<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Close-->
										</div>
										<!--begin::Modal header-->
										<!--begin::Modal body-->
										<div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
											<!--begin:Form-->
											<form id="register" class="form" action="#">
												<!--begin::Heading-->
												<div class="mb-13 text-center">
													<!--begin::Title-->
													<h1 class="mb-3">Form pendaftaran yudisium</h1>
													<!--end::Title-->
													<!--begin::Description-->
													<div class="text-muted fw-bold fs-5">Silahkan isi dan lengkapi form dengan teliti</div>
													<!--end::Description-->
												</div>
												<!--end::Heading-->
												<!--begin::Input group-->
												<div class="d-flex flex-column mb-8 fv-row">
													<!--begin::Label-->
													<label class="d-flex align-items-center fs-6 fw-bold mb-2">
														<span class="required">Nama Lengkap</span>
														<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
													</label>
													<!--end::Label-->
													<input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="target_title" />
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row g-9 mb-8">
													<!--begin::Col-->
													<div class="col-md-6 fv-row">
													<label class="d-flex align-items-center fs-6 fw-bold mb-2">
														<span class="required">NPM</span>
														<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
													</label>
													<!--end::Label-->
													<input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="target_title" />
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-md-6 fv-row">
														
													<label class="d-flex align-items-center fs-6 fw-bold mb-2">
														<span class="required">NIK</span>
														<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
													</label>
													<!--end::Label-->
													<input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="target_title" />
														<!--end::Input-->
													</div>
													<!--end::Col-->
												</div>
												<div class="row g-9 mb-8">
													<!--begin::Col-->
													<div class="col-md-6 fv-row">
													<label class="d-flex align-items-center fs-6 fw-bold mb-2">
														<span class="required">Username</span>
														<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
													</label>
													<!--end::Label-->
													<input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="target_title" />
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-md-6 fv-row">
														
													<label class="d-flex align-items-center fs-6 fw-bold mb-2">
														<span class="required">Password</span>
														<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
													</label>
													<!--end::Label-->
													<input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="target_title" />
														<!--end::Input-->
													</div>
													<!--end::Col-->
												</div>
												<div class="row g-9 mb-8">
													<!--begin::Col-->
													<div class="col-md-6 fv-row">
														<label class="required fs-6 fw-bold mb-2">Fakultas</label>
														<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" name="target_assign">
															<option value="">Select user...</option>
															<option value="1">Karina Clark</option>
															<option value="2">Robert Doe</option>
															<option value="3">Niel Owen</option>
															<option value="4">Olivia Wild</option>
															<option value="5">Sean Bean</option>
														</select>
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-md-6 fv-row">
														<label class="required fs-6 fw-bold mb-2">Jurusan</label>
														<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" name="target_assign">
															<option value="">Select user...</option>
															<option value="1">Karina Clark</option>
															<option value="2">Robert Doe</option>
															<option value="3">Niel Owen</option>
															<option value="4">Olivia Wild</option>
															<option value="5">Sean Bean</option>
														</select>
													</div>
													<!--end::Col-->
													
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="d-flex flex-column mb-8">
													<label class="fs-6 fw-bold mb-2">Alamat asal</label>
													<textarea class="form-control form-control-solid" rows="3" name="target_details" placeholder="Type Target Details"></textarea>
												</div>
												<div class="d-flex flex-column mb-8">
													<label class="fs-6 fw-bold mb-2">Alamat Sekarng</label>
													<textarea class="form-control form-control-solid" rows="3" name="target_details" placeholder="Type Target Details"></textarea>
												</div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="text-center">
													<button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">Cancel</button>
													<button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
														<span class="indicator-label">Submit</span>
														<span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
												</div>
												<!--end::Actions-->
											</form>
											<!--end:Form-->
										</div>
										<!--end::Modal body-->
									</div>
									<!--end::Modal content-->
								</div>
								<!--end::Modal dialog-->
							</div>
							<!--end::Modal - New Target-->
		
		
 <?= $this->include('layout/footer') ?>