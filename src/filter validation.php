<?php

/* USING VALIDATION FILTER */

$a=5;
$b=5.5;
 
var_dump($a);       // prints variable type and it's value

echo filter_var($a, FILTER_VALIDATE_INT)."\n";        // filters value according to validation i.e returns var only if validated

var_dump(filter_var($a, FILTER_VALIDATE_INT));      // int(5)
var_dump(filter_var($b, FILTER_VALIDATE_INT));      // bool(false)

if(filter_var($a,FILTER_VALIDATE_INT))
echo $a."\n";
else 
echo "\n";

// Test cases
$a="5";
var_dump(filter_var($a,FILTER_VALIDATE_INT));
$a=TRUE;
var_dump(filter_var($a,FILTER_VALIDATE_INT));
$a=false;
var_dump(filter_var($a,FILTER_VALIDATE_INT));
$a=0;
var_dump(filter_var($a,FILTER_VALIDATE_INT));
$b = "ON";      // OR "on", "yes", "1", 
var_dump(filter_var($b,FILTER_VALIDATE_BOOL));
$b="hello@e.com";
var_dump(filter_var($b,FILTER_VALIDATE_EMAIL));

$b="https://hello.com";
var_dump(filter_var($b,FILTER_VALIDATE_URL));
$b="https://hello.com?A=123";
var_dump(filter_var($b,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED));
$b="https://hello.com/1.php";
var_dump(filter_var($b,FILTER_VALIDATE_URL,FILTER_FLAG_PATH_REQUIRED));

echo "<br><br><br>";

?>

<?php

/* USING SANITIZE FILTER */



echo filter_var($a,FILTER_SANITIZE_URL)."\n";











?>