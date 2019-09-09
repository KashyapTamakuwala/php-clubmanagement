<HTML>
<BODY>
	<form action="userinput.php" method="get">
		<input type="text" name="username" /><br>
		<input type="number" name="age" /><br>
		<input type="password" name="pass"><br>
		Apples : <input type="checkbox" name="fruits[]" value="Apples"><br>
		Oranges: <input type="checkbox" name="fruits[]" value="Oranges"><br>
		Banana : <input type="checkbox" name="fruits[]" value="Banana"><br>
		Grapes: <input type="checkbox" name="fruits[]" value="Grapes"><br>
		
		<input type="submit" value="Submit"/><br>
	</form>	

	<?php
		echo "Your name is ".$_GET['username']."<br>";	
		echo "Your age is ".$_GET['age']."<br>";	
		echo "password  = " .sha1($_GET["pass"])."<br>";
		
		$fruits = $_POST["fruits"]; // this is an array

		print_r($fruits);
	?>
</BODY>
</HTML>
