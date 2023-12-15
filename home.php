<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIA | Software House</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style/home.css" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="javascript.js"></script>
</head>

<body class="bg-secondary" style="--bs-bg-opacity: .5;">
    <div class="container col-xxl-8 px-4 py-5 ">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="img/software.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700"
                    height="500" loading="lazy" />
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">
                    Welcome To <span>TIA | Software House!</span>
                </h1>
                <p class="lead">
                    Perusahaan Software Berkualitas di Indonesia
                </p>
                <p><a class="btn btn-dark btn-lg px-4 gap-3" style="color: #fbe240"
                        href="index.php?target=about">More</a></p>
            </div>
        </div>
        <section>
            <div class="display-5 fw-bold lh-1 mb-3">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <h1 class="title text-center">Gallery</h1>
                        </div>
                    </div>
                    <div class="row-gap-3">
                        <div class="col-xl-12 row-gap-3">
                            <div id="demo" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class=""></button>
                                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1" class="active"
                                        aria-current="true"></button>
                                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2" class=""></button>
                                </div>
                                <div class="carousel-inner" align="center">
                                    <div class="carousel-item">
                                        <img src="img/software-1.png" class="d-block" style="width: 75%">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/software-2.png" class="d-block" style="width: 75%">
                                    </div>
                                    <div class="carousel-item active">
                                        <img src="img/software-3.png" class="d-block" style="width: 75%">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#demo"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#demo"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-5">
            <div class="container">
                <h1 id="h2_h2center" class="text-center">Layanan</h1>
                <div class="layanan_center px-4 row-gap-3">
                    <div>
                        <table border="0" align="center" width="0%">
                            <tr>
                                <th><img class="img_size" src="img/mobile.png" alt=""></th>
                                <th><img class="img_size" src="img/website.png" alt=""></th>
                                <th><img class="img_size" src="img/game.png" alt=""></th>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Mobile App Development</h3>
                                </td>
                                <td align="center">
                                    <h3>Web Development</h3>
                                </td>
                                <td>
                                    <h3>Game Development</h3>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><a class="btn btn-dark btn-lg px-4 gap-3" style="color: #fbe240"
                                            href="index.php?target=mobile">More</a></p>
                                </td>
                                <td align="center">
                                    <p><a class="btn btn-dark btn-lg px-4 gap-3" style="color: #fbe240"
                                            href="index.php?target=web">More</a></p>
                                </td>
                                <td>
                                    <p><a class="btn btn-dark btn-lg px-4 gap-3" style="color: #fbe240"
                                            href="index.php?target=game">More</a></p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>