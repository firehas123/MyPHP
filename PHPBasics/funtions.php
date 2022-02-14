<!DOCTYPE html>
<html>

<head>
    <title>Functions in php</title>
</head>

<body>
    <?php
    //declare(strict_types=1);
    //now php won't be loosely typed if not mentioned by default it is zero
    // and you can pass integer value even if the function parameters requries string to ensure string
    // is passed we can declare the type strict
    //incase of passing integer and floating parameter concept of widening conversion is used
    //incase of float and integer parameter it is shortening conversion and disable strict type
    //wokring with functions now
    function f1()
    {
        echo "hi <br>";
    }
    f1();
    ////////////////////
    $num = 10;
    //function name is case insensitive
    // you can call it in lower case o rupper case up to you

    //function with parrameter
    $msg = "hello";
    function test($msg, $value, string $anotherValue = "testing") //you can define type as well
    {
        echo "print msg '" . $msg . "' have value = $value anotehr value = $anotherValue <br>";
    }
    TEST($msg, $num);

    //return statements with the functions
    function add($a, $b): int
    {
        return $a + $b;
        //you can use empty return statement as well
    }
    echo add(4, 5);
    //extra information
    $testVar = 34.6;
    echo "<br>";
    var_dump($testVar); //use to check type of data present

    function sum($num1, $num2): ?int  // since we are not sure we use this
    {
        $sum = $num1 + $num2;
        return null; // 

    }
    ?>
</body>

</html>