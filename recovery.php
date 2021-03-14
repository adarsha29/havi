<?php


$fname=$_GET["fn"];
$lname=$_GET["ln"];
$email=$_GET["em"];
$flag=$_GET["fl"];

$conn=mysqli_connect("localhost","root","","sales");
if($flag==0)
{
	
$q="delete from user where firstname='$fname' and email='$email'";
mysqli_query($conn,$q);
header("location:block.php");

}
if($flag==1)
{
	
$q1="update user set flag=1 where firstname='$fname' and email='$email'";
mysqli_query($conn,$q1);
header("location:block.php");

}
?>
