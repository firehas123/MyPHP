<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <?php
    $num1 = 20;
    $num2 = "20";
    if ($num1 == $num2) :
        echo "num is equal <br>";
    elseif ($num1 > $num2) : //no space in else if
        echo "num1 is > <br>";
    else :
        echo "num 2 is grrateer <br>";
    endif;
    //or
    if ($num1 == $num2)
        echo "num is equal <br>";
    else if ($num1 > $num2)
        echo "num1 is > <br>";
    else
        echo "num 2 is grrateer <br>";

    //triple equal to operator

    if ($num1 === $num2)
        echo "num are equal <br>";
    else
        echo "diff data type <br>";

    //null coalescing operator
    const STANDARD_THEME = "Green AND White";
    //const STANDARD_THEME = null;
    $siteTheme = null;
    //user is allowed to change the theme
    $userTheme = null;
    if ($userTheme != null) {
        $siteTheme = $userTheme;
    } else
        $siteTheme = STANDARD_THEME;

    echo  "site theme = " .  $siteTheme . "<br>";
    //another method
    $siteTheme = isset($userTheme) ? $userTheme : STANDARD_THEME;
    echo  "site theme = " .  $siteTheme . "<br>";
    //another method in php 7.4
    $siteTheme = $userTheme ?? STANDARD_THEME ?? "No THEME";
    echo  "site theme = " .  $siteTheme . "<br>";
    ?>
</body>

</html>