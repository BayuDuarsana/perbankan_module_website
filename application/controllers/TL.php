<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TL extends CI_Controller
{
	public function TL_Transfer()
	{
		check_not_login();
		$this->load->model('TL_Transfer_model'); // Load the TL_Transfer_model
		$this->load->database(); // Load database connection
	
		$data = $this->TL_Transfer_model->getRekeningData(); // Get rekening data from the model
	
		$transfer_data = null; // Initialize transfer_data variable
	
		if (isset($_POST['submit_transfer'])) {
			$id_pengirim = $_POST['id_pengirim'];
			$id_penerima = $_POST['id_penerima'];
			$jumlah_transfer = $_POST['jumlah_transfer'];
			$tanggal = date('Y-m-d H:i:s'); // Get the current date
	
			$result = $this->TL_Transfer_model->transfer($id_pengirim, $id_penerima, $jumlah_transfer, $tanggal);
	
			if (is_string($result)) {
				echo "<div class='alert alert-danger'>$result</div>";
			} else {
				// Store the transfer data in the $transfer_data variable
				$transfer_data = $result;
			}
		}
	
		$this->load->view('admin/oprec/include/header');
		$this->load->view('admin/TL/TL_Transfer', compact('data', 'transfer_data'));
		$this->load->view('admin/oprec/include/footer');
	}
	

	public function TL_Daftar_Mutasi()
	{
		check_not_login();
		$this->load->model('TL_Daftar_Mutasi_model'); // Load the TL_Daftar_Mutasi_model
	
		$data = [];
	
		if (isset($_POST['submit_filter'])) {
			$tanggal_awal = $_POST['tanggal_awal'];
			$tanggal_akhir = $_POST['tanggal_akhir'];
	
			$mutasi_data = $this->TL_Daftar_Mutasi_model->getMutasiData($tanggal_awal, $tanggal_akhir);
	
			if (count($mutasi_data) > 0) {
				$table = "<table class='table'>
							<thead>
								<tr>
									<th>ID Transaksi</th>
									<th>Kode Transaksi</th>
									<th>Nomor Rekening</th>
									<th>Jumlah</th>
									<th>Tanggal Waktu</th>
									<th>Staff</th>
									<th>Status</th>
									<th>Keterangan</th>
									<th>GL Debet</th>
									<th>GL Credit</th>
								</tr>
							</thead>
							<tbody>";
	
				foreach ($mutasi_data as $row) {
					$table .= "<tr>
								<td>{$row['id_transaksi']}</td>
								<td>{$row['kode_transaksi']}</td>
								<td>{$row['nomor_rekening']}</td>
								<td>{$row['jumlah']}</td>
								<td>{$row['tanggal_waktu']}</td>
								<td>{$row['staff']}</td>
								<td>{$row['status']}</td>
								<td>{$row['keterangan']}</td>
								<td>{$row['gl_debet']}</td>
								<td>{$row['gl_credit']}</td>
							</tr>";
				}
	
				$table .= "</tbody>
							</table>";
	
				$data['table'] = $table;
			} else {
				$data['table'] = "<div class='alert alert-info'>Tidak ada data mutasi pada rentang tanggal yang diberikan.</div>";
			}
		} else {
			$data['table'] = '';
		}
	
		$this->load->view('admin/oprec/include/header');
		$this->load->view('admin/TL/TL_Daftar_Mutasi', $data);
		$this->load->view('admin/oprec/include/footer');
	}
	
	
	public function TL_Tariktunai()
	{
		check_not_login();
		$this->load->model('TL_Tariktunai_model'); // Load the TL_Tariktunai_model
	
		$data = [];
	
		if (isset($_POST['submit_setor'])) {
			$nomor_rekening = $_POST['id_pengirim'];
			$jumlah = $_POST['jumlah'];
			$tanggal_waktu = date('Y-m-d H:i:s');
			$kode_transaksi = 'TT';
			$staff = 'Teller';
			$status = 'Tarik Tunai';
			$keterangan = 'Tarik Tunai';
			$gl_debet = NULL;
			$gl_credit = $nomor_rekening;
	
			$tipe_rekening = $this->TL_Tariktunai_model->checkRekeningType($nomor_rekening);
			$nama = $this->TL_Tariktunai_model->getNama($tipe_rekening, $nomor_rekening);
			
			$this->TL_Tariktunai_model->updateSaldo($tipe_rekening, $nomor_rekening, $jumlah);
	
			$this->TL_Tariktunai_model->insertTtransaksi($kode_transaksi, $nomor_rekening, $jumlah, $tanggal_waktu, $staff, $status, $keterangan, $gl_debet, $gl_credit);
	
			$success_message = "<div class='alert alert-success'>Tarik Tunai berhasil!</div>";
			$success_message .= "<div class='alert alert-info'>
			<strong>Nama:</strong> $nama<br>
			<strong>Tanggal:</strong> $tanggal_waktu<br>
			<strong>Nomor Bukti:</strong> TT<br>
			<strong>Keterangan:</strong> Tarik Tunai<br>
			<strong>G.L Debet:</strong> NULL<br>
			<strong>G.L Credit:</strong> $nomor_rekening<br>
			<strong>Jumlah:</strong> " . number_format($jumlah, 2, ',', '.') . "
			</div>";
	
			$data['success_message'] = $success_message;
		} else {
			$data['success_message'] = "";
		}
	
		$this->load->view('admin/oprec/include/header');
		$this->load->view('admin/TL/TL_Tariktunai', $data);
		$this->load->view('admin/oprec/include/footer');
	}
	
	
	public function TL_Setor_Tunai()
	{
		check_not_login();
		$this->load->model('TL_Setor_Tunai_model'); // Load the TL_Setor_Tunai_model
	
		$data = [];
	
		if (isset($_POST['submit_setor'])) {
			$nomor_rekening = $_POST['id_pengirim'];
			$jumlah = $_POST['jumlah'];
			$tanggal_waktu = date('Y-m-d H:i:s');
			$kode_transaksi = 'TT';
			$staff = 'Teller';
			$status = 'Tarik Tunai';
			$keterangan = 'Tarik Tunai';
			$gl_debet = NULL;
			$gl_credit = $nomor_rekening;
	
			$tipe_rekening = $this->TL_Setor_Tunai_model->checkRekeningType($nomor_rekening);
			$nama = $this->TL_Setor_Tunai_model->getNama($tipe_rekening, $nomor_rekening);
			
			$this->TL_Setor_Tunai_model->updateSaldo($tipe_rekening, $nomor_rekening, $jumlah);
	
			$this->TL_Setor_Tunai_model->insertTtransaksi($kode_transaksi, $nomor_rekening, $jumlah, $tanggal_waktu, $staff, $status, $keterangan, $gl_debet, $gl_credit);
	
			$success_message = "<div class='alert alert-success'>Tarik Tunai berhasil!</div>";
			$success_message .= "<div class='alert alert-info'>
			<strong>Nama:</strong> $nama<br>
			<strong>Tanggal:</strong> $tanggal_waktu<br>
			<strong>Nomor Bukti:</strong> TT<br>
			<strong>Keterangan:</strong> Setor Tunai<br>
			<strong>G.L Debet:</strong> NULL<br>
			<strong>G.L Credit:</strong> $nomor_rekening<br>
			<strong>Jumlah:</strong> " . number_format($jumlah, 2, ',', '.') . "
			</div>";
	
			$data['success_message'] = $success_message;
		} else {
			$data['success_message'] = "";
		}
	
		$this->load->view('admin/oprec/include/header');
		$this->load->view('admin/TL/TL_Setor_Tunai', $data);
		$this->load->view('admin/oprec/include/footer');
	}
	
	public function TL_Daftar_Penarikan()
	{
		check_not_login();
		$this->load->model('TL_Daftar_Penarikan_model'); // Load the TL_Daftar_Penarikan_model
	
		$data = $this->TL_Daftar_Penarikan_model->getTtransaksiByKodeTransaksi('TT');
	
		$this->load->view('admin/oprec/include/header');
		$this->load->view('admin/TL/TL_Daftar_Penarikan', array('data' => $data));
		$this->load->view('admin/oprec/include/footer');
	}
	

	public function TL_Daftar_Setor()
	{
		check_not_login();
		$this->load->model('TL_Daftar_Setor_model'); // Load the TL_Daftar_Setor_model
	
		$data = $this->TL_Daftar_Setor_model->getTtransaksiByKodeTransaksi('ST');
	
		$this->load->view('admin/oprec/include/header');
		$this->load->view('admin/TL/TL_Daftar_Setor', array('data' => $data));
		$this->load->view('admin/oprec/include/footer');
	}
	


	public function TL_Daftar_Transfer()
	{
		check_not_login();
		$this->load->model('TL_Daftar_Transfer_model'); // Load the TL_Daftar_Transfer_model
	
		$data = $this->TL_Daftar_Transfer_model->getTtransaksiByKodeTransaksi('TRF');
	
		$this->load->view('admin/oprec/include/header');
		$this->load->view('admin/TL/TL_Daftar_Transfer', array('data' => $data));
		$this->load->view('admin/oprec/include/footer');
	}
	

}