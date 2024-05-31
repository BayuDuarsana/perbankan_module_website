<!DOCTYPE html>
<html>

<head>
	<title>Transfer</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<?php
// Connect to the database
$this->load->database();
// Check if form data is submitted
if (isset($_POST['submit'])) {
	$pengirim = $_POST['pengirim'];
	$penerima_id_user = $_POST['penerima'];
	$jumlah = $_POST['jumlah'];
	// Get pengirim's saldo
	$query = $this->db->query("SELECT saldo FROM customer WHERE id = '$pengirim'");
	$row = $query->row_array();
	$saldo_pengirim = $row['saldo'];

	// Check if pengirim has enough saldo
	if ($saldo_pengirim >= $jumlah) {
		// Update pengirim's saldo
		$saldo_pengirim -= $jumlah;
		$this->db->query("UPDATE customer SET saldo = '$saldo_pengirim' WHERE id_user = '$pengirim'");

		// Check if penerima_id_user exists in the customer table
		$query = $this->db->query("SELECT * FROM customer WHERE id_user = '$penerima_id_user'");
		if ($query->num_rows() > 0) {
			$row = $query->row_array();
			$id_penerima = $row['id_user'];
			$saldo_penerima = $row['saldo'];
			// Update penerima's saldo
			$saldo_penerima += $jumlah;
			$this->db->query("UPDATE customer SET saldo = '$saldo_penerima' WHERE id_user = '$id_penerima'");

			// Insert transaction record
			$tanggal = date('Y-m-d H:i:s');
			$user = $_SESSION['id_user'];
			$this->db->query("INSERT INTO transaksi (id_pengirim, id_penerima, jumlah, tanggal, user, status) VALUES ('$user', '$id_penerima', '$jumlah', '$tanggal', '$user', 'transfer')");

			// Echo transfer success
			echo "<div class='alert alert-success'>Transfer sebesar ' Rp. $jumlah . ' berhasil dilakukan " . "</div>";
		} else {
			// If penerima_id_user is not found
			echo '<div class="container"><p class="transfer-message">Penerima tidak ditemukan</p></div>';
		}
	} else {
		// If pengirim's saldo is not enough
		echo '<div class="container"><p class="transfer-message">Saldo tidak mencukupi</p></div>';
	}
}
?>

<body>
	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-lg-6 col-md-8 col-sm-10">
				<div class="card">
					<div class="card-header">
						<h3 class="text-center">Transfer</h3>
					</div>
					<div class="card-body">
						<form method="post" action="<?php echo base_url('/oprec/user_transfer'); ?>">
							<div class="form-group">
								<label for="pengirim">Pengirim:</label>
								<select name="pengirim" class="form-control">
									<?php
									// connect to database
									$this->load->database();
									// get list of customers
									$query = $this->db->query("SELECT * FROM customer WHERE id_user = '" . $_SESSION['id_user'] . "'");
									$data = $query->result_array();
									// generate options for select input
									foreach ($data as $row) {
										echo '<option value="' . $row['id'] . '">' . $row['namaawal'] . ' ' . $row['namaakhir'] . '</option>';
									}
									?>
								</select>
							</div>
							<div class="form-group">
								<label for="penerima">Penerima:</label>
								<input type="text" name="penerima" class="form-control" required>
							</div>
							<div class="form-group">
								<label for="jumlah">Jumlah:</label>
								<input type="number" name="jumlah" class="form-control" required>
							</div>
							<div class="form-group text-center">
								<input type="submit" name="submit" class="btn btn-primary" value="Transfer">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK7ZrzOyTKcLvVp6XhUGTl7UpRXho/NQFQnJIpL2QoaJJu" crossorigin="anonymous">
		</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNS0NQN" crossorigin="anonymous">
		</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
		</script>
</body>

</html>