<HTML>
<BODY>

         <form action="functions.php" method="post">
                  <input type="submit" value="Submit"/><br>
        </form>
        
        <?php
		function intro($name , $age)
		{
			echo "Hello $name and your age is $age <br>";
		}
		
		intro("Anshuman", 43);
	?>
</BODY>
</HTML>

