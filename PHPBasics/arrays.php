<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>
<h1>array</h1>

<body>
    <?php
    $names = array("asif", "hassan", "noman");
    //another way
    $nums[0] = 2;
    $nums[1] = 4;
    $nums[2] = 3;
    //reading from array
    echo $nums[1] . "<br>";
    //chanign arrrrray vales
    $nums[2] = 8;
    echo $nums[2] . "<br>";
    //using built in functio to porint array
    print_r($nums); // not in our control
    echo "<br>";
    //if we wantt ot print accordingly
    for ($i = 0; $i < 3; $i++)
        echo "value at index $i is $nums[$i] <br>";

    //array size
    echo count($nums) . "b<br>";
    echo sizeof($nums) . "<br>";
    foreach ($nums as &$i) { // this create a reference
        echo $i . "<br>";
        $i++;
    }
    echo "<br> check<br> ";
    foreach ($nums as &$i) { // checking the reference
        echo $i . "<br>";
    }
    //where to add an element defining the location
    $nums[] = 13; //will place at the end of thee array
    array_push($nums, 245); // this will do same as above
    //now removing element from the right side
    array_pop($nums);
    // now adding an element in the beginning
    echo "<br>checking <br>";
    array_unshift($nums, 1, 2); // step right
    foreach ($nums as &$i) {
        echo $i . "<br>";
    }
    echo "<br> now removing from left <br>";
    array_shift($nums);
    foreach ($nums as &$i) {
        echo $i . "<br>";
    }
    //now adding in the middle of the array
    //via slicing
    //array elements are
    echo "<br> array elements are  <br>";
    foreach ($nums as &$i) {
        echo $i . "<br>";
    }
    $tempArrayStart = array_slice($nums, 0, 2);
    $tempArrayEnd = array_slice($nums, 2, sizeof($nums));
    $nums = array_merge($tempArrayStart, array(100), $tempArrayEnd);
    echo "<br> array elements now are  <br>";
    foreach ($nums as &$i) {
        echo $i . "<br>";
    }
    //another way
    $anotherNumsArray = [...$tempArrayStart, 200, ...$tempArrayEnd];
    echo "<br>another way array elements now are  <br>";
    foreach ($anotherNumsArray as &$i) {
        echo $i . "<br>";
    }
    //removing any index
    unset($nums[3]);
    echo "<br> array elements now are after removing  <br>";
    foreach ($nums as &$i) {
        echo $i . "<br>";
    }
    echo "<pre>";
    print_r($nums);
    echo "</pre>";
    ?>
</body>

</html>