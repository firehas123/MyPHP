<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Type in PHP</title>
</head>

<body>
    <h1>Data types in php are</h1>
    <?php
    $city = "lahore";
    echo "City $city and type = " . getType($city) . "<br>";
    $city = 42;
    echo "City $city and type = " . getType($city);
    //checking i  type is specifi c or not
    $result = is_integer($city);
    echo "<b> $result"; // not printing then it means it is false

    //othe basic types are
    //int,string,float/doublee, boolean, array , object
    //special types   null , callable, resource
    $price = 10.01;
    echo "<br>type price" .  $price;
    //rounding function
    $pi = 22 / 7;

    echo "<br> $pi";
    echo "<br>" . round($pi, 2);
    $price = 2_34_567;
    echo "<br>" . $price;
    //decalring in rxponenet
    $price = 35e4;
    echo "<br>" . $price . "<br>";

    //conversion of scaller is dependant upon context;
    $output = 10 + "20.5";
    echo $output  . var_dump($output) .  "<br>";
    $output = 10 + true;
    echo $output .  var_dump($output) . "<br>";
    $output = 10.5 + false;
    echo $output .  var_dump($output) . "<br>";
    // typecasting
    $output =  10 / 3;
    echo $output .  var_dump($output) . "<br>";
    $output =  10 + "20";
    echo $output .  var_dump($output) . "<br>";
    $output = 10 + "20.5";
    echo $output .  var_dump($output) . "<br>";
    $output =  10 + " 20";
    echo $output .  var_dump($output) . "<br>";
    $output =  10 + "20 ";
    echo $output .  var_dump($output) . "<br>";
    $output =  10 . "20 ";
    echo $output .  var_dump($output) . "<br>";
    //explicit conversion
    //types which we can explicit convert are
    // array and objects
    //method 1 - casting
    $output = (int)"20";
    //method 2 - function call
    $output = intval("40");
    $output = floatval("40.5"); // strval,boolval
    $output = (int) "120 h 12";
    echo $output .  var_dump($output) . "<br>";
    //array
    $result = (bool) array();
    ?>
</body>

</html>