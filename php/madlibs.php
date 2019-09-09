<HTML>
<BODY>
	<form action="madlibs.php" method="get">
	     Color:<input type="text" name="color"><br>
	     Plural Noun:<input type="text" name="pluralnoun"><br>	
	     Celebrity:<input type="text" name="celebrity"><br>	
		<input type="submit" value="Submit">
	</form>

	<?php

		$color = $_GET['color'];
		$pluralnoun = $_GET['pluralnoun'];
		$celebrity = $_GET['celebrity'];

		echo "<br>";

		echo "Roses are $color"."<br>";
		echo "$pluralnoun are blue"."<br>";
		echo "I love $celebrity"."<br>";	
	?>

</BODY>
</HTML>
