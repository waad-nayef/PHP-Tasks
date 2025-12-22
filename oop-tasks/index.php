<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Tasks</title>
</head>

<body>
    <?php
    echo "<h1>1</h1>";

    class MyClass
    {
        public function printMethod()
        {
            echo "MyClass class has initialized!";
        }
    }
    $obj1 = new MyClass();
    $obj1->printMethod();

    echo "<hr>";

    echo "<h1>2</h1>";

    class MyClass2
    {
        public function printMethod($name)
        {
            echo "Hello All, I am $name";
        }
    }
    $obj2 = new MyClass2();
    $obj2->printMethod("Waad");
    echo "<hr>";

    echo "<h1>3</h1>";
    class Factorial
    {
        public function factCalculate($num)
        {
            $res = 1;
            while ($num > 0) {
                $res *= $num;
                $num--;
            }
            return $res;
        }
    }

    $obj3 = new Factorial();
    echo $obj3->factCalculate(5);
    echo "<hr>";


    echo "<h1>4</h1>";

    class SortArray
    {

        public function sortArray($arr)
        {
            sort($arr);
            print_r($arr);
        }
    }
    $obj4 = new sortArray();
    $obj4->sortArray(array(11, -2, 4, 35, 0, 8, -9));
    echo "<hr>";


    echo "<h1>5</h1>";

    class DifferentDates
    {
        private $firstDate;
        private $secondDate;

        public function __construct($firstDate, $secondDate)
        {
            $this->firstDate = new DateTime($firstDate);
            $this->secondDate = new DateTime($secondDate);
        }

        public function calculateDifference()
        {
            $diff = $this->firstDate->diff($this->secondDate);
            echo "Difference: $diff->y years, $diff->m months, $diff->d days.";
        }
    }
    $obj5 = new DifferentDates("1981-11-03", "2013-09-04");
    $obj5->calculateDifference();

    echo "<hr>";


    echo "<h1>6</h1>";

    class Converter
    {
        private $date;
        public function __construct($date)
        {
            $this->date = new DateTime($date);
            echo $this->date->format("Y-m-d");
        }
    }

    $obj6 = new Converter("12-08-2004");
    echo "<hr>";
    ?>
</body>

</html>