<?php
ECHO "Hello World! <br> \n";
echo "Hello World! <br> \n";
EcHo "Hello World! <br> \n";

 // This is a single−line comment

# This is also a single−line comment



/*
13 This is a multiple−lines comment block
14 that spans over multiple
15 lines
16 */

EcHo "Hello World! <br> \n";




 // You can also use comments to leave out parts of a code line
$x = 5 /* + 15 */ + 5 ;
echo "the number is = $x <br>" ;





$txt = "Hello world! <br>";
$x = 5;
//   $x = "naim ";
$y = 10.5;

echo " $txt  \n <br>";
echo " \n <br>";
echo $x;
echo " \n <br>";
echo $y;
 echo " \n <br>";
echo "sum = $x + $y";



$txt = "www.naim.com <br>";
echo "I love $txt! <br>";





$z = 5; // global scope

function myTest() {
     $z = 5;
// using x inside this function will generate an error
echo "<p>Variable x inside function is: $z</p>  \n <br>";
}
myTest();

echo "<p>Variable x outside function is: $z</p>  \n <br>";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-experiments</title>
</head>
<body>
<h1>PHP Code </h1>

</body>
</html>