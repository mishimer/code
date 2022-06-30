<?php

$uname = $POST['uname'];
$uname = $POST['password'];

$uname = stripcslashes($uname);
$uname = stripcslashes($password);
$uname = mysql_real_escape_string($uname);
$uname = mysql_real_escape_string($password);

mysql_connect("localhost","root","")
mysql_select_db("user");

$result = mysqli_query($conn,"SELECT * FROM user where uname = '$uname' and password = '$password'");
or die("failed".mysqli_error());
$row = mysql_fetch_array($result);
if($row['uname'] == $uname && $row ['password'] == $passoword)
{
    echo "Login success, Welcome".$row['uname'];
}
else
{
    echo "failed to login";
}

?>

<p><a href="login2.php"> Go to Login Page </a> </p>