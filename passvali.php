<?php


$user=$usererr=$pass=$passerr="";
if(isset($_POST['submit'])){
 $user= $_POST['username'];
 $pass= $_POST['password'];

$uppercase = preg_match('@[A-Z]@', $pass);
$lowercase = preg_match('@[a-z]@', $pass);
$number    = preg_match('@[0-9]@', $pass);
$specialChars = preg_match('@[^\w]@', $pass);



if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
  $passerr= 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.'; 
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP validation</title>
</head>
<body>
  <form action="validation.php" method="post">
    Username: <input type="text" name="username" id=""> <?php echo $usererr;?> <br>
    Password: <input type="password" name="password" id=""><?php echo $passerr;?><br>
    <input type="submit" name="submit" value="Register">
  </form>
</body>
</html>