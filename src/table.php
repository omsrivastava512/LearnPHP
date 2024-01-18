<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="#" method="post">
Enter row number <input type="number" name="ro" required>
Enter col number <input type="number" name="co" required>

<input type="submit" value="submit">


</form>



<?php
if(isset($_POST['ro'])){

    $r=$_POST['ro'];
    $c=$_POST['co'];
    $count=0;

    echo "<table border =1>";

    for($i=1;$i<=$r;$i++){
        echo "<tr height = 100 width =100>";
        
        for($j=1;$j<=$c;$j++){

            echo "<td height = 100 width =100>";
            echo ++$count;
            
            echo "</td>";
        }
        
      echo  "</tr>";
    }



    echo "</table>";



}


?>

</body>
</html>