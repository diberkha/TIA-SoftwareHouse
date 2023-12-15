<?php  
require 'cek.php';
if (!isset($_SESSION['username'])) {
    header("Location: edit.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>TIA | Software House</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet" />

<body class="bg-secondary" style="--bs-bg-opacity: .5;">
	<div class="container col-md-6 mt-4">
		<h1>Data Addons</h1>
		<div class="card">
			<div class="card-header bg-success text-white ">
				Edit Data
			</div>
			<div class="card-body">
				<?php
				include('koneksi.php');

				$id = $_GET['id']; //mengambil id barang yang ingin diubah
				
				//menampilkan barang berdasarkan id
				$datas = mysqli_query($koneksi, "select * from data where id = '$id'");
				$row = mysqli_fetch_assoc($datas);

				?>
				<form action="" method="post" role="form" enctype="multipart/form-data">
					<div class="form-group">
						<label>Name</label>
						<!--  menampilkan nama barang -->
						<input type="text" name="name" required="" class="form-control" value="<?= $row['name']; ?>">

						<!-- ini digunakan untuk menampung id yang ingin diubah -->
						<input type="hidden" name="id" required="" value="<?= $row['id']; ?>">
					</div>
					<div class="form-group">
						<label>Price</label>
						<input type="text" name="price" class="form-control" value="<?= $row['price']; ?>">
					</div>

					<div class="form-group">
						<label>Description</label>
						<textarea class="form-control" name="description"> <?= $row['description'];?></textarea>
					</div>
					<div class = "form-group"> 
						<label>Gambar</label>
						<img src="img/<?= $row['gambar']; ?>" class="col-3">
						 <input type="hidden" name="gambar_sebelumnya" value="<?= $row['gambar']; ?>" />
					</div>
					<div class = "form-group"> 
						<label>Foto Baru (abaikan jika tidak ingin ganti foto)</label>
						 <input type="file" name="gambar" class="form-control"/>
					</div>
					<button type="submit" class="btn btn-primary" name="submit" value="simpan">Update Data</button>
				</form>

				<?php

				//jika klik tombol submit maka akan melakukan perubahan
				if (isset($_POST['submit'])) {
					$id = $_POST['id'];
					$name = $_POST['name'];
					$price = $_POST['price'];
					$description = $_POST['description'];
					$nama_foto1   = $_FILES['gambar']['name'];
			        $file_tmp1    = $_FILES['gambar']['tmp_name'];   
			        $acak1      = rand(1,99999);

			        	//cek jika foto baru tidak ada
			          if($nama_foto1 != "") {
			            $nama_unik1     = $acak1.$nama_foto1;
			            move_uploaded_file($file_tmp1,'img/'.$nama_unik1);
			          } else {
			          	//maka tetap pakai foto lama
			            $nama_unik1 = $_POST['gambar_sebelumnya'];
			          }
			      
			        $gambar = $nama_unik1;
					
					//query mengubah barang
					mysqli_query($koneksi, "update data set name='$name', price='$price', description='$description', gambar='$gambar' where id ='$id'") or die(mysqli_error($koneksi));

					//redirect ke halaman index.php
					echo "<script>alert('Data Successfully Updated.');window.location='indexaddons.php';</script>";
				}



				?>
			</div>
		</div>
	</div>


	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>