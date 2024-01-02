<?php



echo "Hello World";
echo "acha";        // same line
?>

<?php       //multiple php  sections in a file
echo "halala";
?>

<?php
echo "'hello'\n";       // escape 
echo "\"hello\"";
?>

<?php       /*One section of php is considered as a single line by the parser */ 
/*use html tags in php only when needed.
Code most of the cotent in HTML*/
?>

<?php
define("h","hello");   // Define is used to create a constants. Also, they are case sensitive.
echo h;
echo "\n";
$a="kim";
echo $a;        //Variables denoted by $ and are NOT case sensitive
?>

<?php
$a=5;           //number
echo $a+5;

$a="5";         //string
echo $a + 5

?>


<?php
$a=5;
$a=$a + 7;
echo $a;

?>



<?php
/*In-built funtions */
 $f = [17,14,19]; //array
 echo rand(5,17);
 echo "\n" , ceil(5.4);
 echo "\n", floor(5.7);
 echo "\n", max(1,4,7,9) + min(1,4,7,9);
 echo "\n", max($f);
    

?>



