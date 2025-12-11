<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - TASK 3</title>
</head>

<body>
    <?php
    echo "<h1>1</h1>";

    $str = "welcome to PHP";
    echo strtoupper($str) . "<br>";
    echo strtolower($str) . "<br>";
    echo ucfirst($str) . "<br>";
    echo ucwords($str) . "<br>";

    echo "<hr>";

    echo "<h1>2</h1>";

    function split($stringTime)
    {
        $strTime = "";
        for ($i = 0; $i < strlen($stringTime) - 1; $i += 2) {
            $strTime = $strTime . $stringTime[$i] . $stringTime[$i + 1];
            if ($i + 2 != strlen($stringTime))
                $strTime = $strTime . ":";
        }
        return $strTime;
    }
    echo split("085119");

    echo "<hr>";

    echo "<h1>3</h1>";

    $str = "I am a full stack developer at orange coding academy";
    if (strpos($str, "orange")) {
        echo "Word Found!";
    }

    echo "<hr>";

    ////////////////IMP - NEW INFORMATION HERE
    echo "<h1>4</h1>";
    $str2 = "www.orange.com/index.php";
    echo basename($str2);

    echo "<hr>";

    echo "<h1>5</h1>";

    $str3 = "info@orange.com";
    //explode like split in javascript, cut based on character
    $username = explode("@", $str3)[0];
    echo $username;

    echo "<hr>";

    echo "<h1>6</h1>";

    $str4 = "info@orange.com";
    echo substr($str4, -3);

    echo "<hr>";

    echo "<h1>7</h1>";

    $str = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
    $arrayStr = str_split($str);
    shuffle($arrayStr);
    $str = implode("", $arrayStr);
    echo $str;
    echo "<hr>";

    echo "<h1>8</h1>";

    $text = "That new trainee is so genius.";
    $word = 'Our';
    $text_as_array = explode(" ", $text);
    $text_as_array[0] = $word;
    $text = implode(" ", $text_as_array);
    echo $text . "<br>";

    echo "<hr>";

    echo "<h1>9</h1>";

    $word1 = "dragonball";
    $word2 = "dragonboll";
    $letter_word1 = "";
    $letter_word2 = "";
    $position = -1;
    for ($i = 0; $i < strlen($word1); $i++) {
        if ($word1[$i] != $word2[$i]) {
            $letter_word1 = $word1[$i];
            $letter_word2 = $word2[$i];
            $position = $i;
            break;
        }
    }
    if ($position < 0) {
        echo "there is no difference between the two strings";
    } else {
        echo "First difference between two strings at position $position: \"$letter_word1\" vs \"$letter_word2\"";
    }

    echo "<hr>";

    echo "<h1>10</h1>";

    $str_twinkle = "Twinkle, twinkle, little star.";
    $array_string = explode(" ", $str_twinkle);
    //display structured information about a variable, including its data type and value.
    var_dump($array_string);

    echo "<hr>";

    echo "<h1>11</h1>";

    $inputted_letter = 'b';
    $next_letter = 'a';
    if ($inputted_letter != 'z') {
        $next_letter = chr(ord($inputted_letter) + 1);
    }
    echo $next_letter;

    echo "<hr>";

    echo "<h1>12</h1>";

    //two parts: first one => insert a text
    $text = "The brown fox";
    $first_word = "The";
    $second_word = "brown";
    $inserted_word = "quick";
    $text_as_array = explode(" ", $text);

    for ($i = 0; $i < count($text_as_array) - 1; $i++) {
        if ($text_as_array[$i] == $first_word && $text_as_array[$i + 1] == $second_word) {
            array_splice($text_as_array, $i + 1, 0, $inserted_word);
        }
    }
    $text = implode(" ", $text_as_array);
    echo $text . "<br>";

    //two parts: second one => extract first word
    $text_as_array2 = explode(" ", $text);
    echo $text_as_array2[0];

    echo "<hr>";

    echo "<h1>13</h1>";

    $original_num = "0000657022.24";
    $without_zero = "";
    for ($i = 0; $i < strlen($original_num); $i++) {
        if ($original_num[$i] != '0')
            $without_zero .= $original_num[$i];
    }
    echo $without_zero;

    echo "<hr>";

    echo "<h1>14</h1>";

    $str = "The quick brown fox jumps over the lazy dog";
    $str = str_replace("fox", "", $str);
    echo $str;

    echo "<hr>";

    echo "<h1>15</h1>";

    $str = "The quick brown fox jumps over the lazy dog---";
    $str = str_replace("-", "", $str);
    echo $str;

    echo "<hr>";

    echo "<h1>16</h1>";

    $str = '\"\1+2/3*2:2-3/4*3';
    $str_without_spc = "";
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] >= 0 && $str[$i] <= 9) {
            $str_without_spc .= $str[$i];
        }
    }
    echo $str_without_spc;

    echo "<hr>";

    echo "<h1>17</h1>";

    $original_string = "The quick brown fox jumps over the lazy dog";
    $array_string = explode(" ", $original_string);
    $five_words = "";
    for ($i = 0; $i <= 4; $i++) {
        $five_words .= $array_string[$i] . " ";
    }
    echo $five_words;

    echo "<hr>";

    echo "<h1>18</h1>";

    $str = '2,543.12';
    $str = str_replace(",", "", $str);
    echo $str;

    echo "<hr>";

    echo "<h1>19</h1>";
    for ($i = 97; $i <= 122; $i++) {
        echo chr($i) . " ";
    }
    echo "<hr>";

    ?>
</body>

</html>