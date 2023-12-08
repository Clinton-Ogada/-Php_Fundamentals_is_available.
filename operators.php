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
echo "$a + $b * 5 is:\n", $a + $b * 5;
?></p>

</body>
</html>
