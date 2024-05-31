<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HTL extends CI_Controller
{
    public function HTL_Pemeliharaan_File_Nasabah()
    {
        check_not_login();

        // Load model
        $this->load->model('HTL_Pemeliharaan_File_Nasabah_Models');

        $data['data'] = $this->HTL_Pemeliharaan_File_Nasabah_Models->getPerusahaanData();
        $data['individu'] = $this->HTL_Pemeliharaan_File_Nasabah_Models->getIndividuData();

        if (isset($_POST['hapus'])) {
            $penanggung_jawab_ktp = intval($_POST['penanggung_jawab_ktp']);
            $this->HTL_Pemeliharaan_File_Nasabah_Models->hapusPerusahaan($penanggung_jawab_ktp);
        }

        if (isset($_POST['hps'])) {
            $no_identitas_ktp = intval($_POST['no_identitas_ktp']);
            $this->HTL_Pemeliharaan_File_Nasabah_Models->hapusIndividu($no_identitas_ktp);
        }

        $this->load->view('admin/oprec/include/header');
        $this->load->view('admin/HTL/HTL_Pemeliharaan_File_Nasabah.php', $data);
        $this->load->view('admin/oprec/include/footer');
    }

	public function HTL_Pemeliharaan_File_Rekening()
    {
        check_not_login();

        // Load model
        $this->load->model('HTL_Pemeliharaan_File_Rekening_Models');

        if (isset($_POST['submit'])) {
            $nomor_rekening = $_POST['nomor_rekening'];
            $status_rekening = $_POST['status_rekening'];
            $jenis_rekening = $_POST['jenis_rekening'];

            $this->HTL_Pemeliharaan_File_Rekening_Models->updateRekening($nomor_rekening, $status_rekening, $jenis_rekening);

            redirect('HTL/HTL_Pemeliharaan_File_Rekening');
        }

        if (isset($_POST['hapus'])) {
            $nomor_rekening = $_POST['nomor_rekening'];
            $this->HTL_Pemeliharaan_File_Rekening_Models->hapusRekening($nomor_rekening);
            redirect('HTL/HTL_Pemeliharaan_File_Rekening');
        }

        $data['data'] = $this->HTL_Pemeliharaan_File_Rekening_Models->getRekeningData();

        $this->load->view('admin/oprec/include/header');
        $this->load->view('admin/HTL/HTL_Pemeliharaan_File_Rekening.php', $data);
        $this->load->view('admin/oprec/include/footer');
    }

    public function HTL_Status_Jenis_Bunga()
    {
        check_not_login();

        // Load model
        $this->load->model('HTL_Status_Jenis_Bunga_Models');

        $data['data'] = $this->HTL_Status_Jenis_Bunga_Models->getRekeningData();

        if (isset($_POST['submit'])) {
            $bunga = $_POST['bunga'];
            $nomor_rekening = $_POST['nomor_rekening'];
            $jenis_pemilik_rekening = $_POST['jenis_pemilik_rekening'];

            $this->HTL_Status_Jenis_Bunga_Models->updateBunga($nomor_rekening, $jenis_pemilik_rekening, $bunga);

            redirect(current_url());
        }

        $this->load->view('admin/oprec/include/header');
        $this->load->view('admin/HTL/HTL_Status_Jenis_Bunga.php', $data);
        $this->load->view('admin/oprec/include/footer');
    }


    public function HTL_Daftar_Perbaikan_Transaksi()
    {
        check_not_login();

        // Load model
        $this->load->model('HTL_Daftar_Perbaikan_Transaksi_Models');

        $data['result'] = $this->HTL_Daftar_Perbaikan_Transaksi_Models->getTransaksiData();

        if (isset($_POST["edit"])) {
            $id_transaksi = $_POST["id_transaksi"];
            $jumlah_lama = $_POST["jumlah_lama"];
            $jumlah_baru = $_POST["jumlah_baru"];
            $gl_debet = $_POST["gl_debet"];
            $gl_credit = $_POST["gl_credit"];

            $result = $this->HTL_Daftar_Perbaikan_Transaksi_Models->updateTransaksi($id_transaksi, $jumlah_lama, $jumlah_baru, $gl_debet, $gl_credit);

            if ($result) {
                echo "<div class='alert alert-success'>Transaksi berhasil diperbarui</div>";
            } else {
                echo "<div class='alert alert-danger'>Transaksi gagal diperbarui</div>";
            }
            redirect(current_url());
        }

        $this->load->view('admin/oprec/include/header');
        $this->load->view('admin/HTL/HTL_Daftar_Perbaikan_Transaksi.php', $data);
        $this->load->view('admin/oprec/include/footer');
    }


    public function HTL_Daftar_Mutasi()
    {
        check_not_login();

        // Load model
        $this->load->model('HTL_Daftar_Mutasi_Models');

        if (isset($_POST['submit_filter'])) {
            $tanggal_awal = $this->input->post('tanggal_awal');
            $tanggal_akhir = $this->input->post('tanggal_akhir');

            $data['result'] = $this->HTL_Daftar_Mutasi_Models->getMutasiData($tanggal_awal, $tanggal_akhir);

            if (!empty($data['result'])) {
                $this->load->view('admin/oprec/include/header');
                $this->load->view('admin/HTL/HTL_Daftar_Mutasi', $data);
                $this->load->view('admin/oprec/include/footer');
            } else {
                $data['error'] = 'Tidak ada data mutasi pada rentang tanggal yang diberikan.';
                $this->load->view('admin/oprec/include/header');
                $this->load->view('admin/HTL/HTL_Daftar_Mutasi', $data);
                $this->load->view('admin/oprec/include/footer');
            }
        } else {
            $this->load->view('admin/oprec/include/header');
            $this->load->view('admin/HTL/HTL_Daftar_Mutasi');
            $this->load->view('admin/oprec/include/footer');
        }
    }
	

	public function HTL_Transfer()
	{
		check_not_login();
		$this->load->model('HTL_Transfer_Models');
	
		$data['rekenings'] = $this->HTL_Transfer_Models->getRekenings();
	
		if ($this->input->post('submit_transfer')) {
			$id_pengirim = $this->input->post('id_pengirim');
			$id_penerima = $this->input->post('id_penerima');
			$jumlah_transfer = $this->input->post('jumlah_transfer');
		
			$result = $this->HTL_Transfer_Models->transfer($id_pengirim, $id_penerima, $jumlah_transfer);
		
			if (is_array($result)) {
				$data['result_message'] = $result;
			} else {
				$data['result_message'] = "<p>$result</p>";
			}
		}
	
		$this->load->view('admin/oprec/include/header');
		$this->load->view('admin/HTL/HTL_Transfer', $data);
		$this->load->view('admin/oprec/include/footer');
	}
	
	
	
}