<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Let's learn <b> php</b> operators<br>
It is going to be lots of fun</p>
<hr>

<p><b>String Operators</b><br><br>
<?php
$a = "Hello";
$b = "World";
//$c = "Hello World";
$c =$a . " ". $b;
echo $c
?></p>
<hr>

<p><b>Arithmetic Operators</b><br><br>
<?php
$a = 10;
$b = 30;
//echo "$a + $b is:\n", $a + $b;
//echo "$a - $b is:\n", $a - $b;
//echo "$a / $b is:\n", $a / $b;
//echo "$a % $b is:\n", $a % $b;
//echo "$a pwr $b is:\n", $a ** $b;
//echo "$a + $b * 5 is:\n", $a + $b * 5;
echo "($a + $b) * 5 is:\n", ($a + $b) * 5;
?></p>
<hr>

<p><b>Assignment Operators</b><br><br>
<?php
//Assigniong data to "a"
$a = 10;
$a += 20;
$b +=20;
echo $a;
echo "\n";
echo "<br>";
echo $b;

?></p>
<hr>

<p><b>Comparison Operators</b><br><br>
<?php
$a = 10;
$b = "10";
/*if  ($a == $b) {
echo "This Statement is true";
} //this statement checks if the variables are equal */

/* if  ($a === $b) {
echo "This Statement is true";
} // This statement checks whether both the variables and the data types are equal*/

if  ($a != $b) {
echo "This Statement is true";
} // This statement checks whether the variables are not true
?></p>
<hr>

<p><b>Logical Operators</b><br><br>
<?php
$a = 10;
$b = 20;

$c = 10;
$d = 20;
if  ($a == $b) {
echo "This Statement is true";
} 

?></p>
<hr>

</body>
</html>
