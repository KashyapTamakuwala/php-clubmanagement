<?php 
session_start();

if (isset($_COOKIE["bffrom"])){ $bffrom = $_COOKIE["bffrom"];} else $bffrom = 0;
if (isset($_COOKIE["bfto"])){ $bfto = $_COOKIE["bfto"];} else $bfto = 0;
if (isset($_COOKIE["lunchfrom"])){ $lunchfrom = $_COOKIE["lunchfrom"];} else $lunchfrom = 0;
if (isset($_COOKIE["lunchto"])){ $lunchto = $_COOKIE["lunchto"];} else $lunchto = 0;
if (isset($_COOKIE["dinnerfrom"])){ $dinnerfrom = $_COOKIE["dinnerfrom"];} else $dinnerfrom = 0;
if (isset($_COOKIE["dinnerto"])){ $dinnerto = $_COOKIE["dinnerto"];} else $dinnerto = 0;
if (isset($_COOKIE["gymfrom"])){ $gymfrom = $_COOKIE["gymfrom"];} else $gymfrom = 0;
if (isset($_COOKIE["gymto"])){ $gymto = $_COOKIE["gymto"];} else $gymto = 0;
if (isset($_COOKIE["swimfrom"])){ $swimfrom = $_COOKIE["swimfrom"];} else $swimfrom = 0;
if (isset($_COOKIE["swimto"])){ $swimto = $_COOKIE["swimto"];} else $swimto = 0;


if(isset($_SESSION["username"]))
{
		if(isset($_POST["bfto"]))
		{
			$bffrom = $_POST["bffrom"]; 
			$bfto = $_POST["bfto"];
			setcookie("bffrom",$bffrom);
			setcookie("bfto",$bfto);
		}	
		if(isset($_POST["lunchto"]))
		{
			$lunchfrom = $_POST["lunchfrom"]; 
			$lunchto = $_POST["lunchto"];
			setcookie("lunchfrom",$lunchfrom);
			setcookie("lunchto",$lunchto);
		}
		if(isset($_POST["dinnerto"]))
		{
			$dinnerfrom = $_POST["dinnerfrom"]; 
			$dinnerto = $_POST["dinnerto"];
			setcookie("dinnerfrom",$dinnerfrom);
			setcookie("dinnerto",$dinnerto);
		}
		if(isset($_POST["gymto"]))
		{
			$gymfrom = $_POST["gymfrom"]; 
			$gymto = $_POST["gymto"];
			setcookie("gymfrom",$gymfrom);
			setcookie("gymto",$gymto);
		}
		if(isset($_POST["swimto"]))
		{
			$swimfrom = $_POST["swimfrom"]; 
			$swimto = $_POST["swimto"];
			setcookie("swimfrom",$swimfrom);
			setcookie("swimto",$swimto);
		}
}
else
{
	// $time = 7;
	header('Location: /clubmanagement/Login/');
	die();
}

?>

<!DOCTYPE html>
<HTML>
<HEAD>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<meta content="utf-8" http-equiv="encoding">

   <script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous">
	</script>

	<script src="timeline/Timeline-Slider-jQuery-Timespace/jquery.timespace.js"></script>
  <link rel="stylesheet" href="timeline/Timeline-Slider-jQuery-Timespace/css/jquery.timespace.dark.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</HEAD> 
<BODY>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/clubmanagement/regna/">REGNA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/clubmanagement/regna/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/clubmanagement/logout.php/">Logout</a>
      </li>
      
  </div>
</nav>
<center>
	<h1> Plan your Day </h1>
	<br>
	<h2><?php echo $_SESSION["username"] ?> </h2>
</center>
<table class="table table-striped first">

	<thead>
			<tr>
				<th><center>Breakfast</center></th>
				<th><center>Lunch</center></th>
				<th><center>Dinner</center></th>
				<th><center>Swimming</center></th>
				<th><center>Gym</center></th>
			</tr>
	</thead>

	<tbody>
		<tr>
			<!-- Breakfast -->
			<form action="" name="bf" method="post">
			<td><table><td><select name="bffrom" class="custom-select">
				<option selected>From</option>
				<option value="6" >6:00 AM</option>
				<option value="7">7:00 AM</option>
				<option value="8">8:00 AM</option>
				<option value="9">9:00 AM</option>
				<option value="10">10:00 AM</option>
				</select>
				<td><select name="bfto" onchange="this.form.submit()" class="custom-select">
				<option selected>To</option>
				<option value="7">7:00 AM</option>
				<option value="8">8:00 AM</option>
				<option value="9">9:00 AM</option>
				<option value="10">10:00 AM</option>
				<option value="11">11:00 AM</option>
				</select></td></table>
			</td>
</form>

				<!-- Lunch -->
				<form action="" name="ln" method="post"> 
			<td><table><td><select name="lunchfrom" class="custom-select">
				<option selected>From</option>
				<option value="12">12:00 PM</option>
				<option value="13">1:00 PM</option>
				<option value="14">2:00 PM</option>
				<option value="15">3:00 PM</option>
				<option value="16">4:00 PM</option>
			</select></td>
				<td><select name="lunchto" onchange="this.form.submit()" class="custom-select">
				<option selected>To</option>
				<option value="13">1:00 PM</option>
				<option value="14">2:00 PM</option>
				<option value="15">3:00 PM</option>
				<option value="16">4:00 PM</option>
				<option value="17">5:00 PM</option>
				</select></td></table>
			</td>
</form>

			<!-- Dinner -->
			<form action="" method="post">
			<td><table><td><select name="dinnerfrom" class="custom-select">
				<option selected>From</option>
				<option value="18">6:00 PM</option>
				<option value="19">7:00 PM</option>
				<option value="20">8:00 PM</option>
				<option value="21">9:00 PM</option>
				<option value="22">10:00 PM</option>
				</select></td>
				<td>
				<select class="custom-select" name="dinnerto" onchange="this.form.submit()">
				<option selected>To</option>
				<option value="19">7:00 PM</option>
				<option value="20">8:00 PM</option>
				<option value="21">9:00 PM</option>
				<option value="22">10:00 PM</option>
				<option value="23">11:00 PM</option>
					</select></td></table>
			</td>
</form>

			<!-- Swim -->
			<form action="" method="post">
			<td>
				<table><td><select class="custom-select" name="swimfrom">
				<option selected>From</option>
				<option value="6">6:00 AM</option>
				<option value="7">7:00 AM</option>
				<option value="8">8:00 AM</option>
				<option value="9">9:00 AM</option>
				<option value="10">10:00 AM</option>
				<option value="11">11:00 AM</option>
				<option value="12">12:00 PM</option>
				<option value="13">13:00 PM</option>
				<option value="14">14:00 PM</option>
				<option value="15">15:00 PM</option>
				<option value="16">16:00 PM</option>
				<option value="17">17:00 PM</option>
				<option value="18">18:00 PM</option>
				<option value="19">19:00 PM</option>
				<option value="20">20:00 PM</option>
				<option value="21">21:00 PM</option>
				<option value="22">22:00 PM</option>


				</select></td>

				<td><select class="custom-select" name="swimto" onchange="this.form.submit()">
				<option selected>To</option>
				<option value="7">7:00 AM</option>
				<option value="8">8:00 AM</option>
				<option value="9">9:00 AM</option>
				<option value="10">10:00 AM</option>
				<option value="11">11:00 AM</option>
				<option value="12">12:00 PM</option>
				<option value="13">13:00 PM</option>
				<option value="14">14:00 PM</option>
				<option value="15">15:00 PM</option>
				<option value="16">16:00 PM</option>
				<option value="17">17:00 PM</option>
				<option value="18">18:00 PM</option>
				<option value="19">19:00 PM</option>
				<option value="20">20:00 PM</option>
				<option value="21">21:00 PM</option>
				<option value="22">22:00 PM</option>
				<option value="23">23:00 PM</option>

		</select></td></table>
				</td>
</form>

		<!-- Gym -->
		<form method="post" action="">
			<td>
				<table><td><select name="gymfrom" class="custom-select">
				<option selected>From</option>
				<option value="6">6:00 AM</option>
				<option value="7">7:00 AM</option>
				<option value="8">8:00 AM</option>
				<option value="9">9:00 AM</option>
				<option value="10">10:00 AM</option>
				<option value="11">11:00 AM</option>
				<option value="12">12:00 PM</option>
				<option value="13">13:00 PM</option>
				<option value="14">14:00 PM</option>
				<option value="15">15:00 PM</option>
				<option value="16">16:00 PM</option>
				<option value="17">17:00 PM</option>
				<option value="18">18:00 PM</option>
				<option value="19">19:00 PM</option>
				<option value="20">20:00 PM</option>
				<option value="21">21:00 PM</option>
				<option value="22">22:00 PM</option>
	</select></td>

				<td><select class="custom-select" name="gymto" onchange="this.form.submit()">
				<option selected>To</option>
				<option value="7">7:00 AM</option>
				<option value="8">8:00 AM</option>
				<option value="9">9:00 AM</option>
				<option value="10">10:00 AM</option>
				<option value="11">11:00 AM</option>
				<option value="12">12:00 PM</option>
				<option value="13">13:00 PM</option>
				<option value="14">14:00 PM</option>
				<option value="15">15:00 PM</option>
				<option value="16">16:00 PM</option>
				<option value="17">17:00 PM</option>
				<option value="18">18:00 PM</option>
				<option value="19">19:00 PM</option>
				<option value="20">20:00 PM</option>
				<option value="21">21:00 PM</option>
				<option value="22">22:00 PM</option>
				<option value="23">23:00 PM</option>
				</select></td></table>
				</td>
</form>

		</tr>
	</tbody>
	<tfoot>
	<tr>
		<td></td>
		<td></td>
		<td><center>
		<form method="post" action="pyddata.php">
		<input type="hidden" name="bffrom" value ="<?php echo $bffrom ?>"> 
		<input type="hidden" name="bfto" value ="<?php echo $bfto ?>">
		<input type="hidden" name="dinnerfrom" value ="<?php echo $dinnerfrom ?>">
		<input type="hidden" name="dinnerto" value ="<?php echo $dinnerto ?>">
		<input type="hidden" name="swimfrom" value ="<?php echo $swimfrom ?>">
		<input type="hidden" name="gymfrom" value ="<?php echo $gymfrom ?>">
		<input type="submit" class="btn btn-outline-dark btn-lg" value="Send">
		</form></center>
		</td>
	</tr>
	</tfoot>
</table>


  <div id="timeline">

<script>

	
		$('#timeline').timespace({

			// 24-hour timeline
			data: {
				headings: [
					{start: 0, end: 6, title: 'Night'},
					{start: 6, end: 12, title: 'Morning'},
					{start: 12, end: 18, title: 'Afternoon'},
					{start: 18, title: 'Evening'},
				],
				events: [
					{
            start: "<?php echo $bffrom ?>", 
						title: 'Breakfast', 
            description: 'Eat a healthy breakfast.',
            end: "<?php echo $bfto ?>",
						// width: 8 
						//noDetails: true,
						// class:string,
						 //callback: Function
					},
          {start: "<?php echo $gymfrom ?>", end: "<?php echo $gymto ?>", title: 'Gym', description: 'Go to Gym.'},
					{start: "<?php echo $lunchfrom ?>", end: "<?php echo $lunchto ?>", title: 'Lunch', description: 'Eat a healthy lunch.'},
					{start: "<?php echo $dinnerfrom ?>", end: "<?php echo $dinnerto ?>", title: 'Dinner', description: 'Eat a healthy Dinner.'},
					{start: "<?php echo $swimfrom ?>", end: "<?php echo $swimto ?>", title: 'Swimming', description: 'Go for a swim.'}
				]
			},

		});


	</script>

  </div>
</BODY>
</HTML>
