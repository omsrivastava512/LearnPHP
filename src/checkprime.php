<?php

$num = $_POST['num'];

$res = "prime";

$i=2;
while($i<=$num/2)
{
    if($num%$i==0){

     $res="not prime";   
        break;
    }
    $i=$i+1;
}


echo "<h1>$num is $res";


?>