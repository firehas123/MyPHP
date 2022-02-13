<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
</head>

<body>
    <h1>Scope are</h1>

    <h2>global scope </h2>
    <?php
    $num = 20;
    //use global keyword
    function f1()
    {
        global $num;
        echo "inside the function body";
        echo $num . "<br>";
    }
    f1();
    echo $num . "<br>";
    // or another way of accessing is by using gloabls arrays
    //also known as super global arrays
    $hassan = "string";
    function test()
    {
        echo "testing global array " . $GLOBALS['hassan'] . "<br>";
        $GLOBALS['x'] = $GLOBALS['num'] + 30;
    }
    test();
    echo $GLOBALS['x'] . "  checking value of x <br>";
    ?>
    <h2>local scope</h2>
    <?php
    function f2()
    {
        $anotherVar = 20;
        echo $anotherVar . "<br>";
    }
    f2();
    /*echo $anotherVar . "<br>";*/
    ?>
    <h2>static scope</h2>
    <?php
    function staticDef()
    {
        static $testingVar = "testing"; //can't assign any variable to it nor any function
        echo "static value =  " . $testingVar . "<br>";
        $testingVar++;
    }
    staticDef();
    staticDef();
    staticDef();
    ?>
</body>

</html>