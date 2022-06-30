<?php

if(!empty($_POST["remember"])) {
	setcookie ("uname",$_POST["uname"],time()+ 3600, '/');
	setcookie ("password",$_POST["password"],time()+ 3600, '/');
	echo "Cookies Set Successfuly";
} else {
	setcookie("uname","");
	setcookie("password","");
	echo "Cookies Not Set";
}

?>

<p><a href="login2.php"> Go to Login Page </a> </p>