<?php $this->load->view('template/_partials/header'); ?>
<?php $this->load->view('template/_partials/modal'); ?>

<body>
	<div id="app">
		<div class="shadow-header"></div>

		<?php $this->load->view('template/_partials/navbar'); ?>

		<?php $this->load->view('template/_partials/sidebar'); ?>

		<div class="main-content">
			<div class="title">
				Kriteria
			</div>
			<div class="content-wrapper">
				<div class="row same-height">
					<div class="col-md-12">
						<div class="mb-3">
							<?php if ($this->session->flashdata('success')) : ?>
								<div class="alert alert-success alert-dismissible fade show" role="alert">
									<strong>Yeay!</strong> <?php echo $this->session->flashdata('success'); ?>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
								</div>
							<?php endif; ?>
						</div>
						<div class="card">
							<div class="card-header">
								<a href="<?php echo site_url('kriteria/add') ?>"><button type="button" class="btn mb-2 icon-left btn-primary "><i class="ti-plus"></i>Tambah data</button></a>
							</div>
							<div class="card-body">
								<table class="table table-hover">
									<thead>
										<tr>
											<th scope="col" width="10%">No</th>
											<th scope="col" width="15%">Kode</th>
											<th scope="col">Kriteria</th>
											<th scope="col" width="20%">Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										foreach ($kriteria as $k) {
										?>
											<tr>
												<th scope="row"><?php echo $no++; ?></th>
												<td><?php echo $k->kode; ?></td>
												<td><?php echo $k->nama_kriteria; ?></td>
												<td>
													<a href="<?php echo site_url('kriteria/edit/' . $k->id) ?>"><button type="button" class="btn btn-warning btn-sm"><i class="ti-pencil"></i> Edit</button></a>
													<a onclick="deleteConfirm('<?php echo site_url('kriteria/delete/' . $k->id) ?>')" href="#!"><button type="button" class="btn btn-danger btn-sm hapus" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="ti-trash"></i> Hapus</button></a>
												</td>
											</tr>
										<?php
										}
										?>
									</tbody>
								</table>
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
