<!DOCTYPE html>
<html>
<meta name="google" content="notranslate">
<title>Document</title>
</head>

<body>
    <h1>Constants</h1>
    <?php
    define("DB_NAME", "testing data");
    //DB_NAME = ""; //will result in error
    echo DB_NAME . "<hr>";
    //constants are defined at global level 
    function fr()
    {
        echo DB_NAME . "<br>";
        //if a function defines a constant
        define("logo", "logo.png", true); //case insensitive
        //now the scope is global it is not constant
    }
    fr();
    echo LOGO . "<hr";
    ?>
    <h1>tsasdadasdasdasdsdsad</h1>
</body>

</html>