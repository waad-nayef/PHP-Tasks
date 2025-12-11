<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 4</title>
</head>

<body>
    <?php

    echo "<h1>1</h1>";

    for ($i = 1; $i <= 10; $i++) {
        if (!($i == 1))
            echo "-";
        echo $i;
    }

    echo "<hr>";

    echo "<h1>2</h1>";

    $sum = 0;
    for ($i = 0; $i <= 30; $i++)
        $sum += $i;
    echo $sum;

    //an alternative way: n * (n+1) / 2
    echo "<br>" . 30 * (30 + 1) / 2;

    echo "<hr>";

    echo "<h1>3</h1>";
    for ($i =  1; $i <= 5; $i++) {
        for ($j = 1; $j <= 5; $j++) {
            if ($i == 1)
                echo "A";
            elseif ($i == 2)
                echo  $j <= 3 ? "A" : "B";
            elseif ($i == 3)
                echo $j <= 2 ? "A" : "C";
            elseif ($i == 4)
                echo $j <= 1 ? "A" : "D";
            else
                echo "E";
            echo "&nbsp &nbsp";
        }
        echo "<br>";
    }

    echo "<hr>";

    echo "<h1>4</h1>";

    for ($i =  1; $i <= 5; $i++) {
        for ($j = 1; $j <= 5; $j++) {
            if ($i == 1)
                echo $i;
            elseif ($i == 2)
                echo  $j <= 3 ? 1 : $i;
            elseif ($i == 3)
                echo $j <= 2 ? 1 : $i;
            elseif ($i == 4)
                echo $j <= 1 ? 1 : $i;
            else
                echo $i;
            echo "&nbsp &nbsp";
        }
        echo "<br>";
    }

    echo "<hr>";

    echo "<h1>5</h1>";
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= 5; $j++) {
            if ($i == $j)
                echo $i;
            else
                echo 0;
            echo "&nbsp &nbsp";
        }
        echo "<br>";
    }
    echo "<hr>";

    echo "<h1>6</h1>";

    $fact = 1;
    $num = 5;
    for ($i = 1; $i <= $num; $i++)
        $fact *= $i;
    echo $fact;

    echo "<hr>";

    echo "<h1>7</h1>";

    $num = 0;
    $num2 = 1;
    $counts = 10;

    echo $num . ", ";
    echo $num2 . ", ";

    for ($i = 1; $i <= $counts - 2; $i++) {
        $next = $num + $num2;
        echo $next . ", ";

        $num = $num2;
        $num2 = $next;
    }

    echo "<hr>";


    echo "<h1>8</h1>";

    $string = "Orange Coding Academy";
    $lower = strtolower($string);
    $count = 0;

    for ($i = 0; $i < strlen($string); $i++) {
        if ($lower[$i] == 'c')
            $count++;
    }
    echo $count;
    echo "<hr>";


    echo "<h1>9</h1>";

    echo "<table border >";
    for ($i = 1; $i <= 6; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 5; $j++) {
            echo "<td style = 'padding:3px;'>" . $i . "*" . $j . "=" . $i * $j . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "<hr>";


    echo "<h1>10</h1>";
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 3 == 0)
            echo "Fizz ";

        elseif ($i % 5 == 0)
            echo "Buzz ";

        elseif ($i % 5 == 0 && $i % 3 == 0)
            echo "FizzBuzz ";

        else
            echo $i . " ";
    }
    echo "<hr>";

    echo "<h1>11</h1>";

    $count = 1;
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $count . " ";
            $count++;
        }
        echo "<br>";
    }

    echo "<hr>";

    echo "<h1>12</h1>";

    $spaces = 5;
    for ($i = 1; $i <= 5; $i++) {
        $letter = ord("A");
        for ($j = 1; $j <= $spaces; $j++)
            echo "&nbsp &nbsp";

        for ($j = 1; $j <= $i; $j++) {
            echo chr($letter) . "&nbsp &nbsp";
            $letter++;
        }
        $spaces--;
        echo "<br>";
    }
    $spaces = 2;
    for ($i = 1; $i <= 4; $i++) {
        $letter = ord("A");
        for ($j = 1; $j <= $spaces; $j++) {
            echo "&nbsp &nbsp";
        }
        for ($j = 4; $j >= $i; $j--) {
            echo chr($letter) . "&nbsp &nbsp";
            $letter++;
        }
        $spaces++;
        echo "<br>";
    }


    echo "<hr>";
    ?>

</body>

</html>