<?php
session_start();
header('location:login.php');
$con=mysqli_connect('localhost','root','root');

mysqli_select_db($con, 'userregistration');
$name = $_POST['user'];
$pass = $_POST['password'];
$email = $_POST['email'];
$s = "SELECT * FROM usertable WHERE name= '$name'";


$result = mysqli_query($con, $s);
$num  = mysqli_num_rows($result);
if($num==1)
    echo"Username already taken";
else
{
    $reg="insert into usertable (name, password,email) values ('$name','$pass','$email')";
    mysqli_query($con,$reg);
    echo "Registration successfull";
}


?>



