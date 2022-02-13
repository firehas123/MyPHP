<!DOCTYPE html>
<html lang="en">

<head>

    <title>Boolean</title>
</head>

<body>
    <?php
    $flag = true; //literal value or hardcoded value
    echo "flag = $flag and type = " . gettype($flag) . "<br>";
    $check1 = 10 > 5;
    echo "value = $check1" . "<br>";

    $isGraduate = true;
    $flag = $isGraduate; //assigning
    //casting
    $city = "lahore"; //string
    $flag = $city; //flag will become string tyoe
    echo "checking flag type " . gettype($flag) . "<br>";

    $flag = (bool) $city; // or (boolean) $check1; both are correct
    echo "checking flag type " . gettype($flag) . "<br>"; //now flag has become boolean type

    //in if condition it's not necassary to have boolean expression
    if ("lahore")
        echo "ok";

    //in order to get and predicatable output 
    // it has given a list which will result false as output
    // the list is
    // false, 0 , "", null, (empty array)
    echo "<br>";
    if ($flag)
        echo "print true <br>";
    else
        echo "print false <br>";

    $arrayExaple = array();
    if ($arrayExaple)
        echo "print true <br>";
    else
        echo "print false <br>";
    ?>
</body>

</html>