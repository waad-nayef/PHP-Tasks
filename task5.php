<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 5</title>
</head>

<body>
    <?php

    echo "<h1>1</h1>";
    $year = 2013;
    if ($year % 4 == 0)
        echo "$year is leap year";
    else
        echo "$year is not a leap year";

    echo "<hr>";

    echo "<h1>2</h1>";

    $temp = 27;
    if ($temp <= 20)
        echo "it is WinterTime!";
    else
        echo "it is SummerTime!";

    echo "<hr>";

    echo "<h1>3</h1>";

    $int1 = 2;
    $int2 = 2;

    if ($int1 = $int2) {
        echo ($int1 + $int2) * 3;
    } else
        echo ($int1 + $int2);

    echo "<hr>";

    echo "<h1>4</h1>";

    function isSumEqualTo30($x, $y)
    {
        if (($x + $y) == 30)
            return ($x + $y);

        return "false";
    }

    echo isSumEqualTo30(10, 10);

    echo "<hr>";

    echo "<h1>5</h1>";

    $num = 20;
    if ($num % 2 == 0 && $num % 3 == 0)
        echo "true";
    else
        echo "false";

    echo "<hr>";

    echo "<h1>6</h1>";

    $num = 50;
    if (20 <= $num  && $num <= 50)
        echo "true";
    else
        echo "false";

    echo "<hr>";

    echo "<h1>7</h1>";

    $arr = array(1, 5, 9);
    $largest = $arr[0];

    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] > $largest)
            $largest = $arr[$i];
    }
    echo $largest;

    echo "<hr>";

    echo "<h1>8</h1>";

    $units = 250;
    $total = 0;
    if ($units <= 50) {
        $total += $units * 2.5;
    } else {
        $total += 50 * 2.5;
        $units -= 50;
        if ($units <= 100)
            $total += $units * 5;
        else {
            $units -= 100;
            $total += 100 * 5;
            if ($units <= 100)
                $total += $units * 6.2;
            else {
                $total += $units * 7.5;
            }
        }
    }
    echo $total;


    echo "<hr>";

    echo "<h1>9</h1>";

    $num1 = 3;
    $num2 = 4;
    $opr = "*";

    switch ($opr) {
        case "+":
            echo $num1 + $num2;
            break;

        case "-":
            echo $num1 - $num2;
            break;

        case "*":
            echo $num1 * $num2;
            break;

        case "/":
            echo $num1 / $num2;
            break;
    }

    echo "<hr>";


    echo "<h1>10</h1>";

    $age = 15;
    if ($age >= 18)
        echo "eligible to vote";
    else
        echo  "is no eligible to vote";

    echo "<hr>";

    echo "<h1>11</h1>";

    $num = -60;
    if ($num < 0)
        echo "Negative";
    elseif ($num > 0)
        echo "Positive";
    else
        echo "Zero";

    echo "<hr>";


    echo "<h1>12</h1>";

    $arr = array(60, 86, 95, 63, 55, 74, 79, 62, 50);
    $sum = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $sum += $arr[$i];
    }

    $avg = $sum / count($arr);

    if ($avg < 60)
        echo "F";
    elseif ($avg < 70)
        echo "D";
    elseif ($avg < 80)
        echo "C";
    elseif ($avg < 90)
        echo "B";
    else
        echo "A";

    echo "<hr>";

    ?>
</body>

</html>