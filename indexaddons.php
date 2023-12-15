<?php  
require 'cek.php';
if (!isset($_SESSION['username'])) {
    header("Location: indexaddons.php");
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Addons TIA | Software House</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/dist/css/bootstrap.min.css">

<body class="bg-secondary" style="--bs-bg-opacity: .5;">
	<div class="container">
		<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
			<a href="index.php?target=home"
				class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
				<span class="fs-4">TIA | Software House</span>
			</a>

			<ul class="nav nav-pills">
				<li class="nav-item"><a href="logout.php" class="nav-link">Log Out</a></li>
			</ul>
		</header>
	</div>
	<div class="container col-md-6 mt-4">
		<center>
			<h1>Addons Layanan TIA | Software House</h1>
		</center>
		<div class="card">
			<div class="card-header bg-success text-white ">
				DATA ADDONS <a href="tambah.php" class="btn btn-sm btn-primary float-right">Add</a>
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Number</th>
							<th>Service</th>
							<th>Price</th>
							<th>Description</th>
							<th>Gambar</th>
							<th></th>						
						</tr>
					</thead>
					<tbody>
						<?php
						include('koneksi.php'); //memanggil file koneksi
						$datas = mysqli_query($koneksi, "select * from data") or die(mysqli_error($koneksi));
						//script untuk menampilkan data barang
						
						$number = 1; //untuk pengurutan nomor
						
						//melakukan perulangan
						while ($row = mysqli_fetch_assoc($datas)) {
							?>

							<tr>
								<td>
									<?= $number; ?>
								</td>
								<td>
									<?= $row['name']; //untuk menampilkan nama ?>
								</td>
								<td>Rp
									<?= $row['price']; ?>
								</td>
								<td>
									<?= $row['description']; ?>
								</td>
								<td>
									<a href="img/<?= $row['gambar']; ?>" target="_blank">
									<img src="img/<?= $row['gambar']; ?>" style="width: 100px;">
									</a>
								</td>
								<td>
									<a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
									<a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger"
										onclick="return confirm('Are you sure want to delete?');">Delete</a>
								</td>
							</tr>

							<?php $number++;
						} ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>