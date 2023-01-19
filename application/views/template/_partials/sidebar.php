<?php $pag = $this->uri->segment(1); ?>
<?php $page = $this->uri->segment(2); ?>
<?php $pages = $this->uri->segment(3); ?>

<nav class="main-sidebar ps-menu">
	<div class="sidebar-toggle action-toggle">
		<a href="#">
			<i class="fas fa-bars"></i>
		</a>
	</div>
	<div class="sidebar-opener action-toggle">
		<a href="#">
			<i class="ti-angle-right"></i>
		</a>
	</div>
	<div class="sidebar-header">
		<div class="text">SPK</div>
		<div class="close-sidebar action-toggle">
			<i class="ti-close"></i>
		</div>
	</div>
	<div class="sidebar-content">
		<ul>
			<li <?php if ($page == "Dashboard") echo 'class="active" '; ?>>
				<?= anchor('Dashboard', '<i class="ti-home"></i><span>Dashboard</span>'); ?>
				<!-- <a href="" class="link">
					<i class="ti-home"></i>
					<span>Dashboard</span>
				</a> -->
			</li>
			<li class="">
				<a href="index.html" class="link">
					<i class="ti-home"></i>
					<span>Kriteria</span>
				</a>
			</li>
			<!-- <li>
				<a href="#" class="main-menu has-dropdown">
					<i class="ti-desktop"></i>
					<span>Kriteria</span>
				</a>
				<ul class="sub-menu ">
					<li><a href="element-ui.html" class="link"><span>Elements</span></a></li>
					<li><a href="element-accordion.html" class="link"><span>Accordion</span></a></li>
					<li><a href="element-tabs-collapse.html" class="link"><span>Tabs & Collapse</span></a></li>
					<li><a href="element-card.html" class="link"><span>Card</span></a></li>
					<li><a href="element-button.html" class="link"><span>Buttons</span></a></li>
					<li><a href="element-alert.html" class="link"><span>Alert</span></a></li>
					<li><a href="element-themify-icons.html" class="link"><span>Themify Icons</span></a></li>
					<li><a href="element-modal.html" class="link"><span>Modal</span></a></li>
				</ul>
			</li> -->
		</ul>
	</div>
</nav>
