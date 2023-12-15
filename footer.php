<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIA | Software House</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style/home.css" />
</head>

<body>
    <footer class="bg-dark text-light text-center text-small">
        <section class="d-flex justify-content justify-content-lg-between p-4 border-bottom">
            <div class="container text-md-start mt-5">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-xl-6">
                        <h6 class="text-uppercase fw-bold mb-4">Contact Us</h6>
                        <p>
                            WhatsApp: +62 822 9062 7484<br>
                            Email: SoftwareTIA@gmail.com<br>
                            Twitter: @TIA_SoftwareHouse<br>
                            Instagram: @TIA_SoftwareHouse
                        </p>
                        <h6>
                            <?php
                            $today = date("l, d F Y - h:i:s a");
                            ?>
                            <?= $today ?>
                        </h6>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6">
                        <h6 class="text-uppercase fw-bold mb-4">Address</h6>
                        <p>
                            Jl. Ir. Sutami No. 36,<br>
                            Surakarta, Jawa Tengah<br>
                            Indonesia
                        </p>
                    </div>
                </div>
            </div>
        </section>
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        <h6>
            © 2023 Copyright:
            <a class="text-light">TIA | Software House</a>
        </h6>
    </div>
    </footer>

</body>

</html>