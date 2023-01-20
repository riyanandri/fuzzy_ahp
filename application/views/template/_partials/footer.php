<footer>
	Copyright © 2023 &nbsp <a href="https://www.youtube.com/c/mulaidarinull" target="_blank" class="ml-1"> Mulai Dari Null </a> <span> . All rights Reserved</span>
</footer>
<div class="overlay action-toggle">
</div>
</div>
<script src="<?= base_url('assets/vendor/bootstrap/dist/js/bootstrap.bundle.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/perfect-scrollbar/dist/perfect-scrollbar.min.js'); ?>"></script>

<!-- js for this page only -->
<script src="<?= base_url('assets/vendor/chart.js/dist/Chart.min.js'); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="<?= base_url('assets/js/page/index.js'); ?>"></script>
<!-- ======= -->
<script src="<?= base_url('assets/js/main.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/sweetalert2/dist/sweetalert2.all.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/sweetalert2/dist/sweetalert2.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/script.js'); ?>"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script>
	function deleteConfirm(url) {
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
</script>
<script>
	Main.init()
</script>
</body>

</html>
