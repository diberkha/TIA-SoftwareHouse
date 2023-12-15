<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIA | Software House</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style/simulasi.css" />
</head>

<body class="bg-secondary" style="--bs-bg-opacity: .5;">
    <div class="container">
        <div class="py-5 text-center">
            <h2>TIA | Software House</h2>
        </div>
    </div>
    </section>
    <section>
        <div class="form_center">
            <form enctype="multipart/form-data" action="terimasimulasi.php" method="post">
                <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                <table>
                    <tr>
                        <td>Jenis Layanan</td>
                        <td> :
                            <select name="service">
                                <option value="MobileApp">Mobile App Development</option>
                                <option value="Web">Web Development</option>
                                <option value="Game">Game Development</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Paket</td>
                        <td> :
                            <select name="name">
                                <option value="Spesial">Spesial</option>
                                <option value="Regular">Regular</option>
                        </td>
                    </tr>
                    <tr>
                        <td>Harga Layanan</td>
                        <td> : <input type="text" name="price" value=""></td>
                    </tr>
                    <tr>
                        <td>Uang Muka</td>
                        <td> : <input type="text" name="DP"></td>
                        <td>%</td>
                    </tr>
                    <tr>
                        <td>Bunga per Tahun</td>
                        <td> :
                            <select name="bunga">
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                            %
                        </td>
                    </tr>
                    <tr>
                        <td>Jangka Waktu</td>
                        <td> :
                            <select name="tenor">
                                <option value="12">1 Tahun</option>
                                <option value="24">2 Tahun</option>
                                <option value="36">3 Tahun</option>
                                <option value="48">4 Tahun</option>
                                <option value="60">5 Tahun</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="input" value="INPUT" < />
                            <input type="reset" name="clear" value="CLEAR" < />
                    </tr>
                </table>
            </form>
        </div>
</body>

</html>