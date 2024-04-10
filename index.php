<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login | Jasons</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="page">
  <p>
          <?php
        if (isset($_GET['status'])) {
            $errorCode = htmlspecialchars($_GET['status']); // Sanitize input
            switch ($errorCode) {
                case 'stmtfailed':
                    echo '<p style="color: red; text-align: center;">An unexpected error occurred!</p>';
                    break;
                case 'emptyinput':
                    echo '<p style="color: red; text-align: center;">All fields are required!</p>';
                    break;
                case 'loginfailed':
                    echo '<p style="color: red; text-align: center;">Invalid Email or Password</p>';
                    break;
                case 'emailsent':
                    echo '<p style="color:green; text-align:center">Kindly Check your Email and Login</p>';
                    break; 
                case 'errorlogginyouin':
                    echo '<p style="color:red; text-align:center">Error Loggin you in</p>'; 
                    break;
                case 'logoutsuccess':
                    echo '<p style="color:red; text-align:center">Logout Successful</p>'; 
                    break;
                default:
                    // Log unrecognized error codes for debugging
                    error_log("Unrecognized error code: $errorCode");
                    echo '<p style="color: red; text-align: center;">An unexpected error occurred! Please try again later.</p>';
                    break;
            }
        } else {
            echo '<p style="color: red; text-align: center;">Kindly fill in your details correctly!</p>';
        }
        ?>

    </p>
  <div class="container">
    <div class="left">
      <div class="login">Login</div>
      <div class="eula">Jasons Health Organization</div>
    </div>
    <div class="right">
      <svg viewBox="0 0 320 300">
        <defs>
          <linearGradient
                          inkscape:collect="always"
                          id="linearGradient"
                          x1="13"
                          y1="193.49992"
                          x2="307"
                          y2="193.49992"
                          gradientUnits="userSpaceOnUse">
            <stop
                  style="stop-color:#ff00ff;"
                  offset="0"
                  id="stop876" />
            <stop
                  style="stop-color:#ff0000;"
                  offset="1"
                  id="stop878" />
          </linearGradient>
        </defs>
        <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
      </svg>
      <div class="form">
        <form  method="post" action="includes/login.inc.php">
      	<a class="link" href="signup.php">Dont have an Account? Create an Account</a>

        <label for="email">Email</label>
        <input class="inp" type="email" name="email" id="email">
        <label for="password">Password</label>
        <input class="inp" type="password" name="pass_word" id="password">
        <input type="submit" id="submit" name="submit" value="Submit">
      </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>