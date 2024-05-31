<section class="hero-one-3 justify-content-center position-relative overflow-hidden" id="home"
	style="background-image: url(<?= base_url('assets/public/') ?>images/landing_page.png); background-size: contain; opactiy: 0.5;">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 mb-5">
				<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
					<ol class="carousel-indicators">
						<li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class="active"></li>
					</ol>
					<div class="carousel-inner"
						style="color: #fff; background: #fc2c03; opacity: 90%; border-radius: 30px">
						<div class="carousel-item mt-1 active">
							<div class="hero-one-3-content text-center mb-2">
								<h1 class="fw-light hero-title my-4" style="font-family: 'Proxima Nova'; ">
									WEBSITE KSAP<br />
									<h3><i>Lab. Manajemen Lanjut</i></h3>
								</h1>
								<a href="<?= base_url('auth') ?>" class="btn" style="color:#fff">Gunakan Sekarang <i
										class="icon-xs" data-feather="chevrons-right"
										style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); color:#fff"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end container -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 hero-one-3-bottom p-0 position-absolute end-0 bottom-0 start-0">
				<img class="img-fluid d-block w-100"
					src="<?= base_url('assets/public/') ?>images/hero-one-3-bottom-img.png" alt="" />
			</div>
		</div>
	</div>
</section>
<section class="hero-one-5 position-relative overflow-hidden align-items-center justify-content-center d-flex">
	<div class="hero-one-5-overlay position-absolute top-0 end-0 bottom-0 start-0"></div>
	<div class="hero-one-5-bg position-absolute top-0 end-0 bottom-0 start-0"
		style="background-image: url(<?= base_url('assets/public/') ?>images/hero-one-5-bg.png);"></div>
	<div class="container">
		<div class="row justify-content-center align-items-center mt-5">
			<div class="col-md-6">
				<div class="text-white">
					<div class="d-flex gap-3">
						<div class="spinner-grow mt-4" role="status">
							<span class="visually-hidden">Loading...</span>
						</div>
						<h1 class="fw-medium mb-4 pb-2 mt-3">
							Website KSAP 
						</h1>
					</div>
					<div class="d-flex">
						<div class="d-inline-block ms-2">
							<p class="text-white-50 my-2"><i>"Banking is not just about numbers and transactions, it is about providing financial solutions and helping people achieve their goals."</i></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 mt-sm-0 mt-5">
				<div class="position-relative">
					<img class="rounded img-fluid mx-auto d-block"
						src="<?= base_url('assets/public/') ?>images/page2.png" alt="" />
					<div class="play-box" data-bs-toggle="modal" data-bs-target="#watchvideomodal">
						<a href="javascript: void(0);" class="video-button bg-white text-primary">
							<i class="bg-white text-primary d-inline-block" data-feather="video"></i>
						</a>
					</div>
				</div>
				<div class="modal fade bd-example-modal-lg" id="watchvideomodal" data-keyboard="false" tabindex="-1"
					aria-hidden="true"
					style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
					<div class="modal-dialog modal-dialog-centered modal-dialog modal-lg">
						<div class="modal-content hero-modal border-0 bg-transparent">
							<iframe width="auto" height="315" src="https://www.youtube.com/embed/TcOTbmqpRNA"
								title="YouTube video player" frameborder="0"
								allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
								allowfullscreen></iframe>
							<!--
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							<video id="VisaChipCardVideo" class="video-box w-100" controls>
								<source src="<?= base_url('assets/public/') ?>video/Manlangathering21.mp4" type="video/mp4" />
							</video>
							-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section" id="fitur">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-5 mt-4 pt-2">
				<div class="faq-img position-relative">
					<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active" data-bs-interval="2000">
								<img src="<?= base_url('assets/public/') ?>images/fituraplikasi1.png"
									class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item" data-bs-interval="2000">
								<img src="<?= base_url('assets/public/') ?>images/fituraplikasi2.png"
									class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item" data-bs-interval="2000">
								<img src="<?= base_url('assets/public/') ?>images/fituraplikasi3.png"
									class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item">
								<img src="<?= base_url('assets/public/') ?>images/fituraplikasi4.png"
									class="d-block w-100" alt="...">
							</div>
						</div>
					</div>
					<span
						class="faq-ask text-uppercase rounded text-white bg-primary fs-16 fw-medium px-4 py-3">Website KSAP</span>
				</div>
			</div>
			<div class="col-lg-6 offset-lg-1 mt-4 pt-2">
				<div class="mb-4 pb-2">
					<div class="d-flex gap-3">
						<div class="spinner-grow" role="status">
							<span class="visually-hidden">Loading...</span>
						</div>
						<h2 class="fs-3 fw-medium lh-1 text-dark mb-3">Fitur Website</h2>
					</div>
					
				</div>
				<div class="accordion" id="accordionExample">
					<div class="accordion-item mb-4">
						<h2 class="accordion-header" id="headingOne">
							<button class="accordion-button fw-medium text-dark bg-light border-0" type="button"
								data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
								aria-controls="collapseOne">
								1. Customer Service (CS)
							</button>
						</h2>
						<div id="collapseOne" class="text-center accordion-collapse collapse border-0 show"
							aria-labelledby="headingOne" data-bs-parent="#accordionExample">
							<img class="w-25" src="<?= base_url('assets/public/images/cs.svg') ?>" alt="">
							<div class="accordion-body text-muted" style="text-align: justify">
								<i>Pembukaan Rekening,</i>
								<i>Informasi Nomor Rekening,</i>
								<i>Informasi Nasabah,</i>
								<i>Daftar Rekening, dan </i>
								<i>Update Bunga</i>
							</div>
						</div>
					</div>
					<div class="accordion-item mb-4">
						<h2 class="accordion-header" id="headingTwo">
							<button class="accordion-button collapsed fw-medium text-dark bg-light border-0"
								type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
								aria-expanded="false" aria-controls="collapseTwo">
								2. Teller (TL)
							</button>
						</h2>
						<div id="collapseTwo" class="text-center accordion-collapse collapse border-0" aria-labelledby="headingTwo"
							data-bs-parent="#accordionExample">
							<img class="w-25" src="<?= base_url('assets/public/images/teller.svg') ?>" alt="">
							<div class="accordion-body text-muted" style="text-align: justify">
								<i>Transaksi,</i>
								<i>Daftar mutasi,</i>
								<i>Tarik tunai, dan</i>
								<i>Setoran tunai</i>
							</div>
						</div>
					</div>
					<div class="accordion-item mb-4">
						<h2 class="accordion-header" id="headingThree">
							<button class="accordion-button collapsed fw-medium text-dark bg-light border-0"
								type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
								aria-expanded="false" aria-controls="collapseThree">
								3. Headteller (HTL)
							</button>
						</h2>
						<div id="collapseThree" class="text-center accordion-collapse collapse border-0"
							aria-labelledby="headingThree" data-bs-parent="#accordionExample">
							<img class="w-25" src="<?= base_url('assets/public/images/htl.svg') ?>" alt="">
							<div class="accordion-body text-muted" style="text-align: justify">
								<i>Pemeliharaan file nasabah,</i>
								<i>Pemeliharaan file rekening,</i>
								<i>status jenis bunga, dan</i>
								<i>Daftar perbaikan transaksi</i>
							</div>
						</div>
					</div>
					
					
				</div>
			</div>
		</div>
	</div>
</section>

<section class="mx-5 my-5" id="galeri">
	<div class="title mx-3">
		<div class="d-flex gap-3">
			<div class="spinner-grow" role="status">
				<span class="visually-hidden">Loading...</span>
			</div>
			<h2 class="fs-3 fw-medium lh-1 text-dark mb-3">Galeri Manlan</h2>
		</div>
	</div>
	<div id="carouselExampleControls" class="carousel slide my-4" data-bs-ride="carousel">
		<div class="carousel-inner text-center">
			<div class="carousel-item active">
				<div class="row">
					<div class="col-sm-6">
						<div class="card">
							<div class="card-body">
								<img class="w-75 m-5" src="<?= base_url('assets/public/images/galeri1.jpg') ?>" alt="">
								<div class="gap-2 d-flex text-center justify-content-center">
									<i style="color: #fc2c03;">"Kunjungan Museum 2023, Museum Bank Indonesia"</i>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="card">
							<div class="card-body">
								<img class="w-75  m-5" src="<?= base_url('assets/public/images/galeri2.jpg') ?>" alt="">
								<div class="gap-2 d-flex text-center justify-content-center">
									<i style="color: #fc2c03;">"Kegiatan Training 2023, Kampus E Depok"</i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<div class="row">
					<div class="col-sm-6">
						<div class="card">
							<div class="card-body">
								<img class="w-75  m-5" src="<?= base_url('assets/public/images/training_2022.jpg') ?>" alt="">
								<div class="gap-2 d-flex text-center justify-content-center">
									<i style="color: #fc2c03;">"Kegiatan Training 2022, Kampus J1 Kalimalang"</i>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="card">
							<div class="card-body">
								<img class="w-75  mt-5 mb-4" src="<?= base_url('assets/public/images/bukber.jpg') ?>" alt="">
								<div class="gap-2 d-flex text-center justify-content-center">
									<i style="color: #fc2c03;">"Buka Puasa Bersama 2021, Uduk Bro Tebet"</i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<div class="row">
					<div class="col-sm-6">
						<div class="card">
							<div class="card-body">
								<img class="w-75  m-5" src="<?= base_url('assets/public/images/sertijab2.jpeg') ?>" alt="">
								<div class="gap-2 d-flex text-center justify-content-center">
									<i style="color: #fc2c03;">"Serah Terima Jabatan 2022, Kebun Raya Bogor"</i>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="card">
							<div class="card-body">
								<img class="w-75  m-4" src="<?= base_url('assets/public/images/gathering.jpg') ?>" alt="">
								<div class="gap-2 d-flex text-center justify-content-center">
									<i style="color: #fc2c03;">"Gathering 2020, Villa Puncak"</i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-4">
			<div class="w-50 d-flex justify-content-end">
				<button class="rounded-circle" type="button" data-bs-target="#carouselExampleControls"
					data-bs-slide="prev" style="background: #fc2c03; border-color: #fc2c03;">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
			</div>
			<div class="w-50 ">
				<button class="rounded-circle" type="button" data-bs-target="#carouselExampleControls"
					data-bs-slide="next" style="background: #fc2c03; border-color: #fc2c03; ">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</div>
	</div>
</section>

<section class="section" id="about">
	<div class="container">
		<div class="row justify-content-center mb-4">
			<div class="col-lg-8 text-center">
				<br><br>
				<div class="d-flex gap-3 justify-content-center">
					<div class="spinner-grow" role="status">
						<span class="visually-hidden">Loading...</span>
					</div>
					<h2 class="fs-3 fw-medium lh-1 text-dark mb-3">Tentang Kami</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 mt-4 pt-2">
				<div class="price-box border rounded bg-white p-5"
					style="box-shadow: 0px 4px 20px rgb(31 27 81 / 7%) !important;">
					<img src="<?= base_url('assets/public/images/bangkinglab_ug.png') ?>" width="80" />
					<br><br>
					<h4 class="fw-normal text-dark mb-2">Lab Manlan</h4>
					<br>
					<p class="text-muted" style="text-align: justify;">
						Laboratorium Manajemen Lanjut, sering di sebut Lab ManLan, merupakan salah satu Laboratotium
						yang berada dibawah naungan Fakultas Ekonomi Jurusan Manajemen Universitas Gunadarma.
						<br><br>
						Lab Manajemen Lanjut berlokasi di kampus E, kelapa dua tepatnya di E523. Sedangkan ruang staff
						terletak di E52. Selain ruang Laboratorium yang berada di kampus E, Lab.
						<br><br>
						Manajemen Lanjut juga melakukan Praktikum di Kampus J Kali Malang di J1416, Kampus K Karawaci,
						dan Kampus L Cengkareng bersama-sama dengan Lab. Manajemen Dasar dan Lab. Manajemen Menengah.
					</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-4 pt-2">
				<div class="price-box border rounded bg-white p-5"
					style="box-shadow: 0px 4px 20px rgb(31 27 81 / 7%) !important;">
					<img src="<?= base_url('assets/public/images/about_us.png') ?>" width="130" />
					<br><br>
					<h4 class="fw-normal mb-2">Sejarah Singkat</h4>
					<br>
					<p class="text-muted fs-14" style="text-align: justify;">Pada awal berdirinya tahun 1993, Lab.
						Manajemen Lanjut adalah Laboratorium Perbankan di bawah naungan STIE Gunadarma. Di beri nama
						Lab. Perbankan, karena Praktikum pertama yang dilakukan adalah Sistem Aplikasi Perbankan.</p>
					<br>
					<p class="text-muted fs-14" style="text-align: justify;">Pada tahun 1996, Lab. Perbankan berubah
						nama menjadi Lab. Manajemen Lanjut, hal tersebut dikarenakan praktikum yang dilaksanakan di
						peruntukan mahasiswa tingkat lanjut/akhir.</p>
					<br>
					<p class="text-muted fs-14" style="text-align: justify;">Pada awal berdirinya, Lab. Perbankan di
						pimpin oleh Bapak Lutfi Fahda. Kemudian digantikan oleh Bapak Budi Hermana. Pada tahun 1996,
						Bapak Prihantoro menjadi kepala Laboratorium dan mulai tahun 2007 bertindak sebagai Kepala Lab
						adalah Ibu Kartika Sari.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-4 pt-2">
				<div class="price-box border rounded bg-white p-5"
					style="box-shadow: 0px 4px 20px rgb(31 27 81 / 7%) !important;">
					<img src="<?= base_url('assets/public/images/about_tujuan.png') ?>" width="100" />
					<br><br>
					<h4 class="fw-normal text-dark mb-2">Visi Misi</h4>
					<br>
					<p class="text-muted fs-14" style="text-align: justify;">
						<b>Visi</b>
						<br>
						Pada tahun 2017 menjadi laboratorium penyelenggara praktikum yang bereputasi Internasional,
						memiliki jejaring global, dan memberikan kontribusi signifikan bagi peningkatan daya saing
						bangsa khususnya bidang Manajemen Pemasaran, Keuangan dan Perbankan berbasis TI.
					</p>
					<br>
					<p class="text-muted fs-14" style="text-align: justify;">
						<b>Misi</b>
						<br>
						1. Melaksanakan praktikum untuk menghasilkan sarjana Manajemen dan Akuntansi yang profesional
						dan mampu mengikuti perkembangan ilmu pengetahuan dan teknologi serta mampu bersaing di
						lingkungan global.
						<br><br>
						2. Melaksanakan kegiatan pengembangan dalam bidang Manajemen sehingga dapat memberikan
						kontribusi kepada kemajuan ilmu pengetahuan.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section bg-light"
	style="background: url(<?= base_url('assets/public/') ?>images/contact-bg.png); background-repeat: no-repeat; background-size: cover;">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 text-center">
				<div class="d-flex gap-3 justify-content-center">
					<div class="spinner-grow" role="status">
						<span class="visually-hidden">Loading...</span>
					</div>
					<h2 class="fs-3 fw-medium lh-1 text-dark mb-3">Kontak</h2>
				</div>
				<div class="row justify-content-center align-items-center">
					<div>
						<a href="https://ma-lanjut.lab.gunadarma.ac.id/contact"><img
								src="https://img.icons8.com/fluency/48/000000/globe.png" /></a>
						<a href="mailto:manlanjutgunadarma@gmail.com"><img
								src="https://img.icons8.com/color/48/000000/gmail-new.png" /></a>
						<a href="https://twitter.com/bankinglab_ug"><img
								src="https://img.icons8.com/fluency/48/000000/twitter.png" /></a>
						<a href="https://www.instagram.com/bankinglab_ug"><img
								src="https://img.icons8.com/fluency/48/000000/instagram-new.png" /></a>
						<a href="https://wa.me/+6281389720564"><img
								src="https://img.icons8.com/color/48/000000/whatsapp--v2.png" /></a>
					</div>
				</div>
				<br>
				<p class="text-muted">Lokasi Laboratorium Manajemen Lanjut Universitas Gunadarma.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-8 mt-6 pt-4">
				<div class="price-box border rounded bg-white p-3"
					style="box-shadow: 0px 4px 20px rgb(31 27 81 / 7%) !important;">
					<h4 class="fw-normal text-dark mb-2">Kampus Kelapa Dua (E52)</h4>
					<p class="text-muted fs-14" style="text-align: justify;">Jl. Komjen M. Jasin, Kelapa Dua, Cimanggis,
						Depok. <br>Telp. 021-8727538 ; 021-8727541 Ext. 556.</p>
					<iframe class="col-lg-12 col-md-8 mt-6 pt-4"
						src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7930.614103832763!2d106.838186!3d-6.354283!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xac6a328c299b269d!2sUniversitas%20Gunadarma%20Kampus%20H!5e0!3m2!1sid!2sid!4v1637701941147!5m2!1sid!2sid"
						height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
			<div class="col-lg-6 col-md-8 mt-6 pt-4">
				<div class="price-box border rounded bg-white p-3"
					style="box-shadow: 0px 4px 20px rgb(31 27 81 / 7%) !important;">
					<h4 class="fw-normal text-dark mb-2">Kampus Kalimalang (J1423)</h4>
					<p class="text-muted fs-14" style="text-align: justify;">Jl. KH. Noer Ali, Bekasi. <br>Telp.
						021-88860117 ; 021-88860118.</p>
					<iframe class="col-lg-12 col-md-8 mt-6 pt-4"
						src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63457.81475918573!2d106.970713!3d-6.248782!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7dd864ce65061cd8!2sUniversitas%20Gunadarma%20Kampus%20J1!5e0!3m2!1sid!2sid!4v1637701883627!5m2!1sid!2sid"
						height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
		</div>
	</div>
</section>

<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger
  intent="WELCOME"
  chat-title="Chatbot-KSAP"
  agent-id="f4afbbd1-744d-47b4-bb95-6e9d0f0742dc"
  language-code="id"
  class ="df-messenger"
></df-messenger>


