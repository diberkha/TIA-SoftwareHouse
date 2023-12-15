<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log out</title>
    <link rel="stylesheet" href="style/login.css" />
    <link rel="stylesheet" type="text/css" href="assets/dist/css/bootstrap.min.css">
</head>

<body class="bg-secondary" style="--bs-bg-opacity: .m5;">
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="index.php?target=home"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <span class="fs-4">TIA | Software House</span>
            </a>
        </header>
    </div>
    <div id="formFooter">
        <p><a class="btn btn-primary btn-lg px-4 gap-3" href="login.php">Log In</a></p>
    </div>
<?php 
    session_start();
    session_destroy();
    header("Location: index.php");
?>
</body>

</html>