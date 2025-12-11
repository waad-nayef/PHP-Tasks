<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 6</title>
</head>

<body>
    <?php
    echo "<h1>1</h1>";

    function isPrime($num)
    {
        $prime = true;
        for ($i = 2; $i < $num; $i++) {
            if ($num % $i == 0) {
                $prime = false;
                break;
            }
        }
        if ($prime) {
            echo "$num is a prime number";
        } else {
            echo "$num is not a prime number";
        }
    }
    isPrime(3);

    echo "<hr>";

    echo "<h1>2</h1>";

    function reverse($str)
    {
        $rev_str = "";
        for ($i = strlen($str) - 1; $i >= 0; $i--) {
            $rev_str .= $str[$i];
        }
        echo $rev_str;
    }

    reverse("remove");

    echo "<hr>";

    echo "<h1>3</h1>";

    function lowerCaseCompare($str)
    {
        $strLower = strtolower($str);
        if ($strLower == $str)
            return "Your String is Ok";
        else
            return "Your String is not lower case";
    }

    echo lowerCaseCompare("remove");
    echo "<hr>";

    echo "<h1>4</h1>";

    function swap(&$num1, &$num2)
    {
        $num1 = $num1 + $num2;
        $num2 = $num1 - $num2;
        $num1 = $num1 - $num2;
    }

    $x = 12;
    $y = 10;

    echo "before swap: x = $x, and y = $y <br>";

    swap($x, $y);

    echo "after swap: x = $x, and y = $y";
    echo "<hr>";

    echo "<h1>5</h1>";
    //////////repeated/////////////
    echo "same as 4";
    echo "<hr>";

    echo "<h1>6</h1>";

    function isArmstrong($num)
    {
        $original = $num;
        $sum = 0;
        for ($i = 1; $i <= 3; $i++)
            if ($num > 0) {
                $digit = $num % 10;
                $sum += ($digit * $digit * $digit);
                $num = $num / 10;
            }
        if ($sum == $original)
            echo "$original is Armstrong Number";
        else
            echo "$original is not Armstrong Number";
    }

    isArmstrong(407);
    echo "<hr>";

    echo "<h1>7</h1>";

    function onlyLetter($str)
    {
        $onlyLtr = "";
        for ($i = 0; $i < strlen($str); $i++) {
            if (('a' <= $str[$i] && $str[$i] <= 'z') || 'A' <= $str[$i] && $str[$i] <= 'Z') {
                $onlyLtr .= strtolower($str[$i]);
            }
        }
        return $onlyLtr;
    }

    function isPalindrome($str)
    {
        for ($i = 0, $j = strlen($str) - 1; $i < strlen($str) / 2; $i++, $j--) {
            if ($str[$i] != $str[$j]) {
                return "No it is not a palindrome";
            }
        }
        return "Yes it is a palindrome";
    }

    echo isPalindrome(onlyLetter("Eva, can I see bees in a cave?"));
    echo "<hr>";

    echo "<h1>8</h1>";
    function removeDuplicates($array_num)
    {
        $new_array = array();
        for ($i = 0; $i < count($array_num); $i++) {
            if (!(in_array($array_num[$i], $new_array))) {
                array_push($new_array, $array_num[$i]);
            }
        }
        return $new_array;
    }

    print_r(removeDuplicates(array(2, 4, 7, 8, 4)));
    echo "<hr>";
    ?>
</body>

</html>