<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <?php
    //for loop
    for ($i = 1; $i <= 5; $i++) {
        echo "hi " . $i . " <br>";
    }
    //while lop
    $i = 1;
    while ($i <= 5) {
        echo "whil loop " . $i . "<br>";
        $i += 2;
        $i--;
    }
    //do while loop
    $i = 1;
    do {
        echo "DO whil loop " . $i . "<br>";
        $i++;
    } while ($i <= 5);
    //for each loop used for arrays
    $num = array(2, 4, 5, 6, 7);
    foreach ($num as $var) {
        echo $var . " in fore each loop[ <<br>";
    }
    ?>
</body>

</html>