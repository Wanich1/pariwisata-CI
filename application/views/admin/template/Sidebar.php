<br>
	<!-- sidebar menu -->
	<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
		<div class="menu_section">
			<h3>General</h3>
			<ul class="nav side-menu">
				<li><a href="<?php echo base_url('Dashboard')?>"><i class="fa fa-home"></i> Home </a>
				</li>
				<li><a><i class="fa fa-edit"></i> Post <span class="fa fa-chevron-down"></span></a>
					<ul class="nav child_menu">
						<li><a href="<?php echo base_url('Dashboard/tambah')?>">Tambah Artikel</a></li>
						<li><a href="<?php echo base_url('Dashboard/list')?>">List Artikel</a></li>
					</ul>
				</li>
		</div>

	</div>
	<!-- /sidebar menu -->
</div>
</div>

<!-- top navigation -->
<div class="top_nav">
<div class="nav_menu">
		<div class="nav toggle">
			<a id="menu_toggle"><i class="fa fa-bars"></i></a>
		</div>
		<nav class="nav navbar-nav">
		<ul class=" navbar-right">
			<li class="nav-item dropdown open" style="padding-left: 15px;">
				<a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
					<img src="<?php echo base_url();?>/assets/production/images/img.jpg" alt=""><?php echo $this->session->userdata('nama')?>
				</a>
				<div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
					<a class="dropdown-item"  href="javascript:;"> Profile</a>
					<a class="dropdown-item"  href="<?php echo base_url();?>/auth/login"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
				</div>
			</li>
		</ul>
	</nav>
</div>
</div>
<!-- /top navigation -->
