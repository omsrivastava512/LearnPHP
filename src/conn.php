<h3>
<a href="#jump">Jump</a>
</h3>
<?php
/* Establish Connection */

$servername = "localhost";
$username   = "root";
$password = "";
$dbname = "STD1";


// Create connection

    $conn = new mysqli($servername, $username, $password, $dbname);

    $conn = mysqli_connect($servername, $username, $password, $dbname); 
    var_dump($conn);        // $conn is a variable and it is of type object. It is an instance of the class mysqli.

    if($conn->connect_error){
        die(mysqli_connect_error());       //halt the execution and provide a message before terminating the script
    }
    else
    echo "Success";

    if (!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
    else 
    echo "Success";

echo "<hr><hr>";
echo "<hr><hr>";



?>
