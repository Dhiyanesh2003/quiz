<?php

$setno=$_POST['setno'];
$hackid=$_POST['hackid'];
$a1=$_POST['1'];
$a2=$_POST['2'];
$a3=$_POST['3'];
$a4=$_POST['4'];
$a5=$_POST['5'];
$a6=$_POST['6'];
$a7=$_POST['7'];
$a8=$_POST['8'];
$a9=$_POST['9'];
$a10=$_POST['10'];
$usernamee=$_POST['usernamee'];
$hackid=$_POST['hackid'];
error_reporting(0);
//MySQL connection

$servername = "localhost";
$username = "root";
$passwordd = "";
$dbname = "master_sql";

// Create connection
$conn = new mysqli($servername, $username, $passwordd, $dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

//$setno=rand(1,3);
$setno=1;

$sql = "SELECT * FROM question where setno=".$setno.";";
$result = $conn->query($sql);

$count=1;
$countt=1;
$markk=0;
$x=1;

if ($result->num_rows > 0) {
    // output data of each row
    //while($row = $result->fetch_assoc()) {
    $row = $result->fetch_assoc();
    $answer=$row['answer'];
    $x=strcmp($answer,$a1);
    if($x==0){
        $markk+=1;
    }
    $x=1;
    $row = $result->fetch_assoc();
    $answer=$row['answer'];
    $x=strcmp($answer,$a2);
    if($x==0){
        $markk+=1;
    }
    $x=1;
    $row = $result->fetch_assoc();
    $answer=$row['answer'];
    $x=strcmp($answer,$a3);
    if($x==0){
        $markk+=1;
    }
    $x=1;
    $row = $result->fetch_assoc();
    $answer=$row['answer'];
    $x=strcmp($answer,$a4);
    if($x==0){
        $markk+=1;
    }
    $x=1;
    $row = $result->fetch_assoc();
    $answer=$row['answer'];
    $x=strcmp($answer,$a5);
    if($x==0){
        $markk+=1;
    }
    $x=1;
    $row = $result->fetch_assoc();
    $answer=$row['answer'];
    $x=strcmp($answer,$a6);
    if($x==0){
        $markk+=1;
    }
    $x=1;
    $row = $result->fetch_assoc();
    $answer=$row['answer'];
    $x=strcmp($answer,$a7);
    if($x==0){
        $markk+=1;
    }
    $x=1;
    $row = $result->fetch_assoc();
    $answer=$row['answer'];
    $x=strcmp($answer,$a8);
    if($x==0){
        $markk+=1;
    }
    $x=1;
    $row = $result->fetch_assoc();
    $answer=$row['answer'];
    $x=strcmp($answer,$a9);
    if($x==0){
        $markk+=1;
    }
    $x=1;
    $row = $result->fetch_assoc();
    $answer=$row['answer'];
    $x=strcmp($answer,$a10);
    if($x==0){
        $markk+=1;
    }
}

$sql = "INSERT INTO `mark`(`username`, `hackid`, `mark`) VALUES ('".$usernamee."','".$hackid."','".$markk."')";

if ($conn->query($sql) === TRUE) {
  header("Location: index.html");
  exit();
} else {
  header("Location: index.html");
  exit();
}
$conn->close();

?>