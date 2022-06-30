<html>
    <body>
        <form action="process.php" method="post">
                <table border=0>
                    <tr>
                    <td> Login
</td>
</tr>

                    <tr>
                        <td>
                            Username:
                        </td>
                        <td>
                            <input type=text name="uname">
                            <?php if(isset($_COOKIE["uname"]))
                             { 
                                echo $_COOKIE["uname"]; 
                            } 
                            ?>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            Password:
                        </td>
                        <td>
                            <input type=text name="password">
                            <?php if(isset($_COOKIE["password"])) 
                            
                            {
                                 echo $_COOKIE["password"]; 
                                } 
                            ?>

                        </td>

                    </tr>

<tr>
    <td>
<input type=submit name="n" value="Login">
</td>
<td>
<p><input type="checkbox" name="remember" /> Remember me
	</p>
</td>
</tr>
                </table>