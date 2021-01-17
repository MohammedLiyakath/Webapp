
<!DOCTYPE html>
<html>
<head>
  <script>
     var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Passwords matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Passwords not matching';
  }
}
  </script>
  <link rel="stylesheet" href="style.css">
</head>
<body background="Background.png">
<div id="login-box">
  <div class="left">
    <h1>Sign up</h1>
    <form name="form1" method="post" action="signupuser.php" onSubmit="return check();" >
    <input type="text" name="name" placeholder="Name" />
    <input type="text" name="email" placeholder="E-mail" />
    <input type="text" name="city" placeholder="City" />
    <input type="password" name="password1" id="password" placeholder="Password" onkeyup='check();' />
    <input type="password" name="password2" id="confirm_password" placeholder="Retype password" onkeyup='check();' />
    <span id='message'></span><br>
    <input type="submit" name="signup_submit" value="Sign me up" />
    </form>
  </div>
  <div class="right">
    <h1>Sign In</h1>
    <form name="form2" method="post" action="signinuser.php" onSubmit="return check();" >
    <input type="text" name="email" placeholder="E-mail" />
    <input type="password" name="password" placeholder="Password" />
    <input type="submit" name="signin_submit" value="Sign In" /></div>
    </form>
  <div class="or">OR</div>
</div>
</body>
</html>
