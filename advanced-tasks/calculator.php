<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        label {
            display: block;
            margin: 10px;
        }

        input {
            display: block;
            border-radius: 10px;
            border: solid 1px grey;
            padding: 10px;
        }

        form {
            display: flex;
            flex-direction: column;
            width: fit-content;
            justify-content: center;
            align-items: flex-start;
        }
    </style>
</head>

<body>
    <form action="#" method="post">
        <label>
            Enter the first number: <input type="number" name="num1">
        </label>
        <label>
            Enter the second: <input type="number" name="num2">
        </label>
        <label>
            Enter the operation (*, /, -, +): <input type="text" name="opr">
        </label>

        <input type="submit" value="Calculate">
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] = "POST") {
        
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $opr = $_POST['opr'];
        $res;
        switch ($opr) {
            case "*":
                $res = $num1 * $num2;
                break;
            case "/":
                $res = $num1 / $num2;
                break;
            case "-":
                $res = $num1 - $num2;
                break;
            case "+":
                $res = $num1 + $num2;
                break;
            default:
                $res = "invalid inputs";
        }
        echo "<h1>$num1 $opr $num2 = $res</h1>";
    }



    ?>
</body>

</html>