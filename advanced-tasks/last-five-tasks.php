<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();

    echo "the name of project is " . basename($_SERVER['PHP_SELF']);
    echo "<hr>";
    echo "script name is " . $_SERVER['SCRIPT_FILENAME'];
    echo "<hr>";
    echo "page requested at " . date("d/m/Y h:i", $_SERVER['REQUEST_TIME']);
    echo "<hr>";
    if (!isset($_SESSION['count']))
        $_SESSION['count'] = 0;
    $_SESSION['count']++;
    echo "No. of page refreshes: " . $_SESSION['count'];

    echo "<hr>";

    if (!isset($_SESSION['total_visitors'])) {
        $_SESSION['total_visitors'] = 1;
    }

    if (!isset($_COOKIE['visitor'])) {
        setcookie("visitor", "username", time() + 3, "/");
        $_SESSION['total_visitors']++;
    }

    $total = $_SESSION['total_visitors'];
    echo "total visitors: $total";

    echo "<hr>";

    setcookie("user", "Waad", time() + 3600 * 2, "/", "", false, true);
    echo "cookie user name:" . $_COOKIE['user'];
    setcookie('user', "", time() - 3600);
    ?>
</body>

</html>