<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
   
        
    </body>
</html>
<?php
echo "<h3>My fav movie is ";

$name = "Avengers Infinty War";
//or
$name = urlencode("Avengers Infinty War");

if(isset($_GET['name'])){
    
    $name = $_GET['name'];
    echo $name;
    
    
}
else
echo "<a href=\"url.php?name=$name\">Check</a>";             // passing var value by url




?>
