<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KotakHitam-SignUp</title>
    <link rel="stylesheet" type="text/css" href="css/sign-up.css">
</head>
<body id="body">
<div id="login-box" >
<form action="connectionphp/insertdata.php" method="post">
    <div class="left">
      <h1>Sign up</h1>
      
      <input type="text" name="username" placeholder="Username" />
      <input type="text" name="email" placeholder="E-mail" />
      <input type="password" name="password" placeholder="Password" />
      <input type="password" name="password2" placeholder="Retype password" />
      
      <input type="submit" name="signup_submit" value="Sign me up" />
    </div>
    
    <div class="right">
      <span class="loginwith">Sign in with<br />social network</span>
      
      <button class="social-signin facebook">Log in with facebook</button>
      <button class="social-signin twitter">Log in with Twitter</button>
      <button class="social-signin google">Log in with Google+</button>
    </div>
    <div class="or">OR</div>
  </div>   
</form>
</body>
</html>
