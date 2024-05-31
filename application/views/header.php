<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Bangkinglab_ug - aplikasi perbankan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Pendataran asisten baru" />
	<meta name="keywords" content="asisten laboratorium manajemen lanjut, assiten, pendaftaran, multipurpose" />
	<meta content="asisten" name="author" />
	<link rel="shortcut icon" href="<?= base_url('assets/public/') ?>images/bangkinglab_ug.png" />
	<link rel="stylesheet" href="<?= base_url('assets/public/') ?>css/tiny-slider.css" />
	<link href="<?= base_url('assets/public/') ?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('assets/public/') ?>css/style.min.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('assets/public/') ?>css/colors/default.css" rel="stylesheet" type="text/css"
		id="color-opt" />
		<style>
  df-messenger {
   --df-messenger-bot-message: #fc2c03;
   --df-messenger-button-titlebar-color: #fc2c03;
   --df-messenger-chat-background-color: #fafafa;
   --df-messenger-font-color: white;
   --df-messenger-send-icon: #878fac;
   --df-messenger-user-message: #fc2c03;
   --df-descriptionWrapper:#fc2c03;
  }
</style>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="67" oncontextmenu="return false;">
	<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white" id="navbar">
		<div class="container">
			<a href="<?= base_url('') ?>" class="navbar-brand me-5">
				<img src="<?= base_url('assets/public/') ?>images/logo_perbankan.png" class="logo-light" alt=""
					height="60" />
				<img src="<?= base_url('assets/public/') ?>images/logo_perbankan.png" class="logo-dark" alt=""
					height="60" />
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggle-icon"><i data-feather="menu"></i></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav gap-3 ms-auto">
					<li class="nav-item">
						<a class="nav-link text-black" href="#home"><i class="icon-xs" data-feather="home"></i> Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-black" href="#fitur"><i class="icon-xs" data-feather="users"></i>
							Fitur</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-black" href="#galeri"><i class="icon-xs" data-feather="image"></i>
							Galeri</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-black" href="#about"><i class="icon-xs" data-feather="info"></i>
							Tentang Kami</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-black" href="#contact"><i class="icon-xs" data-feather="map"></i>
							Kontak</a>
					</li>
				</ul>
				<div class="mb-4 mb-lg-0 ms-auto">
					<!-- <a href="<?= base_url('/oprec/user_home') ?>" class="btn btn-primary mx-5">Nasabah</a> -->
					<a href="<?= base_url('auth') ?>" class="btn btn-primary">Admin</a>
				</div>
			</div>
		</div>
	</nav>