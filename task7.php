<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Handling</title>
</head>

<body>
    <?php
    echo "<h1>1</h1>";

    echo PHP_VERSION;
    // echo phpinfo();

    echo "<hr>";

    echo "<h1>2</h1>";

    echo "Tomorrow I'll learn PHP global variables.<br>";
    echo "This is a bad command: del c:\\*.*";

    echo "<hr>";

    echo "<h1>3</h1>";

    // check get-form.html & get.php files

    echo "<hr>";

    echo "<h1>4</h1>";

    echo "The IP address is " . $_SERVER['REMOTE_ADDR'];

    echo "<hr>";

    echo "<h1>5</h1>";

    echo "the name of current file is " . $_SERVER['PHP_SELF'];

    echo "<hr>";

    echo "<h1>6</h1>";

    $comp_arr = parse_url("https://www.w3schools.com/php/default.asp");
    print_r($comp_arr);

    echo "<hr>";

    echo "<h1>7</h1>";

    echo "<style>
   
   div:first-letter{
   color:red;
}
   </style>
   
   <div>PHP Tutorial</div>";

    echo "<hr>";

    echo "<h1>8</h1>";

    //uncomment the following line to redirect you to w3schools website
    // header("Location: https://www.w3schools.com/");

    echo "<hr>";

    ?>
</body>

</html>