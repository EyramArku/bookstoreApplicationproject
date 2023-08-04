<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "bookstoreapp";

$fname = $_POST['FirstName'];
$sname = $_POST['Surname'];
$rollNo = $_POST['RollNumber'];
$age = $_POST['Age'];
$program = $_POST['Program'];
$course = $_POST['Course'];


$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['insert']))
    {
   
       $stmt = $conn->prepare("INSERT  INTO users (FirstName, Surname, RollNumber, Age, Program, Course) VALUES (?, ?, ?, ?, ?, ?)");
       $stmt->bind_param("ssssss",$fname, $sname, $rollNo, $age, $program, $course);
        $stmt->execute();
        $stmt->close();
    echo "<h2>Thank you for Signing Up</h2>";
    }

if (isset($_POST['delete']))
    { 
       $sql = "DELETE  FROM users WHERE RollNumber ='$rollNo'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $stmt->close();
    echo "New record deleted";
    }

 $conn->close();

?>
