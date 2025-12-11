<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>
</head>

<body>
    <?php
    echo "<h1>1</h1> <br>";
    echo "<table border><tr><td style='color:blue'>Salary of Mr. A is</td><td>1000$</td>";
    echo "<tr><td style='color:blue'>Salary of Mr. B is</td><td>1200$</td>";
    echo "<tr><td style='color:blue'>Salary of Mr. C is</td><td>1400$</td></tr></table>";
    echo "<hr>";

    echo "<h1>2</h1> <br>";
    echo "Last modified " . date("l, j F, Y, h:i:s A", filemtime("task1.php"));
    echo "<hr>";

    echo "<h1>3</h1> <br>";
    $textFile = file("text.txt");
    echo "No. of lines in the text.txt file " . count($textFile);

    echo "<hr>";
    ?>
</body>

</html>