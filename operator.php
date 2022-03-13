<?php

    // operators in php 
    // 1) arithmetic operators
    $num1 = 12;
    $num2 = 45;

    echo"The value of num1 and num2 is = ";
    echo $num1 +  $num2;
    //assignment operators 

    echo"<br>";  // this br tag for new line 

    $num3 =$num1;
    echo"The value of num3 is ";
    echo$num3;

    echo"<br>";
    $num3 +=12; 
    echo"The value of number3 = ";
    echo$num3;

    echo"<br>";

    // comparison operators

    echo var_dump(12==23); // this return bool values 
    echo"<br>";
    echo var_dump(12<=23); // this return bool values 
    echo"<br>";
    echo var_dump(12>=23); // this return bool values 
    echo"<br>";
    echo var_dump(12!=23); // this return bool values 

    // increment operators
   echo $num1++;

   echo"<br>";
   echo $num1--;
   
    //logical operators
    //And &&
    //or ||
    //xor
    //!
    echo"<br>";
    $myvar = true && true; // this log and 
    echo var_dump( $myvar);

    echo"<br>";
    $myvar = false || true; // this log and 
    echo var_dump( $myvar);

    echo"<br>";
    $myvar = false xor true; // this log and 
    echo var_dump( $myvar);



?>