<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <h1>2D ARRAY</h1>
    <?php
    $marks = array(10, 20, 30);

    $nums =  array($marks, true, 4);
    echo "type of nums array is " . gettype($nums) . "<br>";
    echo "type of specific elem is : " . gettype($nums[0]) . "<br>";
    echo "type of specific elem is : " . gettype($nums[1]) . "<br>";

    echo "<pre>";
    print_r($nums);
    echo "</pre>";

    //code
    $std1_marks = array(10, 20, 30);
    $std2_marks = array(40, 50, 60);
    $std3_marks =  array(70, 80, 90);
    $arrayOfStudentsMarks = array($std1_marks, $std2_marks, $std3_marks);
    foreach ($arrayOfStudentsMarks as $marks) {
        foreach ($marks as $marks2)
            echo $marks2 . " | ";

        echo "<br>";
    }
    ///
    ?>
</body>

</html>