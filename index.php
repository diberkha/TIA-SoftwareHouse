<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIA | Software House</title>
</head>

<body class="bg-secondary" style="--bs-bg-opacity: .5;">
    <?php
    require('header.php');
    if (isset($_GET['target'])) {
        $target = $_GET['target'];
    } else {
        $target = 'home';
    }
    switch ($target) {
        case 'home':
            require('home.php');
            break;
        case 'about':
            require('about.php');
            break;
        case 'addons':
            require('addons.php');
            break;
        case 'mobile':
            require('mobile.php');
            break;
        case 'web':
            require('web.php');
            break;
        case 'game':
            require('game.php');
            break;
        case 'login':
            require('login.php');
            break;
        case 'register':
            require('register.php');
            break;       
        case 'form':
            require('form.php');
            break;
        case 'terima':
            require('terima.php');
            break;
        case 'tabeladdons':
            require('tabeladdons.php');
            break;
        default:
            echo "<h2>PAGE NOT FOUND!</h2>";
    }
    require('footer.php');
    ?>
</body>
</html>