<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p><b>Conditions - Control Structure</b><br><br>
<?php
$bool = true;
$a = 10;
$b = 40;

$result = match ($a) {
    10=> "variable a is equal to 10!",
    20=> "variable a is equal to 20!",
    30=> "Variable a is equal to 30",
    default => "None were a match",
};
echo $result;
/*
SWITCH($a){
    case 10:
        echo "The first case is correct";
        break;
    case 40:
        echo "The Second case is correct";
        break;
    case 50:
        echo "The Third case is correct";
        break;
    default:
    echo"None of these conditions is true";
}

echo"<br>";  
// Replicating the above switch condition with an if condition
if ($a == 10) {
    echo "First case is correct";
}
elseif ($a == 40) {
    echo "Second case is correct";
}
else if ($a == 50) {
    echo "Third case is correct";
}
else {
    echo"None of these conditions is true";
    
}
echo"<br>";
if ($a == $b && $bool) {
    echo "First condition is true";
}
elseif ($a > $b || !$bool) {
    echo "Second condition is true";
}
else if ($a < $b || !$bool) {
    echo "Third condition is true";
}
else {
    echo "None of the conditions were true";
}*/
?></p>

</body>
</html>
