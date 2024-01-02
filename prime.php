<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="#" method="post">
Enter a number <input type="number" name="num1">

<input type="submit" value="submit">


</form>



<?php
if(isset( $_POST['num1'])){
$num = $_POST['num1'];


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
}

?>
</body>
</html>