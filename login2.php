
<form action="page2.php" method="post" style="border: 2px dotted blue; width: 400px;">
	<p>
		Username:<input name="uname" type="text" value="
		<?php if(isset($_COOKIE["uname"])) { echo $_COOKIE["uname"]; } ?>" class="input-field">
	</p>
		 <p>Password: <input name="password" type="password" value="
		 <?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" class="input-field">
	</p>
		<p><input type="checkbox" name="remember" /> Remember me
	</p>
		<p><input type="submit" value="Login"></span></p>
</form>