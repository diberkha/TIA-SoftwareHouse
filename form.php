<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIA | Software House!</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body class="bg-secondary">
    <div class="container">
        <div class="py-5 text-center">
            <br>
            <h2>Formulir Pemesanan Jasa Software</h2>
        </div>
        <form enctype="multipart/form-data" action="terima.php" method="post">
            <table class="table" style="border: transparent;">
                <tr>
                    <td>Nama Lengkap</td>
                    <td><input class="form-control" type="text" name="nama" require></td>
                </tr>
                <tr>
                    <td>E-mail</td>
                    <td><input class="form-control" type="email" name="email" require></td>
                </tr>
                <tr>
                    <td>Nomor Telepon</td>
                    <td><input class="form-control" type="text" name="nomorTelp" require></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><textarea class="form-control" name="alamat" require></textarea></td>
                </tr>
                <tr>
                    <td>Pilihan Produk</td>
                    <td><select class="form-select" name="layanan" require>
                            <option selected disabled>Silahkan Memilih</option>
                            <option value="Mobile Apps">Mobile App Development</option>
                            <option value="Website">Web Development</option>
                            <option value="Game">Game Development</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Pemesanan</td>
                    <td><input class="form-control" type="date" name="tanggal" /></td>
                </tr>
                <tr>
                    <td>Paket</td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="paket1" id="paket1" value="Reguler" checked>
                            <label class="form-check-label" for="paket1">Reguler</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="paket2" id="paket2" value="Custom">
                            <label class="form-check-label" for="paket2">Custom</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Metode Pembayaran</td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pembayaran" id="pembayaran" value="BANK" checked>
                            <label class="form-check-label" for="pembayaran">TRANSFER BANK</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pembayaran" id="pembayaran" value="DANA">
                            <label class="form-check-label" for="pembayaran">DANA</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pembayaran" id="pembayaran" value="GOPAY">
                            <label class="form-check-label" for="pembayaran">GOPAY</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pembayaran" id="pembayaran" value="OVO">
                            <label class="form-check-label" for="pembayaran">OVO</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Bukti Pembayaran</td>
                    <td><input type="file" name="bukti" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <br>
                        <input type="submit" name="input" value="INPUT" class="btn btn-primary btn-lg" style="color: #ffffff">
                        <input type="reset" name="clear" value="CLEAR" class="btn btn-danger btn-lg" style="color: #ffffff">

                    </td>
                </tr>
            </table>
        </form>
        </p>
    </div>
</body>

</html>