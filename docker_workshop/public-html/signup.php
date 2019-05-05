<?php

$servername="db";
$username="root";
$password="root";
$db="mydb";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$name=$_POST["name"];
$contact=$_POST["contact"];
$uname=$_POST["username"];
$pass=$_POST["password"];

$sql = "INSERT INTO userinfo VALUES ('".$name."', '".$contact."', '".$uname."', '".$pass."');";

if ($conn->query($sql) === TRUE) {
    echo "<br><p align='center'>Sign Up Successfull!!! <a href='index.html'>Click here</a> to login</p><br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>