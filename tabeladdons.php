<!DOCTYPE html>
<html>

<head>
	<title>Addons TIA | Software House</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/dist/css/bootstrap.min.css">

<body class="bg-secondary" style="--bs-bg-opacity: .5;">
	<div class="container col-md-6 mt-4">
		<center>
			<h1>Addons Layanan TIA | Software House</h1>
		</center>
		<div class="card">
			<div class="card-header bg-success text-white ">
				Data Addons <a href="produk.php" class="btn btn-sm btn-warning float-right">PRINT</a>
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
						</tr>
					</thead>
					<tbody>
						<?php
						include('koneksi.php');
						$datas = mysqli_query($koneksi, "select * from data") or die(mysqli_error($koneksi));
						$no = 1;
						while ($row = mysqli_fetch_assoc($datas)) {
							?>
							<tr>
								<td>
									<?= $no; ?>
								</td>
								<td>
									<?= $row['name']; ?>
								</td>
								<td>Rp
									<?= $row['price']; ?>
								</td>
								<td>
									<?= $row['description']; ?>
								</td>
								<td>
								<img src="img/<?= $row['gambar']; ?>" class="col-3">
						 		<input type="hidden" name="gambar_sebelumnya" value="<?= $row['gambar']; ?>" />
								</td>
							</tr>
							<?php $no++;
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