<?php

$servername="db";
$username="root";
$password="root";
$db="mydb";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$uname=$_POST["username"];
$pass=$_POST["password"];

$sql = "SELECT name, password FROM userinfo where username = '".$uname."';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if($row["password"] == $pass) {
    	setcookie('uname',$uname,time()+360);
    	echo "<br><p align='center'>Welcome ".$row["name"]."!!! <a href='note.html'>Click here</a> to take a note</p><br>";
    }
    else{
    	echo "<br><p align='center'>Incorrect Password!!! :(</p><br>";
    }
} else {
    echo "<br><p align='center'>User Not Found :(</p><br>";
}
$conn->close();
?>