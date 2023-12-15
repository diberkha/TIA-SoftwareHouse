<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="style/login.css" />
 
<?php 
include 'koneksi.php';
error_reporting(0);
session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password == $cpassword) {
        $sql = "SELECT * FROM user WHERE nama_lengkap='$nama_lengkap'";
        $result = mysqli_query($koneksi, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO user (username, nama_lengkap, password)
                    VALUES ('$username', '$nama_lengkap', '$password')";
            $result = mysqli_query($koneksi, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $username = "";
                $nama_lengkap = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! nama lengkap Sudah Terdaftar.')</script>";
        }
         
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
    
}
?>
<script src="jquery.js"></script>
	<script>
	$(document).ready(function(){
		$('#username').blur(function(){
			$('#pesan').html('<img style="margin-left:10px; width:10px" src="loading.gif">');
			var username = $(this).val();

			$.ajax({
				type	: 'POST',
				url 	: 'proses.php',
				data 	: 'username='+username,
				success	: function(data){
					$('#pesan').html(data);
				}
			})

		});
	});
	</script>

<body class="bg-secondary" style="--bs-bg-opacity: .5;">
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->

      <!-- Icon -->
      <div class="fadeIn first">
        <h5 id="ha">TIA | Software House</h5>
      </div>

      <!-- Login Form -->
      <div class="box-login">
    <h2 class="font-weight-bold fs-2 logo mb-0" style="color: #000000">Register</h2>
    <form action="" method="POST">
		    <input type="text" name="username" id="username" placeholder="Username"><br>
		    <span id="pesan"></span>
	  <input type="text" name="nama_lengkap" class="input" placeholder="Nama Lengkap">
	  <input type="password" name="password" class="input" placeholder="Password">
      <input type="password" name="cpassword" class="input" placeholder="Konfirmasi Password"> <br>
      <input type="submit" class="submit" name="submit" value="Register">
      <a href="login.php" class="">Login</a>
      
     
    </form>
</body>
