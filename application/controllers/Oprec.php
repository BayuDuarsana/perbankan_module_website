<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Oprec extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Data_m');
		$this->load->helper('url', 'form');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function admin()
	{
		check_not_login();
		$this->load->view('admin/oprec/include/header');
		$this->load->view('admin/oprec/home');
		$this->load->view('admin/oprec/include/footer');
	}
	public function search()
	{
		check_not_login();
		$this->load->view('admin/oprec/include/header');
		$this->load->view('admin/oprec/search');
		$this->load->view('admin/oprec/include/footer');
	}
	public function profile()
	{
		check_not_login();
		$this->load->view('admin/oprec/include/header');
		$this->load->view('admin/oprec/profile');
		$this->load->view('admin/oprec/include/footer');
	}
	public function tutor()
	{
		check_not_login();
		//if($this->auth_libs->user_login()->seleksi_berkas == 'ya' && $this->auth_libs->user_login()->seleksi_ujian == 'ya' && $this->auth_libs->user_login()->seleksi_wawancara == 'tidak' && $this->auth_libs->user_login()->seleksi_staff == 'tidak'){

		//}
		$this->load->view('admin/oprec/include/header');
		$this->load->view('admin/oprec/tutor');
		$this->load->view('admin/oprec/include/footer');
	}
	public function staff()
	{
		check_not_login();
		//if($this->auth_libs->user_login()->seleksi_berkas == 'ya' && $this->auth_libs->user_login()->seleksi_ujian == 'ya' && $this->auth_libs->user_login()->seleksi_wawancara == 'ya' && $this->auth_libs->user_login()->seleksi_staff == 'tidak'){

		//}
		$this->load->view('admin/oprec/include/header');
		$this->load->view('admin/oprec/staff');
		$this->load->view('admin/oprec/include/footer');
	}
	public function sukses()
	{
		check_not_login();

		//if($this->auth_libs->user_login()->seleksi_berkas == 'ya' && $this->auth_libs->user_login()->seleksi_ujian == 'ya' && $this->auth_libs->user_login()->seleksi_wawancara == 'ya' && $this->auth_libs->user_login()->seleksi_staff == 'ya') {

		//}
		$this->load->view('admin/oprec/include/header');
		$this->load->view('admin/oprec/final');
		$this->load->view('admin/oprec/include/footer');
	}
	// ini buat file nya jadi dia bakal include foter dan header
	public function berkas()
	{
		check_not_login();
		$this->load->view('admin/oprec/include/header');
		$this->load->view('admin/oprec/berkas');
		$this->load->view('admin/oprec/include/footer');
	}



	// ! user page nya
	public function user_home()
	{
		$this->load->view('admin\USER\home');
	}
	public function user_history()
	{
		$this->load->view('admin\USER\history');
	}
	public function user_info_user()
	{
		$this->load->view('admin\USER\info_user');
	}
	public function user_transfer_login()
	{
		$this->load->view('admin\USER\transfer_login');
	}
	public function user_transfer()
	{
		$this->load->view('admin\USER\transfer');
	}
}