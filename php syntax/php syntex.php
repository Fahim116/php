<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <?php
    $color= red;
    echo "my car is " . $color . "<br>";
    echo "my phone is  " .$color . "<br>";
    echo "This pan is  " . $color . "<br>";
    echo "This is php syntax" "br>" ;
    $text="Hello world";
    $x=5;
    $y=10.2;
    echo $text;
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    %x=5;
    function myTest(){
        echo"<p>variasble x inside function is : %x </p>";
        myTest();
        echo"<p>variable x outside function is: $x</p>";
    }

    ?>
</body>
</html>