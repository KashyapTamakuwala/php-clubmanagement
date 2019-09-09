<html>
<body>
	<?php
		$str =  "This Is a String";
		echo $str."<br>";
		echo strtolower($str)."<br>";
		echo strtoupper($str)."<br>";
		echo "Anshuman Aich"[0];
		$str[0] = "C";
		echo $str."<br>";
		str_replace("Chis","This", $str)."<br>";
		echo $str;
		//grabbing a sub string 
		echo substr($str, 5);
	?>

</body>
</html>

