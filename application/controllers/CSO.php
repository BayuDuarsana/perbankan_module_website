<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CSO extends CI_Controller
{
    public function CSO_Pemeliharaan_Batasan() 
    {
        check_not_login();
        $this->load->database();

        // query untuk menampilkan data
        $query = $this->db->query('SELECT * FROM manlan_admin');
        $data = $query->result_array();

        // jika tombol submit ditekan
        if (isset($_POST['submit'])) {
            // mengambil nilai dari form
            $id_user = $_POST['id_user'];
            $email = $_POST['email'];
            $nama = $_POST['nama'];
            $sebagai = $_POST['sebagai'];

            // query untuk mengupdate data
            $this->db->set('email', $email);
            $this->db->set('nama', $nama);
            $this->db->set('sebagai', $sebagai);
            $this->db->where('id_user', $id_user);
            $this->db->update('manlan_admin');

            // redirect to base_url
            redirect(base_url('CSO/CSO_Pemeliharaan_Batasan'));
        }

        $this->load->view('admin/oprec/include/header');
        $this->load->view('admin/CSO/CSO_Pemeliharaan_Batasan', ['data' => $data]);
        $this->load->view('admin/oprec/include/footer');
    }


	public function CSO_Rekening() //ini buat rekening kaya blokir aktif tutup
	{
                $this->load->database();
                $query = $this->db->query("SELECT nomor_rekening, saldo, status_rekening, jenis_rekening, jenis_pemilik_rekening FROM rekening_perusahaan
                                           UNION ALL
                                           SELECT nomor_rekening, saldo, status_rekening, jenis_rekening, jenis_pemilik_rekening FROM rekening_individu");
                $data = $query->result_array();
        
                $this->load->view('admin/oprec/include/header');
                $this->load->view('admin/CSO/CSO_Rekening', ['data' => $data]);
                $this->load->view('admin/oprec/include/footer');
    }


	public function CSO_Otoritas_Transaksi() //ini buat batasan transaksi teller
	{
		check_not_login();
		$this->load->view('admin/oprec/include/header');
		$this->load->view('admin/CSO/CSO_Otoritas_Transaksi');
		$this->load->view('admin/oprec/include/footer');
	}

    public function CSO_Menambah_User()
	{
        check_not_login();
		$this->load->view('admin/oprec/include/header');
		$this->load->view('admin/CSO/CSO_Menambah_User');
		$this->load->view('admin/oprec/include/footer');
	}

    public function CSO_Pemeliharaan_bunga()
    {
    	check_not_login();
    	$this->load->view('admin/oprec/include/header');
    	$this->load->view('admin/CSO/CSO_Pemeliharaan_bunga');
    	$this->load->view('admin/oprec/include/footer');
    }
}