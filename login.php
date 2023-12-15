<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet" />
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="style/login.css" />
<!------ Include the above in your HEAD tag ---------->
<?php 
 
include 'koneksi.php';
error_reporting(0);
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: indexaddons.php");
}
 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $password = md5($_POST['password']);
    setcookie('username', $username, time() + 300);
    setcookie('password', $password, time() + 300);
    if (isset($_COOKIE['username']) and isset($_COOKIE['password'])) {
        $username = $_COOKIE['username'];
        $password = $_COOKIE['password'];
        echo "<script>
                document.getElementById('username').value = '$username'
                document.getElementById('password').value = '$password'
              </script>";
          }
 
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($koneksi, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: indexaddons.php");
    } else {
        echo "<script>alert('Username atau Password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>

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
    <h2 class="font-weight-bold fs-2 logo mb-0" style="color: #000000">Login Admin</h2>
    <form action="" method="POST">
      <input type="text" name="username" class="input" placeholder="Username">
	    <input type="password" name="password" class="input" placeholder="Password"><br>
      <input type="submit" class="submit" name="submit" value="Login"><br>
      <a class="text-dark" href="register.php">Register Akun</a>
    </form>
    </div>
    </div>
  </div>
</body>