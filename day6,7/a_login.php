<html>
<h1>ADMIN Login.</h1>
<body>
    <form action="a_login.php" method="POST">
    Username: <input type="text"  name="user" placeholder="Enter username" required><br>
    Password: <input type="password"  name="pass" placeholder="Enter password" required><br><br>

    <input type="submit" value="Login" name="b1" id="">
    </form>

    
  
</body>
</html>

<?php


if(@$_POST["b1"])
{

$user=@$_POST['user'];
$pass=@$_POST['pass'];

if ($user=='abcd' && $pass=='1234' ){
    $_SESSION['username'] = $username;

    echo "<script type='text/javascript'>alert('You are logged in');
      window.location='admin.php';
      </script>";

      $_SESSION['user'] = $user;
  }
  else{
      echo "Invalid credentials";
  }
}

?>
