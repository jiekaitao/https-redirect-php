    <?php
    //I'd include this in head.php, or what ever your header is. Have a great rest of your day :-)
    if($_SESSION['redirected']!='yes') {
    $_SESSION['redirected'] = 'yes';
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301);
    } else {
      $_SESSION['redirected'] = 'null';
    }
    ?>
