<?php
$servername = "localhost";
$username = "root";
$password = "TPPkWL]fCQRdmY]r";
$dbname = "STD1";

$conn = new mysqli();
$conn->connect($servername,$username,$password,$dbname) OR die("Connection Failed");

$sql = "SELECT DISTINCT COURSE FROM student";

$result = $conn->query($sql) or die("Query FAiled");

// print_r($result->fetch_all(MYSQLI_ASSOC));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
         body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    /* Styling for the form (optional) */
        form {
        display: block;
      padding: 20px;
      justify-content: center;
      align-items: center;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #f9f9f9;
    }
    label{
        display: block;
        display: block;
      width: 100%;
      padding: 5px;
      box-sizing: border-box;
    }
    input,select{
        display: block;
      width: 100%;
      margin-bottom: 10px;
      padding: 8px;
      border-radius: 4px;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }
    .s:hover{
        
            display: inline-block;
            
            background-color:aqua;
            color: white;
            
            }

    </style>
</head>

<body>


<form action="submit.php" method="post" name="student_details">

<label for="name" form="studen_details" >Name: </label>
<input type="text" name="name" placeholder="Your Full Name" maxlength="50" pattern="[A-Za-z ]+" required > <br>
 
<label for="roll" form="student_details" >Roll No: </label>
<input type="number" name="roll" placeholder="Your Roll No." maxlength="11" pattern="[1-9]+" required> <br>
 
<label for="course" form="student_details" >Course </label>
<select name="course" id="course">
    <option value="null" selected disabled>Select</option>
    <?php foreach($result->fetch_all(MYSQLI_ASSOC) as $data){?>
    <option value="<?php echo $data['COURSE']?>"><?php echo $data['COURSE'];}?>

</select>
<form action="">
 
  1  <input type="radio" name="rate" value="gdhgf" >
  2  <input type="radio" name="rate" value="2">
  3  <input type="radio" name="rate" value="3">
   4 <input type="radio" name="rate" value="4">
    5<input type="radio" name="rate" value="5">

    <select name="Nma" id="">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>


<input type="submit" value="Submit" class="s">

</form>

</body>
</html>

<?php if(isset($_POST['name'])){
$name = $_POST['name'];
$roll = $_POST['roll'];
$course = $_POST['course'];

$sql = "INSERT INTO student(name,roll,course) VALUES('{$name}', '{$roll}', '{$course}');" ;

$conn->query($sql) or die("Invalid Query");

$conn->close();

header("Location: submit.php");
/* header function is used to redirect the user to the desired page after the form is submitted. 
It is necessary to avoid duplicate submission in case the user refreshes the page*/

exit();
/* exit() function is used to terminate the current script execution and prevent further execution. */




}



?>