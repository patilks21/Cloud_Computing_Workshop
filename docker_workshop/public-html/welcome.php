 <?php
 echo "hii";
$myfile = fopen("newfile.txt", "a+") or die("Unable to open file!");
$uname=$_POST["name"];
$email=$_POST["email"];
$txt = $uname." ".$email." "."\n";
fwrite($myfile, $txt);

fclose($myfile);
?> 
