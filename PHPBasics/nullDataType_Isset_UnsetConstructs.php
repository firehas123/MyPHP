<!DOCTYPE html>
<html lang="en">

<head>

    <title>Document</title>
</head>

<body>
    <?php
    $length = null; // null means no value or nothing it will be initialized later
    echo "length = " . $length . "<br>";

    $discoutn = null;
    $totalInvoice = null;
    echo  "type of lenght  = " . gettype($length) . "<br>";
    // to empty a value we can use null
    // it removes the occupation in the memory of a variable;
    // when out of scope it means variable will be destriyed by the garbage collector

    //a constrtuct 
    unset($length);
    //it is used to remove the varibale from the symbol table
    //meaning it will act like it wasn't in this scope
    //echo gettype($length) . "<br>"; //will give error uncomment this

    //anoterh construct is used to check if a value is set or not?
    //$length = 10; // uncomment to make the condition true
    if (isset($length))
        echo "ok value is set";
    else
        echo "value is not set";


    ?>
</body>

</html>