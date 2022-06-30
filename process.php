<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_sa3";
$dbport = "3306";

$uname = stripcslashes($uname);
$uname = stripcslashes($password);
$uname = mysql_real_escape_string($uname);
$uname = mysql_real_escape_string($password);

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
    die("Connection failed" .mysqli_connect_error());

}




$result = mysqli_query($conn,"SELECT * FROM user where uname = '$uname' and password = '$password'");
or die("failed".mysqli_error());
$row = mysql_fetch_array($result);
if($row['uname'] == $uname && $row ['password'] == $password)
{
    echo "Login success, Welcome".$row['uname'];
}
else
{
    echo "failed to login";
}

?>

