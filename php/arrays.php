<HTML>
<BODY>

	 <form action="arrays.php" method="post">
                Apples : <input type="checkbox" name="fruits[]" value="Apples"><br>
                Oranges: <input type="checkbox" name="fruits[]" value="Oranges"><br>
                Banana : <input type="checkbox" name="fruits[]" value="Banana"><br>
                Grapes: <input type="checkbox" name="fruits[]" value="Grapes"><br>

                <input type="submit" value="Submit"/><br>
        </form>
	
	<?php
		/*$words = array("ram", "pcb", "keyboard", "mouse", "monitor");
		$words[8] = "firmware";
		echo count($words);	
		echo "<br>";	
		print_r($words);*/


		$fruits = $_POST["fruits"]; // this is an array

		print_r($fruits)."<br>";
		var_dump($fruits);
		echo "this is a string";
	?>
</BODY>
</HTML>
