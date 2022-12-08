
<html>
  <body>
<?php
$name=$email=$comment=$gender="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $name=test_input($_POST["uname"]);
  $email = test_input($_POST["email"]);
  $comment=test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}
function test_input($data){
     $data=trim($data);
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}
?>

   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
     Name:<input type="text" name="uname" id="" require ><br><br>
     Email:<input type="email" name="email" id=""><br><br>
     Comment:<textarea name="comment" id="" cols="30" rows="10"></textarea><br><br>
     Gender:<input type="radio" name="gender" value="female">female
     <input type="radio" name="gender" value="male">male<br><br>
     <input type="submit" name ="submit">
   </form>

   <?php
echo $name."<br>";
echo $email."<br>";
echo $comment."<br>";
echo $gender;

?>

  </body>
</html>
