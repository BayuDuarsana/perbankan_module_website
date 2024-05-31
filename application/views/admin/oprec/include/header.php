<!doctype html>
<html lang="en" class="no-focus">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Admin - Laboratorium Manajemen Lanjut</title>
	<meta name="description" content="Pendataran asisten baru">
	<meta name="author" content="dimas263">
	<meta name="robots" content="noindex, nofollow">
	<meta property="og:title" content="Pendataran asisten baru">
	<meta property="og:site_name" content="Pendataran asisten baru laboratorium manajemen lanjut universitas gunadarma">
	<meta property="og:description"
		content="Pendataran asisten baru laboratorium manajemen lanjut universitas gunadarma">
	<meta property="og:type" content="website">
	<meta property="og:url" content="">
	<meta property="og:image" content="">
	<link rel="shortcut icon" href="<?= base_url('assets/admin/assets/media/favicons/bangkinglab_ug.png') ?>">
	<link rel="icon" type="image/png" sizes="192x192"
		href="<?= base_url('assets/admin/assets/media/favicons/bangkinglab_ug.png') ?>">
	<link rel="apple-touch-icon" sizes="180x180"
		href="<?= base_url('assets/admin/assets/media/favicons/bangkinglab_ug.png') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/admin/') ?>assets/js/plugins/slick/slick.css">
	<link rel="stylesheet" href="<?= base_url('assets/admin/') ?>assets/js/plugins/slick/slick-theme.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
	<link rel="stylesheet" id="css-main" href="<?= base_url('assets/admin/') ?>assets/css/codebase.min.css">
	<link rel="stylesheet"
		href="<?= base_url('assets/admin/') ?>assets/js/plugins/datatables/dataTables.bootstrap4.css">
</head>
<!-- <body oncontextmenu="return false;"> -->

<body>
	<div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed">
		<header id="page-header">
			<div class="content-header">
				<div class="content-header-section">
					<button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout"
						data-action="sidebar_toggle">
						<i class="fa fa-navicon"></i>
					</button>
					<button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout"
						data-action="header_search_on">
						<i class="fa fa-search"></i>
					</button>
				</div>
				<div class="content-header-section">
					<div class="btn-group" role="group">
						<button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-user d-sm-none"></i>
							<span class="d-none d-sm-inline-block">
								<?= ucfirst($this->auth_libs->user_login()->nama); ?>
							</span>
							<i class="fa fa-angle-down ml-5"></i>
						</button>




						<div class="dropdown-menu dropdown-menu-right min-width-200"
							aria-labelledby="page-header-user-dropdown">
							<h5 class="h6 text-center py-10 mb-5 border-b text-uppercase">User</h5>
							<a class="dropdown-item" href="<?= base_url('oprec/berkas/') ?>">
								<i class="si si-user mr-5"></i> Profile
							</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="<?= base_url('auth/logout') ?>">
								<i class="si si-logout mr-5"></i> Sign Out
							</a>
						</div>
					</div>
				</div>
			</div>
			<div id="page-header-search" class="overlay-header">
				<div class="content-header content-header-fullrow">
					<form action="<?= base_url('oprec/admin/search/') ?>" method="post">
						<div class="input-group">
							<div class="input-group-prepend">
								<button type="button" class="btn btn-secondary" data-toggle="layout"
									data-action="header_search_off">
									<i class="fa fa-times"></i>
								</button>
							</div>
							<input type="text" class="form-control" placeholder="Search.." id="page-header-search-input"
								name="page-header-search-input">
							<div class="input-group-append">
								<button type="submit" class="btn btn-secondary">
									<i class="fa fa-search"></i>
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div id="page-header-loader" class="overlay-header bg-primary">
				<div class="content-header content-header-fullrow text-center">
					<div class="content-header-item">
						<i class="fa fa-sun-o fa-spin text-white"></i>
					</div>
				</div>
			</div>
		</header>
		<nav id="sidebar">
			<div class="sidebar-content">
				<div class="content-header content-header-fullrow px-15">
					<div class="content-header-section text-center align-parent sidebar-mini-hidden">
						<button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r"
							data-toggle="layout" data-action="sidebar_close">
							<i class="fa fa-times text-danger"></i>
						</button>
						<div class="content-header-item">
							<a class="link-effect font-w700" href="<?= base_url('') ?>">
								<img class="img-fluid img-thumbnail rounded-circle user-img mb-1"
									src="<?= base_url('assets/admin/assets/media/favicons/bangkinglab_ug.png') ?>"
									width="36" alt="" />
								<span class="font-size-xl text-dual-primary-dark">Lab</span><span
									class="font-size-xl text-primary">Manlan</span>
							</a>
						</div>
					</div>
				</div>
				<div class="content-side content-side-full content-side-user px-10 align-parent">
					<div class="sidebar-mini-visible-b align-v animated fadeIn">
						<img class="img-avatar img-avatar32"
							src="<?= base_url('assets/admin/') ?>assets/media/avatars/avatar15.jpg" alt="">
					</div>
					<div class="sidebar-mini-hidden-b text-center">
						<a class="img-link" href="<?= base_url('oprec/admin/profile/') ?>">
							<img class="img-avatar"
								src="<?= base_url('assets/upload/foto/') ?><?= $this->auth_libs->user_login()->nama ?>/<?= $this->auth_libs->user_login()->foto ?>"" width="
								200" height="200" alt="">
						</a>
						<ul class="list-inline mt-10">
							<li class="list-inline-item">
								<a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase"
									href="<?= base_url('oprec/admin/profile/') ?>">
									<?= ucfirst($this->auth_libs->user_login()->nama); ?>
								</a>
							</li>
							<li class="list-inline-item">
								<a class="link-effect text-dual-primary-dark" href="<?= base_url('auth/logout') ?>">
									<i class="si si-logout"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>




				<!-- sidebar customerservice -->
				<div class="content-side content-side-full">
					<ul class="nav-main">
						<!-- ini bagian customerservice -->
						<?php
						// ! ini bagian customerservice
						if ($this->session->userdata('sebagai') == 'customerservice') { ?>
							<li class="nav-main-heading"><span class="sidebar-mini-hidden"> customerservice</span></li>
							<!-- Individu -->
							<li>
								<a class="active" href="<?= base_url('Cs/CS_Pendaftaran_Nasabah_Individu/') ?>"><i
										class="si si-folder-alt"></i><span class="sidebar-mini-hide">ID Pendaftaran
										Nasabah</span></a>
							</li>
							<li>
								<a class="active" href="<?= base_url('Cs/CS_Pembukaan_Rekening_Individu/') ?>"><i
										class="si si-folder-alt"></i><span class="sidebar-mini-hide">ID Buka
										Rekening</span></a>
							</li>
							<li>
								<a class="active" href="<?= base_url('Cs/CS_Daftar_Nasabah_Individu/') ?>"><i
										class="si si-folder-alt"></i><span class="sidebar-mini-hide">ID Daftar
										Nasabah</span></a>
							</li>
							<li>
								<a class="active" href="<?= base_url('Cs/CS_Daftar_Rekening_Individu/') ?>"><i
										class="si si-folder-alt"></i><span class="sidebar-mini-hide">ID Daftar
										Rekening</span></a>
							</li>
							<li>
								<a class="active" href="<?= base_url('Cs/CS_Pendaftaran_Nasabah_Perusahaan/') ?>"><i
										class="si si-folder-alt"></i><span class="sidebar-mini-hide">P Pendaftaran
										Nasabah</span></a>
							</li>
							<li>
								<a class="active" href="<?= base_url('Cs/CS_Pembukaan_Rekening_Perusahaan/') ?>"><i
										class="si si-folder-alt"></i><span class="sidebar-mini-hide">P Buka Rekening
									</span></a>
							</li>
							<li>
								<a class="active" href="<?= base_url('Cs/CS_Daftar_Nasabah_Perusahaan/') ?>"><i
										class="si si-folder-alt"></i><span class="sidebar-mini-hide">P Daftar
										Nasabah
									</span></a>
							</li>
							<li>
								<a class="active" href="<?= base_url('Cs/CS_Daftar_Rekening_Perusahaan/') ?>"><i
										class="si si-folder-alt"></i><span class="sidebar-mini-hide">P Daftar
										Rekening</span></a>
							</li>
							<li>
								<a class="active" href="<?= base_url('cs/CS_Pemeliharaan_File_rekening/') ?>"><i
										class="si si-folder-alt"></i><span class="sidebar-mini-hide">pemeliharaan
										Rekening</span></a>
							</li>
						<?php } ?>
					</ul>
					<!-- END Side Navigation -->



					<!-- sidebar teller -->
					<ul class="nav-main">
						<!-- ini bagian teller -->
						<?php
						// ! ini bagian teller
						if ($this->session->userdata('sebagai') == 'teller') { ?>
							<li class="nav-main-heading"><span class="sidebar-mini-hidden">teller</span></li>
							<li>
								<a class="active" href="<?= base_url('TL/TL_Transfer/') ?>"><i
										class="si si-folder-alt"></i><span class="sidebar-mini-hide">Transfer</span></a>
							</li>
							<li>
								<a class="active" href="<?= base_url('TL/TL_Daftar_Mutasi/') ?>"><i
										class="si si-folder-alt"></i><span class="sidebar-mini-hide">Daftar
										Mutasi</span></a>
							</li>
							<li>
								<a class="active" href="<?= base_url('TL/TL_Tariktunai/') ?>"><i
										class="si si-folder-alt"></i><span class="sidebar-mini-hide">Tarik Tunai</span></a>
							</li>
							<li>
								<a class="active" href="<?= base_url('TL/TL_Setor_Tunai/') ?>"><i
										class="si si-folder-alt"></i><span class="sidebar-mini-hide">Setor Tunai</span></a>
							</li>
							<li>
								<a class="active" href="<?= base_url('TL/TL_Daftar_Penarikan/') ?>"><i
										class="si si-folder-alt"></i><span class="sidebar-mini-hide">Daftar Penarikan
										User</span></a>
							</li>
							<li>
								<a class="active" href="<?= base_url('TL/TL_Daftar_Setor/') ?>"><i
										class="si si-folder-alt"></i><span class="sidebar-mini-hide">Daftar Setor
										User</span></a>
							</li>
							<li>
								<a class="active" href="<?= base_url('TL/TL_Daftar_Transfer/') ?>"><i
										class="si si-folder-alt"></i><span class="sidebar-mini-hide">Daftar
										trasnfer</span></a>
							</li>
						<?php } ?>
					</ul>
					<!-- END Side Navigation -->


					<!-- sidebar headteller -->
					<ul class="nav-main">
						<!-- ini bagian headteller -->
						<?php
						// ! ini bagian headteller
						if ($this->session->userdata('sebagai') == 'headteller') { ?>
							<li class="nav-main-heading"><span class="sidebar-mini-hidden">headteller</span></li>
							<li>
								<a class="active" href="<?= base_url('HTL/HTL_Pemeliharaan_File_Nasabah/') ?>"><i
										class="si si-folder-alt"></i><span class="sidebar-mini-hide">Pemeliharaan File
										Nasabah</span></a>
							</li>
							<li>
								<a class="active" href="<?= base_url('HTL/HTL_Pemeliharaan_File_Rekening/') ?>"><i
										class="si si-folder-alt"></i><span class="sidebar-mini-hide">Pemeliharaan File
										Rekening</span></a>
							</li>
							<li>
								<a class="active" href="<?= base_url('HTL/HTL_Status_Jenis_Bunga/') ?>"><i
										class="si si-folder-alt"></i><span class="sidebar-mini-hide">Status Jenis
										Bunga</span></a>
							</li>
							<li>
								<a class="active" href="<?= base_url('HTL/HTL_Daftar_Perbaikan_Transaksi/') ?>"><i
										class="si si-folder-alt"></i><span class="sidebar-mini-hide">Daftar Perbaikan
										Transaksi</span></a>
							</li>
							<li>
								<a class="active" href="<?= base_url('HTL/HTL_Daftar_Mutasi/') ?>"><i
										class="si si-folder-alt"></i><span class="sidebar-mini-hide">Daftar Mutasi</span></a>
							</li>
							<li>
								<a class="active" href="<?= base_url('HTL/HTL_Transfer/') ?>"><i
										class="si si-folder-alt"></i><span class="sidebar-mini-hide">Transfer</span></a>
							</li>
						<?php } ?>
					</ul>
					<!-- END Side Navigation --> 


					<!-- sidebar cashoficer -->
					<ul class="nav-main">
						<!-- ini bagian cashoficer -->
						<?php
						// ! ini bagian cashoficer
						if ($this->session->userdata('sebagai') == 'cashoficer') { ?>
							<li class="nav-main-heading"><span class="sidebar-mini-hidden">cashofficer</span></li>
							<li>
								<a class="active" href="<?= base_url('CSO/CSO_Pemeliharaan_Batasan/') ?>"><i
										class="si si-folder-alt"></i><span class="sidebar-mini-hide">Pemeliharaan
										Batasan</span></a>
							</li>
							<li>
								<a class="active" href="<?= base_url('CSO/CSO_Rekening/') ?>"><i
										class="si si-folder-alt"></i><span class="sidebar-mini-hide">Rekening</span></a>
							</li>
							<li>
								<a class="active" href="<?= base_url('CSO/CSO_Otoritas_Transaksi/') ?>"><i
										class="si si-folder-alt"></i><span class="sidebar-mini-hide">Otoritas
										Transaksi</span></a>
							</li>
							<li>
								<a class="active" href="<?= base_url('CSO/CSO_Pemeliharaan_bunga/') ?>"><i
										class="si si-folder-alt"></i><span class="sidebar-mini-hide">Pemeliharaan
										Bunga</span></a>
							</li>
							<li>
								<a class="active" href="<?= base_url('CSO/CSO_Menambah_User/') ?>"><i
										class="si si-folder-alt"></i><span class="sidebar-mini-hide">menambah
										user</span></a>
							</li>
						<?php } ?>
					</ul>
					<!-- END Side Navigation -->


					<!-- sidebar user -->

					<ul class="nav-main">
						<!-- ini bagian user -->
						<?php
						// ! ini bagian user
						if ($this->session->userdata('sebagai') == 'usr') { ?>
							<li class="nav-main-heading"><span class="sidebar-mini-hidden">user</span></li>
							<li>
								<a class="active" href="<?= base_url('/oprec/usr_home') ?>"><i
										class="si si-folder-alt"></i><span class="sidebar-mini-hide">Home</span></a>
							</li>
							<li>
								<a class="active" href="<?= base_url('oprec/usr_historytariktunaiuser/') ?>"><i
										class="si si-folder-alt"></i><span class="sidebar-mini-hide">History Tarik
										Tunaiuser</span></a>
							</li>
							<li>
								<a class="active" href="<?= base_url('oprec/usr_historytransferuser/') ?>"><i
										class="si si-folder-alt"></i><span class="sidebar-mini-hide">History
										Transfer</span></a>
							</li>
							<li>
								<a class="active" href="<?= base_url('oprec/usr_transferuser/') ?>"><i
										class="si si-folder-alt"></i><span class="sidebar-mini-hide">Transfer</span></a>
							</li>
							<li>
								<a class="active" href="<?= base_url('oprec/usr_transfer_login/') ?>"><i
										class="si si-folder-alt"></i><span
										class="sidebar-mini-hide">Transfer_Login</span></a>
							</li>
						<?php } ?>
					</ul>
					<!-- END Side Navigation -->


				</div>
			</div>
			<!-- Sidebar Content -->
		</nav>


















		<!-- END Sideb
ar -->