<?php
include "lib/session.php";
Session::checkSession();
?>
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
		<div class="sidebar-brand-icon rotate-n-15">
			<i class="fas fa-laugh-wink"></i>
		</div>
		<div class="sidebar-brand-text mx-3"> <?php echo Session::get('username') ?> </div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Dashboard -->
	<li class="nav-item active">
		<a class="nav-link" href="index.php">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span></a>
		</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
	Quản Lý
</div>
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages0"
		aria-expanded="true" aria-controls="collapsePages">
		<i class="fas fa-fw fa-user"></i>
		<span>Khách Hàng</span>
	</a>
	<div id="collapsePages0" class="collapse" aria-labelledby="headingPages"
	data-parent="#accordionSidebar">
		<div class="bg-white py-2 collapse-inner rounded">
			<!-- <h6 class="collapse-header"></h6> -->
			<a class="collapse-item" href="tables.php">Quản Lý Khách Hàng</a>
				<!-- <div class="collapse-divider"></div>
				<h6 class="collapse-header">Other Pages:</h6>
				<a class="collapse-item" href="404.php">404 Page</a>
				<a class="collapse-item" href="blank.php">Blank Page</a> -->
			</div>
		</div>
	</li>	
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages1"
		aria-expanded="true" aria-controls="collapsePages">
		<i class="fas fa-fw fa-wifi"></i>
		<span>Wifi+Trả Sau</span>
	</a>
	<div id="collapsePages1" class="collapse" aria-labelledby="headingPages"
	data-parent="#accordionSidebar">
		<div class="bg-white py-2 collapse-inner rounded">
			<!-- <h6 class="collapse-header"></h6> -->
			<a class="collapse-item" href="blog.php">Quản Lý Blog</a>
				<!-- <div class="collapse-divider"></div>
				<h6 class="collapse-header">Other Pages:</h6>
				<a class="collapse-item" href="404.php">404 Page</a>
				<a class="collapse-item" href="blank.php">Blank Page</a> -->
			</div>
		</div>
	</li>
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2"
			aria-expanded="true" aria-controls="collapsePages">
			<i class="fas fa-fw fa-image"></i>
			<span>Blog</span>
		</a>
	<div id="collapsePages2" class="collapse" aria-labelledby="headingPages"
	data-parent="#accordionSidebar">
	<div class="bg-white py-2 collapse-inner rounded">
		<!-- <h6 class="collapse-header">Web Edit:</h6> -->
		<a class="collapse-item" href="quanly-blog.php">Quản Lý Blog</a>
		<a class="collapse-item" href="blog.php">Nhập Blog</a>
				<!-- <div class="collapse-divider"></div>
				<h6 class="collapse-header">Other Pages:</h6>
				<a class="collapse-item" href="404.php">404 Page</a>
				<a class="collapse-item" href="blank.php">Blank Page</a> -->
			</div>
		</div>
	</li>
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages3"
		aria-expanded="true" aria-controls="collapsePages">
		<i class="fas fa-fw fa-credit-card"></i>
		<span>Sim</span>
	</a>
	<div id="collapsePages3" class="collapse" aria-labelledby="headingPages"
	data-parent="#accordionSidebar">
	<div class="bg-white py-2 collapse-inner rounded">
		<!--   <h6 class="collapse-header">Web Edit:</h6> -->
		<a class="collapse-item" href="sim.php">Quản Lý Sim</a>
		<a class="collapse-item" href="khosim.php">Kho Sim</a>
		<a class="collapse-item" href="loaisim.php">Loại Sim</a>
				<!-- <div class="collapse-divider"></div>
				<h6 class="collapse-header">Other Pages:</h6>
				<a class="collapse-item" href="404.php">404 Page</a>
				<a class="collapse-item" href="blank.php">Blank Page</a> -->
			</div>
		</div>
	</li>


	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block">

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>


	</ul>
	<!-- End of Sidebar -->

	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<a class="btn btn-primary" href="login.php">Logout</a>
			</div>
		</div>
	</div>
</div>