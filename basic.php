<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php tutorial</title>

    <style>

        .container{
            background-color: black;
            color: red;
            padding: 12px;
            align-items: center;
            text-align: center;
        }
        </style>
</head>
<body>
    <div class="container">
        This is container 
        <h1>Lets learn about php</h1>
        <p> you can go to party  </p>
    <?php
    $age= 23;
    if($age>18)
    {
        echo"you can go to party";
    }
    else
    {
        echo"you can not go ";
    }
    echo"<br>";

    // array in php 
    $array  = array("java", "c++", "python", "c","NodeJs");
    echo count($array); 
    echo"<br>";

    // for loop    echo"<br>";
    for( $i = 0; $i<5; $i++)
    {
            echo$array[$i]; // we can access the all values
    }

   
    ?>

    </div>
    
</body>
</html>