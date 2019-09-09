<HTML>
<BODY>

         <form action="assoc.php" method="post">
		<input type="text" name="std"><br>
                <input type="submit" value="Submit"/><br>
        </form>
        
        <?php
		$marks = array("Anshuman" => "A+", "Himanshu" => "B-", "Varun" => "A-");
	
		$getmarks = $_POST["std"];
		echo $marks[$getmarks];
	?>
</BODY>
</HTML>

