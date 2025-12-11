<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    echo "<h1>1</h1>";
    $colors = array("green", "red", "white");
    echo ("The memory of that scene for me is like a frame of film forever frozen at that moment: the $colors[1] carpet, the $colors[0] lawn, the $colors[2] house, the leaden sky. The new president and his first lady. - Richard M. Nixon");
    echo "<hr>";

    echo "<h1>2</h1>";
    echo "<ul>
                <li>$colors[0]</li>
                <li>$colors[1]</li>
                <li>$colors[2]</li>
                </ul>";
    echo "<hr>";

    echo "<h1>3</h1>";
    $cities = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid");
    asort($cities);

    foreach ($cities as $country => $capital)
        echo "The capital of $country is $capital <br>";
    echo "<hr>";

    echo "<h1>4</h1>";
    $color = array(4 => 'white', 6 => 'green', 11 => 'red');
    echo $color[4];
    echo "<hr>";

    echo "<h1>5</h1>";
    $arr = [1, 2, 3, 4, 5];
    $location = 4;
    array_splice($arr, $location, 0, "$");
    print_r($arr);
    echo "<hr>";

    echo "<h1>6</h1>";
    $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
    asort($fruits);
    foreach ($fruits as $letter => $fruit) {
        echo "$letter = $fruit <br>";
    }
    echo "<hr>";


    echo "<h1>7</h1>";

    $arr = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
    $sum = 0;
    $five_lowest = array();
    $five_highest = array();
    rsort($arr);

    for ($i = 0; $i < count($arr); $i++) {
        $sum += $arr[$i];
    }

    $avg = $sum / count($arr);
    echo $avg . "<br>";

    for ($i = count($arr) - 1; $i >= count($arr) - 9; $i--) {
        if (in_array($arr[$i], $five_lowest))
            continue;
        else
            array_push($five_lowest, $arr[$i]);
    }
    echo "list of five lowest temperatures:";
    for ($i = 0; $i < count($five_lowest); $i++) {
        echo $five_lowest[$i] . " ";
    }
    echo "<br>";

    for ($i = 0; $i < 6; $i++) {
        if (in_array($arr[$i], $five_highest))
            continue;
        else
            array_push($five_highest, $arr[$i]);
    }

    echo "list of five highest temperatures: ";
    for ($i = count($five_highest) - 1; $i >= 0; $i--) {
        echo $five_highest[$i] . " ";
    }
    echo "<hr>";

    echo "<h1>8</h1>";
    $array1 = array("color" => "red", 2, 4);
    $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
    $mergedArray = array_merge($array1, $array2);
    foreach ($mergedArray as $indx => $item) {
        echo "$indx => $item <br>";
    }
    echo "<hr>";

    echo "<h1>9</h1>";
    $colors = array("red", "blue", "white", "yellow");
    foreach ($colors as $color) {
        $color = strtoupper($color);
        echo "$color <br>";
    }
    echo "<hr>";

    echo "<h1>10</h1>";
    function toLowerCase($words)
    {
        foreach ($words as $word) {
            $word = strtolower($word);
            echo "$word <br>";
        }
    }

    //////////
    $colors = array("RED", "BLUE", "WHITE", "YELLOW");
    toLowerCase($colors);
    echo "<hr>";

    echo "<h1>11</h1>";
    for ($i = 200; $i <= 250; $i++) {
        if ($i % 4 == 0) {
            echo "$i <br>";
        }
    }
    echo "<hr>";

    echo "<h1>12</h1>";
    $words =  array("abcd", "abc", "de", "hjjj", "g", "wer");
    $short = strlen($words[0]);
    $long = strlen($words[0]);

    foreach ($words as $word) {
        if (strlen($word) < $short)
            $short = strlen($word);

        if (strlen($word) > $long)
            $long = strlen($word);
    }
    echo "The shortest array length is $short. The longest array length is $long.";
    echo "<hr>";

    echo "<h1>13</h1>";
    //rand to get a random number, rand (x,y) => inclusive
    for ($i = 1; $i <= 10; $i++) {
        echo rand(11, 20) . "<br>";
    }
    echo "<hr>";

    echo "<h1>14</h1>";
    $array1 = array(2, 0, 10, 12, 6);
    $secLowest;
    for ($i = 0; $i < count($array1); $i++) {
        if ($array1[$i] != 0) {
            $secLowest = $array1;
            break;
        }
    }

    for ($i = 0; $i < count($array1); $i++) {
        if ($array1[$i] != 0 && $array1[$i] < $secLowest) {
            $secLowest = $array1[$i];
            break;
        }
    }
    echo $secLowest;
    echo "<hr>";

    ?>
</body>

</html>