<?php $pag = $this->uri->segment(1); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $pag; ?> &mdash; Fuzzy AHP</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

	<link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/dist/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/vendor/themify-icons/themify-icons.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/vendor/perfect-scrollbar/css/perfect-scrollbar.css'); ?>">

	<!-- CSS for this page only -->
	<link rel="stylesheet" href="<?= base_url('assets/vendor/chart.js/dist/Chart.min.css'); ?>">
	<!-- End CSS  -->

	<link rel="stylesheet" href="<?= base_url('assets/css/style.min.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-override.min.css'); ?>">
	<link rel="stylesheet" id="theme-color" href="<?= base_url('assets/css/dark.min.css'); ?>">
</head>
