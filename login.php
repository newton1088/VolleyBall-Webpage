<html>
<head>
    
    <title> Login And Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
    
<body>
    <div class="container">
    <div class="login-box">
    <div class="row">
        <div class="col-md-6 login-left">
        <h2>Login Here</h2>
            <form action="validation.php" method="post">
                <div class="form-group">
                <label>Username</label>
                <input type="text" name="user" class="form-control" required>
                </div>
                
                <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
        <div class="col-md-6 login-right">
        <h2>Register Here</h2>
            <form action="registration.php" method="post">
                <div class="form-group">
                <label>Username</label>
                <input type="text" name="user" class="form-control" required>
                </div>
                
                <div class="form-group">
                <label>E-mail</label>
                <input type="E-mail" name="email" class="form-control" required>
                </div>
                
                <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
    <div class="d-flex justify-content-center links" style:color>
						<a href="recover.php" style="color:">Forgot your password?</a>
					
    </div>
    </div>
    </div>
</body>
    
</html>