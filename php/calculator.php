<HTML>
<BODY>
	<form action="calculator.php" method="get" >
		<input type="number" name="num1"><br>
		<input type="number" name="num2"><br>
		<input type="submit" value="Calculate"><br>
	</form>

	<?php
		echo $_GET["num1"] + $_GET["num2"]; 
	?>
</BODY>
</HTML>
