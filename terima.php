<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIA | Software House</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style/terima.css" />
</head>

<body class="bg-secondary" style="--bs-bg-opacity: .5;">
    <!-- PHP -->
    <?php
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nomorhp = $_POST['nomorTelp'];
    $alamat = $_POST['alamat'];
    $layanan = $_POST['layanan'];
    $i = 0;
    if (isset($_POST['paket1'])) {
        $paket[$i] = $_POST['paket1'];
        $i++;
    }
    if (isset($_POST['paket2'])) {
        $paket[$i] = $_POST['paket2'];
        $i++;
    }
    $paketlist = implode(", ", $paket);
    $tanggal = $_POST['tanggal'];
    $bayar = $_POST['pembayaran'];
    ?>
    <?php
    $uploaddir = 'uploads/';
    $uploadfile = $uploaddir . $_FILES['bukti']['name'];
    if (
        $_FILES['bukti']['type'] == "image/png" ||
        $_FILES['bukti']['type'] == "image/jpg"
    ) {
        if (
            move_uploaded_file(
                $_FILES['bukti']['tmp_name'],
                $uploadfile
            )
        ) {
            echo "";
        } else {
            echo "";
        }
    }
    ?>
    <section class="">
        <h2 align="center">Data Pemesan</h2>
        <table align="center">
            <tr>
                <td>Nama Lengkap</td>
                <td> :
                    <?= $nama ?>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td> :
                    <?= $email ?>
                </td>
            </tr>
            <tr>
                <td>Nomor HP</td>
                <td> :
                    <?= $nomorhp ?>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td> :
                    <?= $alamat ?>
                </td>
            </tr>
            <tr>
                <td>Pilihan Layanan</td>
                <td> :
                    <?= $layanan ?>
                </td>
            </tr>
            <tr>
                <td>Paket</td>
                <td> :
                    <?= $paketlist ?>
                </td>
            </tr>
            <tr>
                <td>Tanggal Pesan</td>
                <td> :
                    <?= $tanggal ?>
                </td>
            </tr>
            <tr>
                <td>Metode Pembayaran</td>
                <td> :
                    <?= $bayar ?>
                </td>
            </tr>
        </table>
    </section>
    <section>
        <p class="button"><a class="btn btn-dark btn-lg px-4 gap-3" style="color: #fbe240"
                href="simulasi.php">Lanjutkan</a></p>
    </section>
</body>

</html>