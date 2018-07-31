
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="loginpage.css">
    <meta http-equiv="content-type" 
        content="text/html;charset=utf-8" />                 
  

<script type="text/javascript">
if(!navigator.cookieEnabled) {
    alert("Cookies are disabled in your browser. " +
          "You must enable cookies to use this application.");
    }  
</script>               
</head>
<body>
<h1> Login to view SDSU Marathon Runner's Report </h1>

<div>

<form method="post" 
      action="http://jadran.sdsu.edu/~jadrn047/proj3/report1.php"
      name="login">
<p class="align">
<span><b>Password:</b></span> <input id="block" type="password" name="pass" /><br />
</p>
<p class="align1">
<input class="button" type="reset" value="Clear" />
<input class="button" type="submit" value="Log In" />
</p>
</form>

</div>
<script type="text/javascript">
document.login.user.focus();
</script>
    
</body>
</html>
