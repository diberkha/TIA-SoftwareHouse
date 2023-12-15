<?php  
require 'cek.php';
if (!isset($_SESSION['username'])) {
    header("Location: edit.php");
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Addons TIA | Software House</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/dist/css/bootstrap.min.css">

<body class="bg-secondary" style="--bs-bg-opacity: .5;">
	<?php
	echo "<br>";
	$sepuluhdetik = time() + 300;
	?>
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
		<h1>Data Addons</h1>
		<div class="card">
			<div class="card-header bg-success text-white">
				Add Data
			</div>
			<div class="card-body">
				<form action="" method="post" role="form" enctype="multipart/form-data">
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" required="" class="form-control"/>
					</div>
					<div class="form-group">
						<label>Price</label>
						<input type="text" name="price" class="form-control"/>
					</div>
					<div class="form-group">
						<label>Description</label>
						<textarea class="form-control" name="description"></textarea>
					</div>
					<div class="form-group">
						<label>Gambar</label>
						<input type="file" name="gambar" class="form-control">
					</div>

					<button type="submit" class="btn btn-primary" name="submit" value="simpan">Save Data</button>
				</form>

				<?php
				include('koneksi.php');
				//melakukan pengecekan jika button submit diklik maka akan menjalankan perintah simpan dibawah ini
				if (isset($_POST['submit'])) {
					//menampung data dari inputan
					$name = $_POST['name'];
					$price = $_POST['price'];
					$description = $_POST['description'];
					$nama_foto1   = $_FILES['gambar']['name'];
			        $file_tmp1    = $_FILES['gambar']['tmp_name'];   
			        //untuk acak nama file jadi sebagai angka unik, agar nama file tidak sama
			        $acak1      = rand(1,99999);


			          if($nama_foto1 != "") {
			          	//memberi nama baru pada foto yang diupload
			            $nama_unik1     = $acak1.$nama_foto1;
			            //upload ke folder foto
			            move_uploaded_file($file_tmp1,'img/'.$nama_unik1);
			          } else {
			            $nama_unik1 = NULL;
			          }
			          
			        $gambar = $nama_unik1;
				
				
					//query untuk menambahkan barang ke database, pastikan urutan nya sama dengan di database
					$datas = mysqli_query($koneksi, "insert into data (name,price,description,gambar)values('$name', '$price', '$description', '$gambar')") or die(mysqli_error($koneksi));
					//id barang tidak dimasukkan, karena sudah menggunakan AUTO_INCREMENT, id akan otomatis
				
					//ini untuk menampilkan alert berhasil dan redirect ke halaman index
					echo "<script>alert('Data Saved Successfully.');window.location='indexaddons.php';</script>";
				}
				?>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>