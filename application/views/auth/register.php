<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register &mdash; SPK Fuzzy AHP</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />


	<link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/dist/css/bootstrap.min.css'); ?>">

	<link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-override.css'); ?>">


</head>

<body>
	<section class="container h-100">
		<div class="row justify-content-sm-center h-100 align-items-center">
			<div class="col-xxl-4 col-xl-5 col-lg-6 col-md-7 col-sm-8">
				<div class="card shadow-lg">
					<div class="card-body p-4">
						<h1 class="fs-4 text-center fw-bold mb-4">Register</h1>
						<!-- <h1 class="fs-6 mb-3">Register to get more benefits!!</h1> -->
						<?php
						if ($this->session->flashdata('error') != '') {
							echo '<div class="alert alert-danger" role="alert">';
							echo $this->session->flashdata('error');
							echo '</div>';
						}
						?>
						<form method="POST" action="<?php echo base_url(); ?>register/proses" class="needs-validation" novalidate="" autocomplete="off">
							<div class="mb-3">
								<label class="mb-2 text-muted" for="nama">Nama Lengkap</label>
								<div class="input-group input-group-join mb-3">
									<input type="text" placeholder="Masukkan nama lengkap anda" class="form-control" name="nama" id="nama" required autofocus>
									<span class="input-group-text rounded-end">&nbsp<i class="fa fa-user"></i>&nbsp</span>
								</div>
							</div>
							<div class="mb-3">
								<label class="mb-2 text-muted" for="email">E-Mail</label>
								<div class="input-group input-group-join mb-3">
									<input id="email" type="email" placeholder="Alamat email" class="form-control" name="email" id="email" required autofocus>
									<span class="input-group-text rounded-end">&nbsp<i class="fa fa-envelope"></i>&nbsp</span>
								</div>
							</div>

							<div class="mb-3">
								<div class="mb-2 w-100">
									<label class="text-muted" for="password">Password</label>
									<a href="forgot.html" class="float-end">
										Forgot Password?
									</a>
								</div>
								<div class="input-group input-group-join mb-3">
									<input type="password" class="form-control" name="password" id="password" placeholder="Masukkan password" required>
									<span class="input-group-text rounded-end password cursor-pointer">&nbsp<i class="fa fa-eye"></i>&nbsp</span>
								</div>
							</div>
							<!-- <div class="mb-3">
								<div class="mb-2 w-100">
									<label class="text-muted" for="password">Confirm Password</label>
								</div>
								<div class="input-group input-group-join mb-3">
									<input type="password" class="form-control" placeholder="Confirm Your Password" required>
									<span class="input-group-text rounded-end password cursor-pointer">&nbsp<i class="fa fa-eye"></i>&nbsp</span>
									<div class="invalid-feedback">
										Confirm Password is required
									</div>
								</div>
							</div> -->

							<div class="d-flex align-items-center">
								<div class="form-check">
									<input type="checkbox" name="remember" id="remember" class="form-check-input">
									<label for="remember" class="form-check-label">I agree to <a href="#">terms</a></label>
								</div>
								<button type="submit" class="btn btn-primary ms-auto">
									Register
								</button>
							</div>
						</form>
					</div>
					<div class="card-footer py-3 border-0">
						<div class="text-center">
							Already have an account? <a href="<?php echo base_url('login'); ?>" class="text-dark">Login instead</a>
						</div>
					</div>
				</div>
				<div class="text-center mt-5 text-muted">
					Copyright &copy; 2022 &mdash; Mulai Dari Null
				</div>
			</div>
		</div>
	</section>
	<script src="<?= base_url('assets/js/login.js'); ?>"></script>
</body>

</html>
