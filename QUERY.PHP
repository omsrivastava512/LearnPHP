<font size =10px>
<?php

/* Create Connection */


    $servername = "localhost";
    $username = "root";
    $dbname = "STD1";
    

    $conn = new mysqli($servername, $username, "TPPkWL]fCQRdmY]r",$dbname);

    $conn->connect($servername,$username,"TPPkWL]fCQRdmY]r", $dbname) or die("Connection Failed");
//



/* Showing Tables in the database */
    $sql = "SHOW TABLES FROM $dbname";

    $result = $conn->query($sql);


    foreach($result->fetch_all() as $data){
        foreach($data as $value){
            
            echo $value . "<br>";
        }
        
    }
    echo "<br>";
    $result->data_seek(0);

    foreach($result->fetch_all() as $data){
        echo $data[0]."<br>";
        
    }
    
    $result->data_seek((0));
    while($row = $result->fetch_row()){
        
        echo "<br>";
        echo $row[0];
        
    }
//

echo "<hr>";


/* Creating New Table */
    $sql = "CREATE TABLE course(
        cid int(3) PRIMARY KEY,
        cname varchar(20),
        dept varchar(20)
        )";





//



echo "<hr>";
/* Selecting from Table */
    $sql= "SELECT name, roll from student where roll%5=0";

    $result = $conn->query(($sql));

    echo $result->num_rows . " rows found. <br><br>";

    foreach($result->fetch_all() as $row){
        
        $i = 0;
        while($i<count($row)){
            echo  " " . $row[$i]."\t";
            $i++;
        }
        
        echo "<br>";
    }
    echo "<hr>";
    $result->data_seek(0);
    while($row=$result->fetch_assoc()){
        echo $row["name"]."\t".$row["roll"]."<br>";
    }







//



?>





















<?php
$conn->close();     // close connection
?>