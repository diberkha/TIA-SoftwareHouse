<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIA | Software House</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style/terimasimulasi.css" />
</head>

<body class="bg-secondary" style="--bs-bg-opacity: .5;">
    <div class="container-fluid bg-dark shadow-sm border-bottom h-80 fixed-top py-2">
        <header class="d-flex flex-wrap align-items-center justify-content-between px-md-4 px-sm-1">
            <a href="index.php?target=home"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <span>
                    <p class="font-weight-bold fs-2 logo mb-0" style="color: #fbe240">TIA | Software House</p>
                </span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="index.php?target=home" class="nav-link" style="color: #fbe240">Home</a>
                </li>
                <li class="nav-item"><a href="index.php?target=about" class="nav-link" style="color: #fbe240">About
                        Us</a></li>
                <li class="nav-item"><a href="index.php?target=mobile" class="nav-link" style="color: #fbe240">Mobile
                        App</a></li>
                <li class="nav-item"><a href="index.php?target=web" class="nav-link" style="color: #fbe240">Web</a></li>
                <li class="nav-item"><a href="index.php?target=game" class="nav-link" style="color: #fbe240">Game</a>
                </li>
                <li class="nav-item"><a href="index.php?target=addons" class="nav-link"
                        style="color: #fbe240">Addons</a></li>
                <li class="nav-item"><a href="index.php?target=login" class="nav-link" style="color: #fbe240">Log In</a>
                </li>
            </ul>
        </header>
    </div>
    <?php
    $SERVICE = $_POST['service'];
    $PAKET = $_POST['paket'];
    $PRICE = $_POST['price'];
    $BUNGA = $_POST['bunga'];
    $DP = $_POST['DP'];
    $TENOR = $_POST['tenor'];
    ?>

    <?php
    if ($DP < 30) {
    } else if ($DP > 100) {
    }

    $UANGMUKA = $PRICE * ($DP / 100); //DP
    $PLPINJAMAN = $PRICE - $DP; //PLAFON PINJAMAN
    $ANGSURANPOKOK = $PLPINJAMAN / $TENOR; //ANGSSURAN POKOK
    $ANGSURANBUNGA = ($PLPINJAMAN * ($BUNGA / 100)) / 12; //ANGSURAN BUNGA
    $TOTALANGSURAN = $ANGSURANPOKOK + $ANGSURANBUNGA; //TOTAL ANGSURAN
    ?>

    <!-- FORMAT RUPIAH -->
    <?php
    function rupiah($angka)
    {
        $jadi = "Rp " . number_format($angka, 2, ',', '.');
        return $jadi;
    }
    ?>

    <section>
        <div class="container">
            <div class="py-5 text-center">
                <h2>DATA ANDA</h2>
                <p class="lead">Berikut merupakan data anda</p>
            </div>
        </div>
        <div class="center">
            <table class="table table-striped">
                <tr>
                    <td>Jenis Layanan</td>
                    <td> :
                        <?= $SERVICE ?>
                    </td>
                </tr>
                <tr>
                    <td>Nama Paket</td>
                    <td> :
                        <?= $PAKET ?>
                    </td>
                </tr>
                <tr>
                    <td>Harga Layanan</td>
                    <td> :
                        <?= rupiah($PRICE) ?>
                    </td>
                </tr>
                <tr>
                    <td>Uang Muka</td>
                    <td> :
                        <?= rupiah($DP) ?>
                    </td>
                </tr>
                <tr>
                    <td>Bunga per Tahun</td>
                    <td> :
                        <?= $BUNGA ?>%
                    </td>
                </tr>
                <tr>
                    <td>Jangka Waktu</td>
                    <td> :
                        <?= $TENOR ?> Bulan
                    </td>
                </tr>
            </table>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="py-5 text-center">
                <h2>PLAFON PINJAMAN ANDA</h2>
                <p class="lead">Berikut merupakan plafon pinjaman anda</p>
            </div>
        </div>
        <div class="center">
            <table class="table table-striped">
                <tr>
                    <td>Harga Layanan</td>
                    <td> :
                        <?= rupiah($PRICE) ?>
                    </td>
                </tr>
                <tr>
                    <td>Uang Muka</td>
                    <td> :
                        <?= rupiah($DP) ?>
                    </td>
                </tr>
                <tr>
                    <td><b>Plafon Pinjaman</td>
                    <td><b> :
                            <?= rupiah($PLPINJAMAN) ?>
                    </td>
                </tr>
            </table>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="py-5 text-center">
                <h2>ANGSURAN ANDA</h2>
                <p class="lead">Berikut merupakan data angsuran anda per bulan</p>
            </div>
        </div>
        <div class="center">
            <table class="table table-striped">
                <tr>
                    <td>Angsuran Pokok per Bulan</td>
                    <td> :
                        <?= rupiah($ANGSURANPOKOK) ?>
                    </td>
                </tr>
                <tr>
                    <td>Angsuran Bunga per Bulan</td>
                    <td> :
                        <?= rupiah($ANGSURANBUNGA) ?>
                    </td>
                </tr>
                <tr>
                    <td><b>Total Angsuran per Bulan</td>
                    <td><b> :
                            <?= rupiah($TOTALANGSURAN) ?>
                    </td>
                </tr>
            </table>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="py-5 text-center">
                <h2>TABEL ANGSURAN</h2>
                <p class="lead">Berikut merupakan tabel angsuran anda</p>
            </div>
        </div>
        <div class="center">
            <table class="table table-striped">
                <tr>
                    <th>Bulan</th>
                    <th>Angsuran Bunga</th>
                    <th>Angsuran Pokok</th>
                    <th>Total Angsuran</th>
                    <th>Sisa Wajib</th>
                </tr>
                <tr>
                    <td>0</td>
                    <td>Rp 0,00</td>
                    <td>Rp 0,00</td>
                    <td>Rp 0,00</td>
                    <td>
                        <?= rupiah($PLPINJAMAN) ?>
                    </td>
                </tr>

                <!-- PERULANGAN -->
                <?php
                $SISAWAJIB = $PLPINJAMAN;
                for ($i = 1; $i <= $TENOR; $i++) {
                    $SISAWAJIB = $SISAWAJIB - $ANGSURANPOKOK;
                    echo "
                            <tr>";
                    echo "
                        <td>" . $i . "</td>
                        ";
                    echo "
                        <td>" . rupiah($ANGSURANBUNGA) . "</td>
 
                        ";
                    echo "
                        <td>" . rupiah($ANGSURANPOKOK) . "</td>
 
                        ";
                    echo "
                        <td>" . rupiah($TOTALANGSURAN) . "</td>
 
                        ";
                    echo "
                        <td>" . rupiah($SISAWAJIB) . "</td>
 
                        ";
                    echo "</tr>
 
                        ";
                }

                ?>
                <?php
                $TOTALAB = $ANGSURANBUNGA * $TENOR; //TOTAL ANGSURAN BUNGA
                $TOTALAP = $ANGSURANPOKOK * $TENOR; //TOTAL ANGSURAN POKOK
                $TOTALA = $TOTALANGSURAN * $TENOR; //TOTAL ANGSURAN (ANGSURAN BUNGA + ANGSURAN POKOK)
                ?>

                <tr>
                    <th>Total</th>
                    <th>
                        <?= rupiah($TOTALAB) ?>
                    </th>
                    <th>
                        <?= rupiah($TOTALAP) ?>
                    </th>
                    <th>
                        <?= rupiah($TOTALA) ?>
                    </th>
                    <th>0</th>
                </tr>
            </table>
        </div>
    </section>
</body>

</html>