<?php $this->load->view('template/_partials/header'); ?>

<body>
	<div id="app">
		<div class="shadow-header"></div>

		<?php $this->load->view('template/_partials/navbar'); ?>

		<?php $this->load->view('template/_partials/sidebar'); ?>

		<div class="main-content">
			<div class="title">
				Alternatif
			</div>
			<div class="content-wrapper">
				<div class="row same-height">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h4>Form tambah data</h4>
							</div>
							<div class="card-body">
								<form method="POST" action="<?php echo site_url('alternatif/add') ?>">
									<div class="row">
										<div class="col-md-12">
											<div class="mb-3">
												<label for="basicInput" class="form-label">Kode</label>
												<input class="form-control <?php echo form_error('kode') ? 'is-invalid' : '' ?>" type="text" placeholder="masukkan kode" name="kode">
												<div class="invalid-feedback">
													<?php echo form_error('kode') ?>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="mb-3">
												<label for="basicInput" class="form-label">Alternatif</label>
												<input class="form-control <?php echo form_error('nama_alternatif') ? 'is-invalid' : '' ?>" type="text" placeholder="masukkan nama alternatif" name="nama_alternatif">
												<div class="invalid-feedback">
													<?php echo form_error('nama_alternatif') ?>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="mb-3">
												<label for="keterangan" class="form-label">Keterangan</label>
												<textarea class="form-control <?php echo form_error('keterangan') ? 'is-invalid' : '' ?>" name="keterangan" id="keterangan" rows="3"></textarea>
												<div class="invalid-feedback">
													<?php echo form_error('keterangan') ?>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="mt-3">
												<button type="submit" class="btn mb-2 btn-primary">Simpan</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="settings">
			<div class="settings-icon-wrapper">
				<div class="settings-icon">
					<i class="ti ti-settings"></i>
				</div>
			</div>
			<div class="settings-content">
				<ul>
					<li class="fix-header">
						<div class="fix-header-wrapper">
							<div class="form-check form-switch lg">
								<label class="form-check-label" for="settingsFixHeader">Fixed Header</label>
								<input class="form-check-input toggle-settings" name="Header" type="checkbox" id="settingsFixHeader">
							</div>

						</div>
					</li>
					<li class="fix-footer">
						<div class="fix-footer-wrapper">
							<div class="form-check form-switch lg">
								<label class="form-check-label" for="settingsFixFooter">Fixed Footer</label>
								<input class="form-check-input toggle-settings" name="Footer" type="checkbox" id="settingsFixFooter">
							</div>
						</div>
					</li>
					<li>
						<div class="theme-switch">
							<label for="">Theme Color</label>
							<div>
								<div class="form-check form-check-inline lg">
									<input class="form-check-input lg theme-color" type="radio" name="ThemeColor" id="light" value="light">
									<label class="form-check-label" for="light">Light</label>
								</div>
								<div class="form-check form-check-inline lg">
									<input class="form-check-input lg theme-color" type="radio" name="ThemeColor" id="dark" value="dark">
									<label class="form-check-label" for="dark">Dark</label>
								</div>

							</div>
						</div>
					</li>
					<li>
						<div class="fix-footer-wrapper">
							<div class="form-check form-switch lg">
								<label class="form-check-label" for="settingsFixFooter">Collapse Sidebar</label>
								<input class="form-check-input toggle-settings" name="Sidebar" type="checkbox" id="settingsFixFooter">
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>

		<?php $this->load->view('template/_partials/footer'); ?>
