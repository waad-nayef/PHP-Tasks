<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'GET')
        echo 'the data is sent by get';

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
        echo 'the data is sent by post';

    ?>

</body>

</html>