<?php
if(isset($_POST['submit'])){
  $user=$_POST['username'];
  $pass=$_POST['password'];
  if(empty($user)){
    echo "username is mandatory";
  }
  elseif(strlen($user)<=3){
    echo "username should be more than 3 character";
  }
  else{
    echo $user;
  }
  if(empty($pass)){
    echo "Password is mandatory";
  }
  elseif(strlen($pass)<=7){
    echo "Password should be more than 8 character";
  } 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="formvalidation.php" method="post">
      Name: <input type="text" name="username" id=""><br>
      Password: <input type="password" name="password" id=""><br><br>
      <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
