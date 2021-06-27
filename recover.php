<?php
session_start();
$con=mysqli_connect('localhost','root','root');

mysqli_select_db($con, 'userregistration');
if(isset($_POST['submit'])){
$email = $_POST['email'];
$s = "SELECT * FROM usertable WHERE email= '$email'";
$result = mysqli_query($con, $s);
$num  = mysqli_num_rows($result);
if($num)
{
    $userdata = mysqli_fetch_array($result);
    $username= $userdata['username'];
    $subject= "Email Activitation";
    $body ="Hi , $username. Click here to reset password http://localhost/loginpage/recover.php";
    $sender_mail= "From: bbhagta.5@gmail.com";
    if(mail($email,$subject,$body,$sender_mail)){
        $_SESSION['msg']="Check your mail to activate your account $email";
        header('location:login.php');
    }
    else{
        echo "Email sending failed...";
    }
}
    else{
        echo "Email does not match..";
    }
}


?>
<html>  
<head>
    
    <title> Login And Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
    
<body>
    <div class="container">
    <div class="login-box">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10  login-right">
        <h2>Recover your account</h2>
            <form action="validation.php" method="post">
                <div class="form-group">
                <label>Please fill E-mail</label>
                <input type="E-mail" placeholder="E-mail" name="email" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Send recovery mail</button>
            </form>
        </div>
        
    </div>
    </div>
    </div>
</body>
    
</html>