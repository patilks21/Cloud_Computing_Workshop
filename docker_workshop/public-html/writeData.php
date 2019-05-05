<?php 
	$servername="db";
$username="root";
$password="root";
$db="mydb";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    $text = $_POST["anytext"];
    $uname=$_COOKIE['uname'];
    $text .= "\n";
    $file = fopen("anytext.txt", "a+");
    fwrite($file, $uname."-".$text);
    fclose($file);
    
    $sql = "INSERT INTO notes VALUES ('".$uname."', '".$text."');";

	if ($conn->query($sql) === TRUE) {
	    echo "<br><p align='center'>Note Written in anytext.txt and database!!! <a href='note.html'>Click here</a> to take a note again</p><br>";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
    
    exit;
?>
