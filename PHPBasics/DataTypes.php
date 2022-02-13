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
    echo "<br>" . $price;

    ?>
</body>

</html>