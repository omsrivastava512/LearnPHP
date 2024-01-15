
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
/* Run Query */

    $sql = "SELECT * FROM student";     // $sql is a variable and it is of type string. It stores an SQL query.

    $result = $conn->query($sql);       // $result is a variable and it is of type object. It is an instance of mysqli_result. It stores the result of the query.
    /* query() function is used to execute a SQL query. It takes one argument: the SQL query. 
    It returns a mysqli_result object, which contains the result of the query. */

    //OR
    $result = mysqli_query($conn, $sql);
    /* mysqli_query() function is used to execute a SQL query. It takes two arguments: the connection object and the SQL query. 
    It returns a mysqli_result object, which contains the result of the query. */

    var_dump($result);  

echo "<pre>";

/* FETCH FUNCTIONS */

    $row=mysqli_fetch_row($result);     //mysqli_fetch_row() function is used to fetch a row from a result set. It takes one argument: the result set. 
    //It returns an indexed array containing the row values.
    var_dump($row);

    echo "<hr>";

    $row=mysqli_fetch_assoc($result);     //mysqli_fetch_assoc() function is used to fetch a row from a result set. It takes one argument: the result set. 
    //It returns an associative array containing the row values.
    var_dump($row);

    echo "<hr>";

    $row=mysqli_fetch_array($result);     //mysqli_fetch_array() function is used to fetch a row from a result set. It takes one argument: the result set. 
    //It returns both indexed and associative arrays containing the row values.
    var_dump($row);

    echo "<hr>";

    $row=mysqli_fetch_all($result);     //mysqli_fetch_all() function is used to fetch all rows from a result set. It takes one argument: the result set. 
    //It returns an indexed array containing all the rows.
    var_dump($row);

    echo "<hr>";
    $result->data_seek(0);

    $row=mysqli_fetch_all($result, MYSQLI_ASSOC);     //mysqli_fetch_all() function is used to fetch all rows from a result set. It takes two arguments: the result set and the type of array to return. 
    //It returns an associative array containing all the rows.
    var_dump($row);

    echo "<hr>";

    $result->data_seek(0);

    $row=mysqli_fetch_all($result, MYSQLI_BOTH);     //mysqli_fetch_all() function is used to fetch all rows from a result set. It takes two arguments: the result set and the type of array to return. 
    //It returns both indexed and associative arrays containing all the rows.
    var_dump($row);

    echo "<hr>";

    $result->data_seek(0);

    $row=mysqli_fetch_object($result);     //mysqli_fetch_object() function is used to fetch a row from a result set. It takes one argument: the result set. 
    //It returns an object containing the row values.
    var_dump($row);



    echo "<hr>";
echo "<hr>";
echo "<hr>";

/* Printing data */

    $result->data_seek(5);  // data_seek() function is used to move the internal pointer of a result set to a specified row. It takes one argument: the row number.

    $row = mysqli_fetch_array($result);

    print_r($row);          // print_r() function is used to print the contents of an array. It takes one argument: the array.


    echo "<br>";
    echo "<br>";

    echo $row[0] . " " . $row[1] . " " . $row[2] . " " . $row[3];


    echo "<hr>";
    // To print all the data at once:
    $result->data_seek(0);

    $row=mysqli_fetch_all($result);


    foreach($row as $data){         // Foreach loop is used to iterate through an array. It takes two arguments: the array and the function to execute for each element.
        echo $data[0] . " " . $data[1] . " " . $data[2] . " " . $data[3]. "<br>";
    }

    echo "<hr>";

    $result->data_seek(0);

    // To print selective data:
    while($row = mysqli_fetch_assoc($result)){
        if($row['course']=="Physics")
        echo $row['id']." ". $row['name']. " ". $row["roll"] . " " . $row['course']. "<br>";

    }

echo "<hr>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



?>










<section id="jump"></a>

<?php

/* Affected Rows */

    $servername = "localhost";
    $usename = "root";
    $password="";
    $dbname = "STD1";

    $conn=mysqli_connect($servername, $username,$password,$dbname) or die("Connection Failed");

    $sql = "INSERT INTO student (name, course) VALUES ('Heera Lal', 'Misc')";

    $conn->query($sql);

    echo "Affected Rows: ". mysqli_affected_rows($conn) ."<br>";
    //or
    echo "Affected Rows: ". $conn->affected_rows;
    /* affected_rows() function is used to get the number of affected rows by the last query. It takes one argument: the connection object. 
    It returns an integer representing the number of affected rows. */

    echo "<hr>";

    $sql = "INSERT INTO student (name, course) VALUES ('Heera Lal', 'Misc'), ('Heera Lal', 'Misc')";

    $conn->query($sql);

    echo "Affected Rows: ". mysqli_affected_rows($conn) ."<br>";

    echo "<hr>";

    $sql = "UPDATE student SET name='Heera Lal' WHERE id=1";

    $conn->query($sql);
    echo "Affected Rows: ". $conn->affected_rows;

    echo "<hr>";

    $sql = "DELETE FROM student WHERE id=1";

    $conn->query($sql);



?>






