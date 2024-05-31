<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cs extends CI_Controller
{
	// ! CS Pendaftaran Nasabah Individu
	public function CS_Pendaftaran_Nasabah_Individu()
	{
		$this->load->model('CS_Pendaftaran_Nasabah_Individu_model');
		$this->load->library('form_validation');
		check_not_login();
		$data = array(
			'nama' => $this->input->post('nama'),
			'no_identitas_ktp' => $this->input->post('no_identitas_ktp'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'alamat' => $this->input->post('alamat'),
			'nama_ibu_kandung' => $this->input->post('nama_ibu_kandung'),
			'nomor_telpon' => $this->input->post('nomor_telpon')
		);
		$this->form_validation->set_rules('nama', 'Nama Lengkap');
		$this->form_validation->set_rules('no_identitas_ktp', 'No Identitas KTP', 'required|numeric|min_length[8]|max_length[16]');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('nama_ibu_kandung', 'Nama Ibu Kandung', 'required|alpha');
		$this->form_validation->set_rules('nomor_telpon', 'Nomor Telepon', 'required|numeric');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/oprec/include/header');
			$this->load->view('admin/CS/CS_Pendaftaran_Nasabah_Individu');
			$this->load->view('admin/oprec/include/footer');
		} else {
			if ($this->CS_Pendaftaran_Nasabah_Individu_model->insert_data($data)) {
				$this->session->set_flashdata('success', 'Data berhasil diinput');
			} else {
				$this->session->set_flashdata('error', 'Data insert failed');
			}
			redirect('Cs/CS_Pendaftaran_Nasabah_Individu');
		}
	}


	public function CS_Pembukaan_Rekening_Individu()
	{
		$this->load->model('CS_Pembukaan_Rekening_Individu_Model'); // Load the CS_Pembukaan_Rekening_Individu_Model
	
		$nama = "";
		$output_message = "";
		$output_class = "";
	
		// When the submit button is clicked, perform the insert process
		if (isset($_POST['submit'])) {
			$no_identitas_ktp = $_POST['no_identitas_ktp'];
	
			// Check if no_identitas_ktp is valid using CS_Pembukaan_Rekening_Individu_Model
			if ($this->CS_Pembukaan_Rekening_Individu_Model->checkNoIdentitasKTP($no_identitas_ktp)) {
				$individu = $this->db->get_where('individu', array('no_identitas_ktp' => $no_identitas_ktp))->row();
				$nama = $individu->nama;
	
				// If valid, get data from the form
				$kewarganegaraan = $_POST['kewarganegaraan'];
				$provinsi = $_POST['provinsi'];
				$kota = $_POST['kota'];
				$pekerjaan = $_POST['pekerjaan'];
				$nama_instansi = $_POST['nama_instansi'];
				$jenis_rekening = $_POST['jenis_rekening'];
				$bunga = $_POST['bunga'];
				$status_rekening = $_POST['status_rekening'];
				$nomor_rekening = $_POST['nomor_rekening'];
				$password = $_POST['password'];
				$saldo = $_POST['saldo'];
				$tanggal_pembukaan = $_POST['tanggal_pembukaan'];
	
				// Insert data into rekening_individu table using CS_Pembukaan_Rekening_Individu_Model
				$insert_data = array(
					'no_identitas_ktp' => $no_identitas_ktp,
					'kewarganegaraan' => $kewarganegaraan,
					'provinsi' => $provinsi,
					'kota' => $kota,
					'pekerjaan' => $pekerjaan,
					'nama_instansi' => $nama_instansi,
					'jenis_rekening' => $jenis_rekening,
					'bunga' => $bunga,
					'status_rekening' => $status_rekening,
					'nomor_rekening' => $nomor_rekening,
					'password' => $password,
					'saldo' => $saldo,
					'tanggal_pembukaan' => $tanggal_pembukaan
				);
	
				$this->CS_Pembukaan_Rekening_Individu_Model->insertRekeningIndividu($insert_data);
				$output_message = "Data berhasil disimpan";
				$output_class = "alert-success";
			} else {
				$output_message = "No Identitas KTP tidak valid";
				$output_class = "alert-danger";
			}
		}
	
		$data['output_message'] = $output_message;
		$data['output_class'] = $output_class;
		$this->load->view('admin/oprec/include/header');
		$this->load->view('admin/CS/CS_Pembukaan_Rekening_Individu', $data);
		$this->load->view('admin/oprec/include/footer');
	}
	



	// ! CS_Daftar_Nasabah_Individu
	public function CS_Daftar_Nasabah_Individu()
	{
		$this->load->model('CS_Daftar_Nasabah_Individu_model'); // Load the CS_Daftar_Nasabah_Individu_model
	
		$individu = $this->CS_Daftar_Nasabah_Individu_model->getIndividuData(); // Get individu data from the model
	
		$data = array('individu' => $individu); // create an array with the data
	
		$this->load->view('admin/oprec/include/header');
		$this->load->view('admin/CS/CS_Daftar_Nasabah_Individu', $data);
		$this->load->view('admin/oprec/include/footer');
	}
	


	// ! CS_Daftar_Rekening_Individu
	public function CS_Daftar_Rekening_Individu()
	{
		$this->load->model('CS_Daftar_Rekening_Individu');
		check_not_login();
		
		$data['rekening'] = $this->CS_Daftar_Rekening_Individu->get_all_data();
		$this->load->view('admin/oprec/include/header');
		$this->load->view('admin/CS/CS_Daftar_Rekening_Individu', $data);
		$this->load->view('admin/oprec/include/footer');
	}


	// ! CS_Pendaftaran_Nasabah_Perusahaan
	public function CS_Pendaftaran_Nasabah_Perusahaan()
	{
		$this->load->model('CS_Pendaftaran_Nasabah_Perusahaan_model'); // Load the CS_Pendaftaran_Nasabah_Perusahaan_model
		$this->load->database(); // Load database connection
	
		// When the submit button is clicked, perform the insert process
		if (isset($_POST['submit'])) {
			$npwp = $_POST['npwp'];
			$nib = $_POST['nib'];
			$nama_perusahaan = $_POST['nama_perusahaan'];
			$no_identitas_ktp = $_POST['no_identitas_ktp'];
			$penanggung_jawab_ktp = $_POST['penanggung_jawab_ktp'];
	
			$data = array(
				'npwp' => $npwp,
				'nib' => $nib,
				'nama_perusahaan' => $nama_perusahaan,
				'no_identitas_ktp' => $no_identitas_ktp,
				'penanggung_jawab_ktp' => $penanggung_jawab_ktp
			);
	
			$this->CS_Pendaftaran_Nasabah_Perusahaan_model->insertPerusahaanData($data);
		}
	
		$this->load->view('admin/oprec/include/header');
		$this->load->view('admin/CS/CS_Pendaftaran_Nasabah_Perusahaan');
		$this->load->view('admin/oprec/include/footer');
	}
	
	


	// ! CS_Pembukaan_Rekening_Perusahaan
	public function CS_Pembukaan_Rekening_Perusahaan()
{
    $this->load->model('CS_Pembukaan_Rekening_Perusahaan_model'); // Load the CS_Pembukaan_Rekening_Perusahaan_model

    $output_message = "";
    $output_class = "";

    // When the submit button is clicked, perform the insert process
    if (isset($_POST['submit'])) {
        $penanggung_jawab_ktp = $_POST['penanggung_jawab_ktp'];

        // Check if penanggung_jawab_ktp is valid using CS_Pembukaan_Rekening_Perusahaan_model
        if ($this->CS_Pembukaan_Rekening_Perusahaan_model->checkPenanggungJawabKTP($penanggung_jawab_ktp)) {
            $perusahaan = $this->db->get_where('perusahaan', array('penanggung_jawab_ktp' => $penanggung_jawab_ktp))->row();
            $nama_perusahaan = $perusahaan->nama_perusahaan;

            // If valid, get data from the form
            $kewarganegaraan = $_POST['kewarganegaraan'];
            $provinsi = $_POST['provinsi'];
            $kota = $_POST['kota'];
            $jenis_rekening = $_POST['jenis_rekening'];
            $bunga = $_POST['bunga'];
            $status_rekening = $_POST['status_rekening'];
            $nomor_rekening = $_POST['nomor_rekening'];
            $password = $_POST['password'];
            $saldo = $_POST['saldo'];
            $tanggal_pembukaan = $_POST['tanggal_pembukaan'];

            // Insert data into rekening_perusahaan table using CS_Pembukaan_Rekening_Perusahaan_model
            $insert_data = array(
                'penanggung_jawab_ktp' => $penanggung_jawab_ktp,
                'kewarganegaraan' => $kewarganegaraan,
                'provinsi' => $provinsi,
                'kota' => $kota,
                'nama_perusahaan' => $nama_perusahaan,
                'jenis_rekening' => $jenis_rekening,
                'bunga' => $bunga,
                'status_rekening' => $status_rekening,
                'nomor_rekening' => $nomor_rekening,
                'password' => $password,
                'saldo' => $saldo,
                'tanggal_pembukaan' => $tanggal_pembukaan
            );

            $this->CS_Pembukaan_Rekening_Perusahaan_model->insertRekeningPerusahaan($insert_data);
            $output_message = "Data berhasil disimpan";
            $output_class = "alert-success";
        } else {
            $output_message = "No Identitas KTP tidak valid";
            $output_class = "alert-danger";
        }
    }

    $data['output_message'] = $output_message;
    $data['output_class'] = $output_class;
    $this->load->view('admin/oprec/include/header');
    $this->load->view('admin/CS/CS_Pembukaan_Rekening_Perusahaan', $data);
    $this->load->view('admin/oprec/include/footer');
}



public function CS_Daftar_Nasabah_Perusahaan()
{
    $this->load->model('CS_Daftar_Nasabah_Perusahaan_model'); // Load the CS_Daftar_Nasabah_Perusahaan_model
    $this->load->database(); // Load database connection

    $perusahaan = $this->CS_Daftar_Nasabah_Perusahaan_model->getPerusahaanData(); // Get perusahaan data from the model

    $data = array('perusahaan' => $perusahaan); // create an array with the data

    $this->load->view('admin/oprec/include/header');
    $this->load->view('admin/CS/CS_Daftar_Nasabah_Perusahaan', $data);
    $this->load->view('admin/oprec/include/footer');
}

	

public function CS_Daftar_Rekening_Perusahaan()
{
    $this->load->model('CS_Daftar_Rekening_Perusahaan_model'); // Load the CS_Daftar_Rekening_Perusahaan_model
    $this->load->database(); // Load database connection

    $data = $this->CS_Daftar_Rekening_Perusahaan_model->getRekeningPerusahaanData(); // Get rekening_perusahaan data from the model

    $this->load->view('admin/oprec/include/header');
    $this->load->view('admin/CS/CS_Daftar_Rekening_Perusahaan', array('data' => $data));
    $this->load->view('admin/oprec/include/footer');
}

	
public function CS_Pemeliharaan_File_rekening()
{
    $this->load->model('CS_Pemeliharaan_File_rekening_model'); // Load the CS_Pemeliharaan_File_rekening_model
    $this->load->database(); // Load database connection

    // Edit data rekening
    if (isset($_POST['submit'])) {
        $nomor_rekening = $_POST['nomor_rekening'];
        $bunga = $_POST['bunga'];
        $jenis_rekening = $_POST['jenis_rekening'];

        // Update data rekening using CS_Pemeliharaan_File_rekening_model
        $this->CS_Pemeliharaan_File_rekening_model->updateRekeningData($nomor_rekening, $bunga, $jenis_rekening);

        header('Location: ' . base_url() . 'Cs/CS_Pemeliharaan_File_Rekening/');
        exit();
    }

    $data = $this->CS_Pemeliharaan_File_rekening_model->getRekeningData(); // Get rekening data from the model

    $this->load->view('admin/oprec/include/header');
    $this->load->view('admin/CS/CS_Pemeliharaan_File_rekening', array('data' => $data));
    $this->load->view('admin/oprec/include/footer');
}

	
}