<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X_UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="stylesheet" href="CSS/main.css">
    <title>Document</title>
</head>
<body>
   <?php
   //creating Arrays
        /*$cereals = array("Beans", "Lentils", "Peas", "Maize", "Soya" );

        echo $cereals[1]; */

    // Another way to create an array  
        $fruits = [
            "Apples", // Index 0
            "Bananas", // Index 1
            "Mangoes", // Index 2
            "Oranges", // Index 3
        ]; 
              

    //Adding data in an array  
        $fruits[] = "Pineapples"; 
        echo "<br>";
        echo $fruits[4]; 
        echo "<br>"; 
        
    //Replacing data in an array
        echo $fruits[0]; 
        $fruits[0] = "Guava";
        echo "<br>";
        echo $fruits[0]; 

    //Removing data from an array
        //unset($fruits[0]);
        array_splice($fruits, 0, 1);
        echo "<br>";
        echo $fruits[0];
        echo "<br>";

    //Creating an array with assigned keys/associates
    $tasks = [
        "Laundry" => "Jacob",
        "Cooking" => "Stacy",
        "Trash " => "Collins",
        "Dishes" => "Mwero",
    ];
    echo $tasks ["Laundry"];
    echo "<br>";

    //Adding data to tasks
    $tasks["Dusting"] = "Klint";

    //printing arrays
    echo "The following Data are in the Tasks:- \n";
    print_r($tasks);
    
    echo "<br> The following Data are in the Fruits:- \n";
    print_r($fruits);
    
    echo "<br> The total count in the 'Fruits' is:- \n";
    echo count($fruits);
    echo "<br>";
    
    sort($fruits);
    print_r($fruits);
    echo "<br> Let's add another fruit <br>";

    array_push($fruits,"Apples");
    print_r($fruits);
    echo "<br>";

    $imported = ["Macardamia","Berries","Pears","Ovacadoes",];
    array_splice($fruits, 0,0, "Grapes",);
    array_splice($fruits, 2,0, $imported);
    sort($fruits);
    print_r($fruits);

    //Multi - Dimentional Arrays
    $food = [
                array ("apple","mangoe"),
                "Banana",
                "Cherry",
                "Guava",
            "meat" => "chicken", "beef", "porek",
            "vegetables" => "Cucumber","carrots"];
                echo $food [0][0];
                echo "<br>";
                echo $food [3];

    ?>
</body>
</html>
